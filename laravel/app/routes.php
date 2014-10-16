<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/index', function()
{
	return View::make('index');
});*/

Route::any("/", [
	"as" => "index",
	"uses" => "HomeController@showWelcome"
])->before('auth');

Route::any("/load", [
	"as" => "load",
	"uses" => "HomeController@showLoad"
])->before('auth');

Route::get("/login", [
	"as" => "user/login",
	"uses" => "UserController@getLogin"
])->before('guest');

Route::post("/login", [
	"uses" => "UserController@postLogin"
]);

Route::get("/register", [
	"as" => "user/register",
	"uses" => "UserController@getRegister"
]);

Route::post("/register", [
	"uses" => "UserController@postRegister"
]);

Route::any("/logout", [
	"as" => "user/logout",
	"uses" => "UserController@logout"
])->before('auth');