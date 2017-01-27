<?php
// Authentication Routes...
$this->get('/login', ['as'=>'login','uses'=>'Auth\AuthController@showLoginForm']);
$this->post('login', 'Auth\AuthController@login');
$this->get('logout', 'Auth\AuthController@logout');

// Registration Routes...
$this->get('register', 'Auth\AuthController@showRegistrationForm');
$this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');

//Rutas para los usuarios con login activo
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', ['as'=>'admin','uses'=>'HomeController@index']); //- Inicio

    Route::get('Reagents',['as'=>'reagents', 'uses'=>'ReagentController@index']); //- Reagents
});
