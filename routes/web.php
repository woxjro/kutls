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
Route::post('/kumiren/select_members','MemberController@showMembers4post')->name('select.members');


Route::post('/kumiren/{kumiren_id}/select_members/select_staffs','MemberController@showKumirenMembers')->name('select.staffs');

Route::get('/kumiren/{kumiren_id}/select_members/select_staffs','KumirenController@select_staffs');

Route::get('/kumiren/{kumiren_id}/select_members/select_staffs/result',function(){
    return redirect('/');
});


Route::post('/kumiren/{kumiren_id}/select_members/select_staffs/result','MemberController@result')->name('result');

//jquery shapeshiftのテストページ
Route::get('/test',function(){
    return view('test');
});

Route::get('/kumiren/oyagami','KumirenController@show');

Route::delete('/kumiren/oyagami/{kumiren}', 'KumirenController@delete_kumiren');
