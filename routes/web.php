<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/school-search/{page?}', [HomeController::class, 'SchoolSearchPage']);
Route::get('/school-profile/{slug}', [HomeController::class, 'SchoolProfilePage']);
Route::get('/compare-school', [HomeController::class, 'CompareSchool']);

Route::get('/hong-kong', function () {
    $data = [
        'title' => 'Hong Kong Schools'
    ];
    return view('hong-kong')->with($data);
});

// HK Sub Pages

Route::get('/hong-kong/international-schools-hk', function () {
    $data = [
        'title' => 'International Schools in Hong Kong'
    ];
    return view('/international-schools-hk')->with($data);
});

Route::get('/hong-kong/a-level-schools-in-hk', function () {
    $data = [
        'title' => 'Finding the GCE A Level Schools in Hong Kong'
    ];
    return view('/a-level-schools-in-hk')->with($data);
});

Route::get('/hong-kong/international-schools-hk/anglo-chinese-schools-hk', function () {
    $data = [
        'title' => 'Anglo Chinese International Schools in Hong Kong'
    ];
    return view('/anglo-chinese-schools-hk')->with($data);
});

Route::get('/hong-kong/primary-schools-hk', function () {
    $data = [
        'title' => 'Finding the Best Primary Schools in Hong Kong'
    ];
    return view('/primary-schools-hk')->with($data);
});

Route::get('/hong-kong/secondary-schools-hk', function () {
    $data = [
        'title' => 'Secondary Schools in Hong Kong'
    ];
    return view('/secondary-schools-hk')->with($data);
});

Route::get('/hong-kong/boarding-schools-hk', function () {
    $data = [
        'title' => 'Boarding Schools in Hong Kong'
    ];
    return view('/boarding-schools-hk')->with($data);
});

Route::get('/hong-kong/international-schools-hk/british-schools-hk', function () {
    $data = [
        'title' => 'British International Schools in Hong Kong'
    ];
    return view('/british-schools-hk')->with($data);
});

Route::get('/hong-kong/international-schools-hk/american-schools-hk', function () {
    $data = [
        'title' => 'American International Schools in Hong Kong'
    ];
    return view('/american-schools-hk')->with($data);
});

Route::get('/hong-kong/international-schools-hk/ib-schools-sg', function () {
    $data = [
        'title' => 'International Baccalaureate (IB) Schools in Singapore'
    ];
    return view('/hk-ib-schools-sg')->with($data);
});

Route::get('/hong-kong/international-schools-hk/french-schools-hk', function () {
    $data = [
        'title' => 'French International Schools in Hong Kong'
    ];
    return view('/french-schools-hk')->with($data);
});

Route::get('/hong-kong/igcse-schools-hk', function () {
    $data = [
        'title' => 'IGCSE Schools in Hong Kong'
    ];
    return view('/igcse-schools-hk')->with($data);
});

Route::get('/hong-kong/independent-schools-hk', function () {
    $data = [
        'title' => 'Independent Schools in Hong Kong'
    ];
    return view('/independent-schools-hk')->with($data);
});

Route::get('/hong-kong/international-schools-hk/japanese-schools-hk', function () {
    $data = [
        'title' => 'Japanese International Schools in Hong Kong'
    ];
    return view('/japanese-schools-hk')->with($data);
});

Route::get('/hong-kong/edb-schools-hk', function () {
    $data = [
        'title' => 'Education Bureau (EDB) Schools in Hong Kong'
    ];
    return view('/edb-schools-hk')->with($data);
});

Route::get('/hong-kong/montessori-schools-hk', function () {
    $data = [
        'title' => 'Montessori Schools In Hong Kong'
    ];
    return view('/montessori-schools-hk')->with($data);
});

Route::get('/hong-kong/private-schools-hk', function () {
    $data = [
        'title' => 'Private Schools in Hong Kong'
    ];
    return view('/private-schools-hk')->with($data);
});

Route::get('/hong-kong/special-school-hk', function () {
    $data = [
        'title' => 'Special School in Hong Kong'
    ];
    return view('/special-school-hk')->with($data);
});

// SG Sub Pages

Route::get('/singapore', function () {
    $data = [
        'title' => 'Singapore Schools'
    ];
    return view('singapore')->with($data);
});

