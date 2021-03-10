<?php

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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => 'auth',
    'namespace' => 'Admin'

], function () {
    Route::resource('/', 'DashboardController');
    Route::resource('/subadmin', 'SubAdmin\SubAdminController');

    Route::group([
        'namespace' => 'Management'

    ], function () {
        Route::resource('content', 'ContentController');
        Route::resource('page', 'PageController');
        Route::resource('coursecategory', 'CourseCategoryController');
        Route::resource('teammember', 'TeamMemberController');
        Route::resource('venue', 'VenueController');
        Route::resource('enrollmentlabel', 'EnrollmentLabelController');
    });
    Route::group([
        'namespace' => 'Courses\Course'
    ], function () {
        Route::resource('course', 'CourseController');
    });
    Route::group([
        'namespace' => 'Courses\CourseFeatures'
    ], function () {
        Route::resource('coursefeatures', 'CourseFeaturesController');
        Route::get('coursefeature/{id}', 'CourseFeaturesController@coursefeatures')->name('courses.coursefeatures');


        Route::resource('coursecurriculam', 'CourseCurriculamController');
        Route::get('coursefeature/coursecurriculam/{id}', 'CourseCurriculamController@createcurriculum');

        Route::resource('courseintrodesc', 'CourseIntroDescController');
        Route::get('coursefeature/courseintrodesc/{id}', 'CourseIntroDescController@createcourseintrodesc');


   
        Route::resource('coursefaq', 'CourseFaqController');
        Route::get('coursefeature/coursefaq/{id}', 'CourseFaqController@createcoursefaq');

        Route::resource('coursecertificationprocess', 'CourseCertificationProcessController');
        Route::get('coursefeature/coursecertificationprocess/{id}', 'CourseCertificationProcessController@createcoursecertificationprocess');




    });
});
