<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

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

//For the learning purposes
// Return a simple string from the route
//Route::get('/buildings', function () {
//   return 'hello buildings';
//});

// Return a html from the route
//Route::get('/building', function () {
//   return '<h1>Hello my building</h1>';
//});

// return the values using response() :: the helper function
//Route::get('/build', function () {
//   return response('<h3>Hellow response() the helper function</h3>', 400)
//       ->header('Content-type', 'text/html')
//       ->header('foo', 'bar');
//});

// Wildcards :: speciel parameter to pass
//Route::get('/building/{id}', function ($id) {
//    return response('<h3>Building id is</h3>'. $id);
//});

// add condition to the wildcard
//Route::get('/post/{id}', function ($id) {
//    return response('this is post no.' . $id);
//})->where('id', '[0-9]+');
//
//
//Route::get('/employee/{empId}', function ($empId) {
//    ddd($empId);
//    return response('This is Employee' . $empId);
//})->where('empId', '[0-9]+');

// working with query parameters and access the requests
// import the request class
//Route::get('/search', function (Request $request) {
//    return $request;
//});

// passing data
//Route::get('/', function () {
//    return view('page' , [
//        'page_heading'=> 'Page heading is Page',
//        'page_settings'=>[
//            'setting_1' => [
//                'id' => 1,
//                'setting_name' => 'Test setting 01',
//                'setting_content' => 'dsfsdfs sdfdsds sdsd'
//            ],
//            'setting_2' => [
//                'id' => 2,
//                'setting_name' => 'Test setting 02',
//                'setting_content' => 'dsfsdfs sdfdsds sdsddssd dsfsdf sdf sdf sd'
//            ]
//        ]
//    ]);
//});

// passing data through a payload
//Route::get('/students', function () {
//    $payload = [
//        'page_name' => 'Students',
//        'data_array' => [
//            '0' => [
//                'id' => '1',
//                'full_name' => 'Hashan Liyanage',
//                'address' => 'Hospital road, Polgahawela'
//            ],
//            '1' => [
//                'id' => '2',
//                'full_name' => 'Nimal Liyanage',
//                'address' => 'Hospital road, Polgahawela'
//            ],
//            '2' => [
//                'id' => '3',
//                'full_name' => 'Kumara Liyanage',
//                'address' => 'Hospital road, Polgahawela'
//            ]
//        ]
//    ];
//    return view('students', $payload);
//});

// return the data from the model
//Route::get('/students', function () {
//    $payload = [
//        'data_array' => Student::getAllStudents(),
//    ];
//    return view('students', $payload);
//});

// return the data by id from the model
//Route::get('/student/{id}', function ($id) {
//    $payload = [
//        'data_array' => Student::getStudentById($id)
//    ];
//    return view('student',  $payload);
//});
//
//Route::get('/teachers', function () {
//    $payload = [
//        'data' => Teacher::getAllTeachers(),
//    ];
//
//    return view('teachers', $payload);
//});
//
//Route::get('/teacher/{id}', function ($id) {
//    $payload = [
//        'data' => Teacher::getTeacherById($id)
//    ];
//
//    return view('teacher', $payload);
//});

// laragigs App routes
//Route::get('/', function () {
//    $payload = [
//        'listings' => Listing::all(),
//    ];
//
//    return view('pages/listings/listings', $payload);
//});

//Route::get('/listing/{id}', function ($id) {
//    $payload = [
//        'listing' => Listing::find($id)
//    ];
//
//    return view('pages/listings/listing',  $payload);
//});

// Route model handling
//Route::get('/listing/{listing}', function (Listing $listing) {
//    $payload = [
//        'listing' => $listing
//    ];
//
//    return view('pages/listings/listing',  $payload);
//});

// using controllers
Route::get('/', [ListingController::class, 'index']);

// show the listings
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Save the listing data
Route::post('listings/listing-create', [ListingController::class, 'store']);
