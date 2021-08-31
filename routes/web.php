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

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    $blog = \App\Blog::create([
        'name' => 'Event blog',
        'slug' => 'event-blog',
        'text' => 'Event blog yazısı',
    ]);
    event(new \App\Events\BlogAdded($blog));
});

Route::post('/ping', function (Request $request) {
   $user = \App\User::find($request->id);
   $message = $request->message;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/noti', function () {
    broadcast(new \App\Events\UserEvent());
    return 'Bildirim Gönderildi.';
});*/

/*Route::get('add-notification', function() {
    broadcast(new \App\Events\NotificationEvent);
    return 'Bildirim Gönderildi..';
});*/

