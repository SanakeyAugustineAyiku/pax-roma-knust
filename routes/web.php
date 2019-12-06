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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@show')->name('admin.home');
    Route::get('/add/member', 'AdminController@addMember')->name('admin.add.member');
    Route::get('/add/candidate', 'AdminController@addCandidate')->name('admin.add.candidate');
    Route::post('/add/member', 'AdminController@add_member')->name('admin.post.member');
    Route::post('/add/candidate', 'AdminController@add_candidate')->name('admin.post.candidate');
    Route::get('/view/Members', 'AdminController@view_members')->name('admin.view.Members');
    Route::get('/view/Candidates', 'AdminController@view_candidates')->name('admin.view.Candidates');
    Route::get('/new/Election','AdminController@new_election')->name('admin.create.election');
    Route::get('/view/Elections','AdminController@view_elections')->name('admin.view.Elections');
    Route::post('/create/election','AdminController@createElection')->name('admin.post.newElection');

});
