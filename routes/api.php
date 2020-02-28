<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/email/fire', 'CMS\EmailAdminController@fire')->name('fire');
Route::post('/email/contact', 'CMS\EmailAdminController@contact')->name('contact');

//@todo - may need to move '/leads/{type}' to api routes.
//Route::post('/leads/{type}', 'LeadsController@process_lead');

Route::post('/leads/enroll', 'LeadsController@process_initial_enroll_lead');
Route::post('/leads/{type}', 'LeadsController@process_lead');
Route::post('/lead/combo6', 'LeadsController@process_combo6_lead');
Route::post('/members', 'API\MembersAPIController@create_pre_member');

Route::group(['prefix' => 'transit'], function() {
    Route::post('/GetClubInfo', 'API\SalesAPIController@club_info');
    Route::post('/ValidatePromoCode', 'API\SalesAPIController@validate_code');
    Route::get('/GetMembershipInfo', 'API\SalesAPIController@membership_info');
    Route::post('/InsertContracts', 'API\SalesAPIController@submit_payment');
    Route::post('/GetEmployees', 'API\SalesAPIController@employees');

    Route::post('/combo6', 'API\SalesAPIController@combo6_addon');
});

Route::post('/member-lookup', 'CMS\MemberLookupController@lookup');

