<?php

if (!function_exists('custom_asset')) {
    function custom_asset($path, $secure = null) {
        // Determine if the application is running in the local environment
        $isLocal = app()->environment('local');

        // Set $secure based on the environment
        if ($secure === null) {
            $secure = !$isLocal;
        }

        $isSchoolSubPath = request()->header('X-Test-Header') === 'ssdb';
        $prefix = $isSchoolSubPath ? '/school' : '';

        if ($isSchoolSubPath) {
            // Generate a relative URL
            return $prefix . '/' . ltrim($path, '/');
        } else {
            // Generate an absolute URL
            return asset($prefix . '/' . ltrim($path, '/'), $secure);
        }
    }
}
