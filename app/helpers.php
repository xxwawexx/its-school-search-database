<?php

if (!function_exists('custom_asset')) {
    function custom_asset($path, $secure = null) {
        $isSchoolSubPath = request()->header('X-Test-Header') === 'ssdb';
        $prefix = $isSchoolSubPath ? '/school' : '';
        return asset($prefix . '/' . ltrim($path, '/'), $secure);
    }
}
