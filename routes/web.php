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

$domainName = env('APP_DOMAIN_NAME');
$domain = env('APP_DOMAIN');
$adminDomain = $domainName . 'admin.' . $domain;

App::setLocale('en');

Route::group(['domain' => $adminDomain], function () {

    // Login action
    Route::get('/login', 'AuthController@actionLoginForm')->name('admin.actionLoginForm');
    Route::post('/action-login', 'AuthController@actionLogin')->name('admin.actionLogin');

    Route::group(['prefix' => '/', 'middleware' => ['sessionTimeout', 'checkPermissionAdmin']], function () {
        // Dashboard
        Route::get('/', 'Admin\DashboardController@index')->name('adminDashboard');
        // Event Info
        Route::get('/event-info', 'Admin\EventInfoController@index')->name('adminEventInfo');
        // Feedback
        Route::get('/feedback', 'Admin\FeedbackController@index')->name('adminFeedback');
        // Game Info
        Route::get('/game-info', 'Admin\GameInfoController@index')->name('adminGameInfo');
        // Game Users
        Route::get('/game-users', 'Admin\GameUsersController@index')->name('adminGameUsers');
        // Images
        Route::get('/images', 'Admin\ImagesController@index')->name('adminImages');
        // News Category
        Route::get('/news-category', 'Admin\NewsCategoryController@index')->name('adminNewsCategory');
        // News Info
        Route::get('/news-info', 'Admin\NewsInfoController@index')->name('adminNewsInfo');
        // Recharge
        Route::get('/recharge', 'Admin\RechargeController@index')->name('adminRecharge');
        // Web Users
        Route::get('/web-users', 'Admin\WebUsersController@index')->name('adminWebUsers');
    });
});

Route::group(['domain' => $domain], function () {
    Route::group(['prefix' => '/', 'middleware' => ['sessionTimeout', 'checkPermissionGuest']], function () {
        Route::get('/', 'Guest\HomeController@index')->name('guestIndex');
    });
});