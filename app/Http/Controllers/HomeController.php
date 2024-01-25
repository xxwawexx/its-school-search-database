<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\School;
use App\Models\SchoolInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'ITS Education Asia - School Search Database'
        ];

        return view('home')->with($data);
    }

    public function SchoolSearchPage()
    {
        // Initialize session variable if not set
        if (is_null(Session::get('SROS'))) {
            Session::put('SROS', rand());
        }

        // Retrieve request parameters
        $type = request()->type;
        $country = request()->country;
        $location = request()->location;
        $gender = request()->gender;
        $schoolName = request()->schoolName;
        $ages = request()->ages;
        $curriculum = request()->curriculum;

        // Build the query
        $query = DB::table('schools')
            ->join('school_information', 'schools.info', '=', 'school_information.id')
            ->select('schools.*', 'school_information.gender', 'school_information.agesMin', 'school_information.agesMax')
            ->when($type, function ($query, $type) {
                return $query->where('schools.type', 'LIKE', '%' . $type . '%');
            })
            ->when($country, function ($query, $country) {
                return $query->where('schools.country', '=', $country);
            })
            ->when($location, function ($query, $location) {
                return $query->where('schools.location', '=', $location);
            })
            ->when($schoolName, function ($query, $schoolName) {
                return $query->where('schools.name', 'LIKE', '%' . $schoolName . '%');
            })
            ->when($gender, function ($query, $gender) {
                return $query->where('school_information.gender', '=', $gender);
            })
            ->when($curriculum, function ($query, $curriculum) {
                return $query->where('school_information.curriculum', 'LIKE', '%' . $curriculum . '%');
            })
            ->when($ages, function ($query, $ages) {
                $agesArr = explode("/", $ages);
                if(count($agesArr) == 2){
                    return $query->where('school_information.agesMin', '>=', $agesArr[0])
                                ->where('school_information.agesMax', '<=', $agesArr[1]);
                } else {
                    return $query;
                }
            })
            ->where('schools.status', 'LIKE', '0%')
            ->orderByRaw('case when status LIKE "%premier%" then 1 else 2 end');

        // Check if 'X-Test-Header' is 'ssdb' and modify the request path
        if (request()->header('X-Test-Header') === 'ssdb') {
            request()->server->set('REQUEST_URI', '/school' . request()->getRequestUri());
        }


        // Paginate the results
        $schools = $query->inRandomOrder(Session::get('SROS'))->paginate(9);

        // Process each school
        foreach ($schools->items() as $key => $sc) {
            $tmpIMG = Image::where('purpose', 'school search')
                ->where('type', 'primary')
                ->where('more', $sc->info)
                ->first();

            if ($tmpIMG)
                $schools->items()[$key]->fimg = $tmpIMG->toArray();
            else
                $schools->items()[$key]->fimg = ['filename' => ''];

            if($sc->premierExp){
                if(date($sc->premierExp) < date('Y-m-d')){
                    $scTemp = School::find($sc->id);
                    $scTemp->status = '0';
                    $scTemp->premierExp = null;
                    $scTemp->save();

                    $schools->items()[$key]->status = '0';
                    $schools->items()[$key]->premierExp = null;
                }
            }

        }

        // Append query string parameters to pagination links
        $schools->appends($_GET);

        // Prepare data for the view
        $data = [
            'schools' => $schools,
            'title' => 'ITS Education Asia - School Search Database'
        ];

        // Handle comparison feature
        if (request()->compare) {
            $ta = request()->compare;
            foreach ($ta as $key => $cs) {
                $data['compare'][$key] = School::find($cs);
            }
        } else {
            $data['compare'] = request()->compare;
        }

        // Return the view
        return view('school-search')->with($data);
    }


    public function SchoolProfilePage()
    {

        $slug = request()->slug ? request()->slug : '';

        $data = [
            'school' => null,
            'simg' => null,
            'title' => ''
        ];

        if ($slug) {

            $school = School::where('slug', urlencode(urldecode($slug)))
                ->first();

            if ($school) {
                $simg = Image::where('type', 'extra')
                    ->where('purpose', 'school search')
                    ->where('more', $school['info'])
                    ->get();

                if ($simg)  $simg = $simg->toArray();

                $school['logo'] = Image::where('type', 'logo')
                    ->where('purpose', 'school search')
                    ->where('more', $school['info'])
                    ->first();

                $school['featuredImg'] = Image::where('type', 'featured')
                    ->where('purpose', 'school search')
                    ->where('more', $school['info'])
                    ->first();

                if ($school['logo']) $school['logo'] = $school['logo']->toArray()['filename'];
                else $school['logo'] = null;

                $school['info'] = SchoolInformation::where('id', $school['info'])
                    ->first()
                    ->toArray();

                $data['school'] = $school->toArray();
                $data['simg'] = $simg;
                $data['title'] = 'ITS Education Asia' . ($school ? ' - ' . $school['name'] : '');
            } else $school = false;

        }

        return view('school-profile')->with($data);

    }



    public function CompareSchool(Request $request)
    {

        $data = [
            'title' => 'ITS Education Asia - School Comparison Tool'
        ];

        $data['school'] = null;
        $data['rq'] = $request->sc;

        if ($data['rq']) {
            foreach ($data['rq'] as $key => $sc) {
                $data['school'][$key]['main'] = School::find($sc);
                $data['school'][$key]['info'] = SchoolInformation::find($data['school'][$key]['main']['info']);
            }
        }

        return view('school-compare')->with($data);

    }
}
