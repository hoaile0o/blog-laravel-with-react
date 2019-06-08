<?php
Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');
Route::resource('categories', 'CategoryController',['except'=>['create']]);

Auth::routes();

Route::get('editPost/{user_id}', 'PostsController@edit')->name('posts.edit');

Route::get('detailPost/{post_id}', 'DetailController@show')->name('posts.detail');

Route::get('newPost', 'PostsController@newPost')->name('post.newPost');

Route::get('index', 'PostsController@paginate')->name('index');

Route::get('categoryManage', 'CategoryController@manage')->name('categoryManage');

Route::get('/','Postscontroller@paginate');

Route::get('home', 'PostsController@paginate')->name('home');

Route::get('search', 'SearchController@index');

Route::post('comments/{post_id}',['uses' => 'CommentsController@store', 'as' => 'comments.store']);

Route::post('contact','HomeController@postContact')->name('postContact');

Route::group(['prefix'=>'profile/{id_user}'],function(){
    Route::get('', 'PostsController@show')->name('posts.show');

    Route::post('', 'UserController@update_avatar');
});

Route::get('/welcome', function () {
    return view('dashboard.welcome');
});

Route::get('/contact', function () {
    return view('dashboard.contact');
});

Route::get('/got', [
    'middleware' => ['auth'],
    'uses' => function () {
        echo "You are allowed to view this page!";
    }]);

Route::get('/admin/user', function () {
    return view('admin.users');
})->middleware(['can:admin']);



