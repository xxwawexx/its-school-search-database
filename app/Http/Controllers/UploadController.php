<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\School;
use App\Models\Image;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if (!$request->hasFile('files')) {
            return response()->json(['message' => 'No files found'], 400);
        }

        DB::beginTransaction();

        try {
            $files = $request->file('files');
            $filePaths = [];

            foreach ($files as $file) {
                $originalFilename = $file->getClientOriginalName();
                $schoolName = $this->extractSchoolName($originalFilename);
                $fileType = $this->extractFileType($originalFilename);
                $school = School::where('name', $schoolName)->first();

                if (!$school) {
                    throw new \Exception("School not found for file: {$originalFilename}");
                }

                $schoolInfo = $school->info;
                $newFilename = $this->generateUniqueFilename($originalFilename);

                // Store files in a temporary location first
                $tempPath = $file->storeAs('temp', $newFilename);

                // Move files to the final destination
                $finalPath = "img/school/{$newFilename}";
                Storage::move($tempPath, "public/{$finalPath}");

                // Store the new filename and details in the images table
                Image::create([
                    'filename' => $newFilename,
                    'alt' => null,
                    'purpose' => 'school search',
                    'type' => $fileType,
                    'more' => $schoolInfo,
                ]);

                $filePaths[] = $finalPath;
            }

            DB::commit();

            return response()->json(['message' => 'Files uploaded successfully', 'paths' => $filePaths], 200);

        } catch (\Exception $e) {
            DB::rollBack();

            // Roll back any files that were moved
            foreach ($filePaths as $path) {
                Storage::delete("public/{$path}");
            }

            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    private function extractSchoolName($filename)
    {
        // Remove the file extension
        $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);

        // Known suffixes to remove
        $suffixes = ['-logo', '-primary', '-extra'];

        // Remove any known suffix along with trailing numbers
        foreach ($suffixes as $suffix) {
            $filenameWithoutExt = preg_replace('/' . preg_quote($suffix, '/') . '-?\d*$/', '', $filenameWithoutExt);
        }

        return trim($filenameWithoutExt);
    }

    private function extractFileType($filename)
    {
        // Remove the file extension
        $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);

        // Known suffixes to match
        $suffixes = ['logo', 'primary', 'extra'];

        foreach ($suffixes as $suffix) {
            if (preg_match('/' . preg_quote($suffix, '/') . '(\-\d+)?$/', $filenameWithoutExt)) {
                return $suffix;
            }
        }

        return null; // Return null if no known suffix is found
    }

    private function generateUniqueFilename($filename)
    {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $uniqueName = Str::random(20);
        return $uniqueName . '.' . $extension;
    }
}
