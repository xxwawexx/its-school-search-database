<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $isSchoolSubPath = request()->header('X-Test-Header') === 'ssdb';
            $imageUrlBase = $isSchoolSubPath ? '/school/img/' : '/img/';
            $urlBase = $isSchoolSubPath ? '/school/' : '/';

            $isLocal = app()->environment('local');
            if ($isLocal) {
                $fullPath = 'http://localhost:8000';
            } else {
                $fullPath = $isSchoolSubPath ? 'https://itseducation.asia/school/' : 'https://school.itseducation.asia/';
            }

            $view->with(compact('isSchoolSubPath', 'imageUrlBase', 'urlBase', 'fullPath'));
        });
    }
}
