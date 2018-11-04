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

Route::get('/dataexchange',function(){return view('dataexchange');})->name('dataexchange');

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

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{user}', 'UserController@edit')->name('users.edit');
Route::get('/users/{user}/reset', 'UserController@resetPassword')->name('users.reset');
Route::get('/users/{user}/toggle', 'UserController@toggle')->name('users.toggle');
Route::match(['post','patch','put'],'/users/{user}/update', 'UserController@update')->name('users.update');

// Route::get('/questions', 'QuestionController@index')->name('questions');
// Route::get('/questions/{question}', 'QuestionController@edit')->name('questions.edit');
// Route::match(['post','patch','put'],'/questions/{question}/update', ['as' => 'questions.update', 'uses' => 'QuestionController@update']);
// Route::get('/questions/{question}/toggle', ['as' => 'questions.toggle', 'uses' => 'QuestionController@toggle']);
// Route::get('/questions/new', 'QuestionController@showQuestionForm');

Route::match(['put','patch'], '/questions/{question}/toggle', 'QuestionController@toggle')->name('questions.toggle');
Route::resource('questions', 'QuestionController');

Route::resource('topics', 'TopicController');

Route::resource('exams', 'ExamController');

Route::resource('reports', 'ReportController');
