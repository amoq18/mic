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

// Back route
Route::group(['prefix' => 'admin'], function() {
	//Users
	Route::get('make/register', 'users\UsersController@registerBack')->name('back.register');
	Route::post('make/register', 'users\UsersController@registerBackPost')->name('back.register.post');
	Route::get('login', 'users\UsersController@loginBack')->name('back.login');
	Route::post('login', 'users\UsersController@loginBackPost')->name('back.login.post');
	Route::get('/', 'users\UsersController@home')->name('back.home');

	//News
	Route::group(['prefix' => 'news'], function() {
		Route::get('/', 'news\NewController@index')->name('back.news.index');
		Route::get('create', 'news\NewController@create')->name('back.news.create');
		Route::post('create', 'news\NewController@store')->name('back.news.store');
		Route::get('{id}/edit', 'news\NewController@edit')->name('back.news.edit');
		Route::post('{id}/edit', 'news\NewController@update')->name('back.news.update');
		Route::get('{id}/delete', 'news\NewController@delete')->name('back.news.delete');
	});

	//Prêts
	Route::group(['prefix' => 'prets'], function() {
		Route::get('/', 'OperationController@indexPrets')->name('back.pret.index');
		Route::get('{id}/detail', 'OperationController@store')->name('back.pret.store');
		Route::get('{id}/delete', 'OperationController@delete')->name('back.pret.delete');
	});

	//Clients
	Route::group(['prefix' => 'clients'], function() {
		Route::get('/', 'users\UsersController@list')->name('back.clients.index');
	});


	//Virements
	Route::group(['prefix' => 'virements'], function() {
		Route::get('/', 'VirementController@index')->name('back.virements.index');
		Route::get('{id}/edit', 'VirementController@edit')->name('back.virements.edit');
		Route::post('{id}/edit', 'VirementController@editPost')->name('back.virements.edit.post');
		Route::get('{id}/delete', 'VirementController@delete')->name('back.virements.delete');
	});
});

// Front route
Route::get('/', 'WelcomeController@index')->name('front.home');
Route::get('account', 'WelcomeController@compte')->name('front.compte');
Route::get('logout', 'users\UsersController@logoutFront')->name('front.logout');
Route::get('register', 'users\UsersController@registerFront')->name('front.register');
Route::post('register', 'users\UsersController@registerFrontPost')->name('front.register.post');
Route::get('login', 'users\UsersController@loginFront')->name('front.login');
Route::post('login', 'users\UsersController@loginFrontPost')->name('front.login.post');

Route::get('prestations', 'WelcomeController@prestations')->name('front.prestations');
Route::get('evenements', 'WelcomeController@evenementsList')->name('front.evenement.list');
Route::get('{id}/evenement', 'WelcomeController@evenements')->name('front.evenement');
Route::get('apropos', 'WelcomeController@apropos')->name('front.apropos');
Route::get('simulation', 'WelcomeController@simulationCompte')->name('front.simulationCompte');
Route::post('simulation', 'WelcomeController@simulationComptePost')->name('front.simulationCompte.post');
Route::get('operation', 'OperationController@pret')->name('front.operation');
Route::post('operation', 'OperationController@pretPost')->name('front.operationPost');
Route::get('virement', 'OperationController@virement')->name('front.virement');
Route::post('virement', 'OperationController@virementPost')->name('front.virement.post');
Route::get('virement2', 'OperationController@virement2')->name('front.virement2');
Route::post('virement2', 'OperationController@virementPost2')->name('front.virement.post2');
Route::get('virement3', 'OperationController@virement3')->name('front.virement3');

// app('debugbar')->disable();


