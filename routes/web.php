<?php
use App\User;
use App\question;
use App\answer;

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
Auth::routes();


Route::group(['middleware'=>['web']],function(){

    Route::get('/', function () {

       return View::make('home')->with('bodyClass', 'assets/img/back2.png');
    })->name('welcome');
});
Route::get('/admin', function () {
    return View::make('admin')->with('bodyClass', 'assets/img/back2.png');
})->name('admin');

    Route::get('/profile', function () {
    })->name('profile');
    Route::get('/language', function () {
        return view('questions/language');

    })->name('language');
route::get('programing/{lang}','QuestionController@viewQuestion')->name('programing');
Route::post('Answer','AnswerController@create');
Route::post('mark-As-Solution','AnswerController@markAsSolution')->name('markAsSolution');
Route::get('/allAnswers/{id}','AnswerController@getAllAnswers')->name('allAnswers');
Route::post('/insert','QuestionController@create')->name('insert');
Route::get('admin','QuestionController@show');
Route::get('/login', function(){
    return View::make('auth/login')->with('bodyClass', 'assets/img/back2.png');
})->name('login');
Route::get('/register', function(){
    return View::make('auth/register')->with('bodyClass', 'assets/img/back2.png');
})->name('register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function (){
    return View::make('home')->with('bodyClass', 'assets/img/back2.png');
})->name('home');
Route::get('/ranks','PointController@allpoints')->name('ranks');
