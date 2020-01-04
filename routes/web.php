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
use App\User;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/kumiren/select_members','MemberController@showMembers')->name('select.members');

Route::post('/kumiren/select_members/select_staffs','MemberController@showKumirenMembers')->name('select.staffs');

Route::get('/kumiren/select_members/select_staffs',function(){
    return redirect('/');
});

Route::get('/kumiren/select_members/select_staffs/result',function(){
    return redirect('/');
});

Route::post('/kumiren/select_members/select_staffs/result','MemberController@result')->name('result');
