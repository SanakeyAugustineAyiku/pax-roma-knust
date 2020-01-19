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
})->name("app.home");

Route::get('/unauthorized',function(){
    return view('unauthorized');
})->name('unauthorized');

// user
Route::group(['prefix' => 'user'],function(){
    Route::get('/login','Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('/login','Auth\LoginController@login')->name('user.post.login');
    Route::post('/logout','Auth\LoginController@logout')->name('user.logout');
    Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('/register','Auth\RegisterController@register')->name('user.post.register');


    Route::get('/home','HomeController@index')->name('user.home');
});

// Administrators EC,Admins
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login','Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\Admin\LoginController@login')->name('admin.post.login');
    Route::post('/logout','Auth\Admin\LoginController@logout')->name('admin.logout');

    //sadmin and admin
    Route::get('/home', 'AdminController@show')->name('admin.home');

    Route::get('/add/member', 'AdminController@addMember')->name('admin.add.member');//->middleware(['role:SUPER_ADMIN','role:ADMIN']);
    Route::get('/view/Members', 'AdminController@view_members')->name('admin.view.Members');//->middleware(['role:SUPER_ADMIN','role:ADMIN']);
    Route::post('/add/member', 'AdminController@add_member')->name('admin.post.member');//->middleware(['role:SUPER_ADMIN','role:ADMIN']);

    //admin managemet routes
    Route::get('/add/admin','AdminController@addAdmin')->name('admin.add.admin');
    Route::post('/add/admin','AdminController@add_Admin')->name('admin.post.admin');
    Route::get('/view/admin','AdminController@viewAdmin')->name('admin.view.admin');
    Route::put('/edit/admin{id}','AdminController@edit_admin')->name("admin.edit.admin");
    Route::delete('/delete/admin/{id}','AdminController@delete_admin')->name("admin.delete.admin");
});


// ec
Route::group(['prefix' => 'ec'],function(){
    Route::get('/login','Auth\Elections\ECLoginController@showLoginForm')->name('ec.login');
    Route::post('/login','Auth\Elections\ECLoginController@login')->name('ec.post.login');
    Route::post('/logout','Auth\Elections\ECLoginController@logout')->name('ec.logout');
    Route::get('/home', 'ECController@show')->name('ec.home');
    Route::get('/add/candidate', 'ECController@addCandidate')->name('admin.add.candidate');
    Route::post('/add/candidate', 'ECController@add_candidate')->name('admin.post.candidate');
    Route::get('/view/Candidates', 'ECController@view_candidates')->name('admin.view.Candidates');
    Route::get('/new/Election','ECController@new_election')->name('admin.create.election');
    Route::get('/view/Elections','ECController@view_elections')->name('admin.view.Elections');
    Route::post('/create/election','ECController@createElection')->name('admin.post.newElection');
});

// elections
Route::group(['prefix'=>'elections'], function () {
    Route::get('/welcome',function(){
        return view('election.welcome');
    })->name('election.welcome');
    Route::get('/login','Auth\Elections\VoterLoginController@showLoginForm')->name("elections.voter.login");
    Route::post('/login','Auth\Elections\VoterLoginController@login')->name("elections.post.login");
    Route::post('/logout','Auth\Elections\VoterLoginController@logout')->name('elections.voter.logout');
    Route::get('/home','ElectionController@index')->name("elections.voter.home");
    Route::get('/vote/{election}/{period}','ElectionController@start_voting')->name("election.voter.vote");
    Route::get('/vote/{election}/{period}/president','ElectionController@president')->name("election.voter.pres");
    Route::get('/vote/{election}/{period}/vp','ElectionController@vicep')->name("election.vote.vp");
    Route::get('/vote/{election}/{period}/secretary','ElectionController@secretary')->name('election.vote.secretary');
    Route::get('/vote/{election}/{period}/finSec','ElectionController@finSec')->name('election.vote.finSec');
    Route::get('/vote/{election}/{period}/organa','ElectionController@organa')->name('election.vote.organa');
    Route::get('/vote/{election}/{period}/asst_organa','ElectionController@asst_organa')->name('election.vote.asst_organa');
    Route::get('/vote/{election}/{period}/publicity_officer','ElectionController@publicity_officer')->name('election.vote.pub_officer');
    Route::get('/vote/{election}/{period}/asst_publicity_officer','ElectionController@asst_publicity_officer')->name('election.vote.asst_pub_officer');
    Route::get('/vote/{election}/{period}/wocom','ElectionController@wocom')->name('election.vote.wocom');
    Route::get('/vote/{election}/{period}/submit','ElectionController@submit')->name('election.vote.submit');
});
