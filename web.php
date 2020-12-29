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
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function(){
    
    // Home 
    Route::get('/', 'User\DashboardController@index');
    Route::get('/home', 'User\DashboardController@index')->name('home');
    
    // Settings 
    Route::get('setting', 'User\SettingController@index');
    Route::post('setting/profile/edit', 'User\SettingController@profileEdit')->name('profileEdit');
    Route::post('setting/bar/card/image', 'User\SettingController@barCardImage')->name('setting-bar-card-image');

    // Search 
    Route::get('serach', 'User\SearchController@search')->name('search');

    //friend request in search and cancel friend request
    Route::post('add/friend', 'User\FriendRequestController@addFriend')->name('add-friend'); // add friends
    Route::post('add/cancel', 'User\FriendRequestController@cancelFriend')->name('cancel-friend'); // cancel friend
    Route::post('get/user/friend/request/list', 'User\FriendRequestController@getUserFriendRequestList')->name('get-user-friend-request-list'); // cancel friend

    //accept freidn request & deny freidnd request in header
    Route::post('accept/friend', 'User\FriendRequestController@acceptFriendRequest')->name('add-friend-accept'); // accept friend request
    Route::post('deny/friend', 'User\FriendRequestController@denyFriendRequest')->name('deny-friend-reject'); // deny freidn request

    Route::post('get-friends', 'User\FriendRequestController@getFriends')->name('get-friends');

    // save firsebase User Token
    Route::post('saveFirsebaseUserToken', 'User\SettingController@saveFirsebaseUserToken')->name('saveFirsebaseUserToken');
});