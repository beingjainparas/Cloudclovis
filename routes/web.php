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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', 'Marketing\IndexController@index');
    Route::get('/courses', 'Marketing\CoursesController@index');
    Route::get('/courses/course_details/{course_id}', 'Marketing\CoursesController@courseDetails');
    Route::get('/about', 'Marketing\AboutController@index');
    Route::get('/contacts', 'Marketing\ContactsController@index');
    Route::get('/portfolio', 'Marketing\PortfolioController@index');
    Route::get('/terms', 'Marketing\TermsController@index');
    Route::get('/privacy', 'Marketing\PrivacyController@index');
    Route::post('/newsletter/post', 'Marketing\IndexController@addNewsletter');
    Route::post('/contacts/post', 'Marketing\ContactsController@addContacts');
    Route::post('/courses/course_details/enquirys/post', 'Marketing\CoursesController@addEnquirys');
    Route::get('/community', 'Marketing\CommunityController@index');
    Route::post('/community/post', 'Marketing\CommunityController@addCommunity');
    Route::get('/login', 'Auth\CustomerLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\CustomerLoginController@login');
    Route::post('/logout', 'Auth\CustomerLoginController@logout')->name('logout');
    Route::get('/register', 'Auth\CustomerRegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\CustomerRegisterController@register');
    Route::get('/home', 'Customer\HomeController@index');
});

Route::domain(env('APP_ADMIN_URL'))->group(function () {
    Route::get('/', 'Admin\IndexController@index');
    Auth::routes();
    Route::get('/home', 'Admin\HomeController@index');
    Route::get('/newsletter', 'Marketing\IndexController@getNewsletter');
    Route::get('/contacts', 'Marketing\ContactsController@getContacts');
    Route::get('/enquiries', 'Marketing\CoursesController@getEnquiries');
    Route::get('/customers', 'Auth\CustomerRegisterController@getCustomers');
    Route::get('/community', 'Marketing\CommunityController@getCommunities');
});


