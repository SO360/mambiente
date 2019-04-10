<?php

//Route::get('/', function () {return redirect('/admin/home');});

// Web route
Route::get('/', 'NatureController@index');

Route::get('/sala/medio', 'NatureController@showMedia')->name('sala.media');
Route::get('/sala/medio/prensa', 'NatureController@showMediaPress')->name('sala.media.press');

Route::get('/sala/prensa', 'NatureController@showPress')->name('sala.press');
Route::get('/sala/galeria/foto', 'NatureController@showPicture')->name('sala.galery.picture');

Route::get('/contenido/nacional', 'NatureController@showNational')->name('content.national');
Route::get('/contenido/nacional/prensa', 'NatureController@showNationalPress')->name('content.national.press');

Route::get('/contenido/internacional', 'NatureController@showInternational')->name('content.international');
Route::get('/contenido/internacional/prensa', 'NatureController@showInternationalPress')->name('content.international.press');

Route::get('/contacto', 'NatureController@contact')->name('contact');

Route::get('/salaDePrensa/contenido/{id}', 'NatureController@contenido')->name('contenido');
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

	Route::get('/home', 'HomeController@index');
	Route::resource('permissions', 'Admin\PermissionsController');
	Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
	Route::resource('roles', 'Admin\RolesController');
	Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
	Route::resource('users', 'Admin\UsersController');
	Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

	// prensa
	Route::get('interna', 'Admin\DisplayDataController@internacional')->name('internacional.index');

	Route::get('statusEdit/{id?}', 'Admin\DisplayDataController@statusEdit')->name('status.index');

	Route::resource('noticias', 'Admin\NoticiasController');
	Route::resource('word', 'Admin\WordController');
	Route::resource('media', 'Admin\MediaController');
	Route::resource('foto', 'Admin\FotoController');

	Route::resource('datat', 'Admin\DisplayDataController');
	Route::resource('docsearch', 'Admin\DocumentoSearchController');
	Route::resource('medisearch', 'Admin\MediaSearchController');
	Route::resource('fotosearch', 'Admin\FotoSearchController');
	Route::resource('noticiaeditar', 'Admin\NoticiaEditarController');
	Route::resource('mediaeditar', 'Admin\MediaEditarController');
	Route::resource('documentoeditar', 'Admin\DocumentoEditarController');

});
