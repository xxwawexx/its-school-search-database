<?php

if (!function_exists('custom_asset')) {
    function custom_asset($path, $secure = true) {
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