Route::get('/singapore/international-schools-sg/anglo-chinese-schools-sg', function () {
    $data = [
        'title' => 'Anglo Chinese International Schools in Singapore'
    ];
    return view('/anglo-chinese-schools-sg')->with($data);
});

Route::get('/singapore/international-schools-sg', function () {
    $data = [
        'title' => 'International Schools in Singapore'
    ];
    return view('/international-schools-sg')->with($data);
});

Route::get('/singapore/special-schools-sg', function () {
    $data = [
        'title' => 'Special Schools in Singapore'
    ];
    return view('/special-schools-sg')->with($data);
});

Route::get('/singapore/private-schools-sg', function () {
    $data = [
        'title' => 'Private Schools in Singapore'
    ];
    return view('/private-schools-sg')->with($data);
});

Route::get('/singapore/primary-schools-sg', function () {
    $data = [
        'title' => 'Primary Schools in Singapore'
    ];
    return view('/primary-schools-sg')->with($data);
});

Route::get('/singapore/secondary-schools-sg', function () {
    $data = [
        'title' => 'Secondary Schools in Singapore'
    ];
    return view('/secondary-schools-sg')->with($data);
});

Route::get('/singapore/international-schools-sg/british-schools-sg', function () {
    $data = [
        'title' => 'British International Schools in Singapore'
    ];
    return view('/british-schools-sg')->with($data);
});

Route::get('/singapore/german-schools-sg', function () {
    $data = [
        'title' => 'German language Schools in Singapore'
    ];
    return view('/german-schools-sg')->with($data);
});

Route::get('/singapore/international-schools-sg/iB-schools-sg', function () {
    $data = [
        'title' => 'International Baccalaureate (IB) Schools in Singapore'
    ];
    return view('/ib-schools-sg')->with($data);
});

Route::get('/singapore/independent-schools-sg', function () {
    $data = [
        'title' => 'Independent Schools in Singapore'
    ];
    return view('/independent-schools-sg')->with($data);
});

Route::get('/singapore/international-schools-sg/indian-schools-sg', function () {
    $data = [
        'title' => 'Indian International Schools in Singapore'
    ];
    return view('/indian-schools-sg')->with($data);
});

Route::get('/singapore/korean-school-sg', function () {
    $data = [
        'title' => 'Korean Language School in Singapore'
    ];
    return view('/korean-school-sg')->with($data);
});

Route::get('/singapore/international-schools-sg/american-schools-sg', function () {
    $data = [
        'title' => 'American International Schools in Singapore'
    ];
    return view('/american-schools-sg')->with($data);
});

Route::get('/singapore/a-level-schools-sg', function () {
    $data = [
        'title' => 'GCE A Level Schools in Singapore'
    ];
    return view('/a-level-schools-sg')->with($data);
});

Route::get('/singapore/boarding-schools-sg', function () {
    $data = [
        'title' => 'Boarding Schools in Singapore'
    ];
    return view('/boarding-schools-sg')->with($data);
});

Route::get('/singapore/international-schools-sg/ipc-schools-sg', function () {
    $data = [
        'title' => 'International Primary Curriculum (IPC) Schools in Singapore'
    ];
    return view('/ipc-schools-sg')->with($data);
});

Route::get('/singapore/moe-schools-sg', function () {
    $data = [
        'title' => 'Ministry of Education (MOE) Schools in Singapore'
    ];
    return view('/moe-schools-sg')->with($data);
});

Route::get('/singapore/international-schools-sg/japanese-schools-sg', function () {
    $data = [
        'title' => 'International Primary Curriculum (IPC) Schools in Singapore'
    ];
    return view('/international-japanese-schools-sg')->with($data);
});

Route::get('/singapore/ip-schools-sg', function () {
    $data = [
        'title' => 'Integrated Programme (IP) Schools in Singapore'
    ];
    return view('/ip-schools-sg')->with($data);
});

Route::get('/singapore/japanese-schools-sg', function () {
    $data = [
        'title' => 'Japanese Language Schools in Singapore'
    ];
    return view('/japanese-schools-sg')->with($data);
});

Route::get('/top-schools-hong-kong', function () {
    $data = [
        'title' => 'ITS Education Asia - Top Schools in Hong Kong'
    ];
    return view('top-schools-hong-kong')->with($data);
});

Route::get('/top-schools-singapore', function () {
    $data = [
        'title' => 'ITS Education Asia - Top Schools in Singapore'
    ];
    return view('top-schools-singapore')->with($data);
});
