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

Route::get('/','HomeController@index');

Route::get('/phpinfo',function(){
    return ('<?php phpinfo(); ?>');
});

/*
    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/users', 'UserController@show')->name('users');
Route::get('/users/{user}', ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::match(['post','patch','put'],'/users/{user}/update', ['as' => 'users.update', 'uses' => 'UserController@update']);
Route::get('/users/{user}/reset', ['as' => 'users.reset', 'uses' => 'UserController@resetPassword']);
Route::get('/users/{user}/activate', ['as' => 'users.activate', 'uses' => 'UserController@activate']);

Route::get('/questions', 'QuestionController@index')->name('questions');

Route::get('/quiz', 'QuizController@index')->name('quizzes');
