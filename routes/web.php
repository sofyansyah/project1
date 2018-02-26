<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('others.about');
});

Route::get('/blog', function () {
    return view('blogs.index');
});

Route::get('/details-blog', function () {
    return view('blogs.details');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile/{id}', 'UserController@profile');
Route::get('/{id}/profile-edit', 'UserController@edit_profile');
Route::post('profile/{id}/edit', 'UserController@edit_profile_post');
Route::get('follow/{name}', 'UserController@follow');
Route::get('unfollow/{name}', 'UserController@unfollow');
Route::get('/{id}/send-message', 'MessageController@write_message');
Route::post('post-send-message/{id}', 'MessageController@send_message');
Route::get('{id}/inbox', 'MessageController@inbox');
Route::get('/inbox/{id}/details', 'MessageController@inbox_details');
Route::get('/profile/{id}/followers', 'UserController@followers');
Route::get('/profile/{id}/following', 'UserController@following');

////////////////////// ARTWORK ////////////////////////////////////

Route::get('/explore/{title}', 'ArtworksController@details_artwork');
Route::get('/explore/{id}/edit', 'ArtworksController@edit_artwork');
Route::post('post-edit-artwork/{id}', 'ArtworksController@post_edit_artwork');
Route::get('/explore', 'ArtworksController@index');
Route::get('/recent', 'ArtworksController@recent');
Route::get('/most-views', 'ArtworksController@most_view');
Route::get('/most-vote', 'ArtworksController@most_vote');
Route::get('/upload', 'ArtworksController@upload');
Route::post('post-artwork', 'ArtworksController@post_artwork');
// Route::post('/upload/post-artwork-single', 'ArtworksController@post_artwork_single');
Route::post('post-comment', 'CommentsController@post_comment');
Route::get('like/{id}', 'ArtworksController@like');
Route::get('unlike/{id}', 'ArtworksController@unlike');
Route::get('/explore/{id}/delete', 'ArtworksController@delete_artwork');
Route::post('dropzone', 'ArtworksController@dropzone');
Route::post('dropzone2', 'GroupController@dropzone2');
