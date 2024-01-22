<?php

if (!function_exists('custom_asset')) {
    function custom_asset($path, $secure = true) {
        $requestDomain = request()->getHost();
        $isSchoolSubPath = request()->header('X-Test-Header') === 'ssdb';
        $prefix = $isSchoolSubPath ? '/school' : '';

        if ($requestDomain == 'school.itseducation.asia') {
            // Generate an absolute URL
            return asset($prefix . '/' . ltrim($path, '/'), $secure);
        } else {
            // Generate a relative URL
            return $prefix . '/' . ltrim($path, '/');
        }
    }
}

