<?php

use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

Route::get('/user/{id}/post', function($id){

    return User::find($id)->post->title;
    

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {

    //return view('welcome');
    
//});


//Route::get('/about', function () {

    //return "Hi about page";
    
//});

//Route::get('/contact', function () {

    //return "hi I am contact";
    
//});

//Route::get('/post/{id}/{name}', function($id, $name){

    //return "This is post number ".$id. " ". $name;
    
//});

//Route::get('admin/posts/example', array('as'=>'admin.home', function(){

    //$url = route('admin.home');
    
    //return "this url is ". $url;
    
//}));

//Route::get('/post/{id}', 'PostsController@index');
//

//Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

//Application Routes

Route::get('/insert', function(){
    DB::insert('insert into posts(title, content) values(?, ?)',['PHP with Laravel3', 'Laravel is awesome with Wata']);
});

//Route::get('/read', function(){
    //$results = DB::select('select * from posts where id = ?', [1]);
    //return var_dump($results);
//});
//

//Route::get('/update', function(){
    //$updated = DB::update('update posts set title = "Updated title" where id = ? ', [2]);

    //return $updated;
//});

//Route::get('/delete', function(){

    //$deleted = DB::delete('delete from posts where id = ?',[3]);

    //return $deleted;
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

//Route::get('/read', function(){

    //$posts = Post::all();

    //foreach($posts as $post) {

        //return $post->title;

    //}


//});

//Route::get('/find', function(){

    //$post = Post::find(4);

    //return $post->title;

//});

//Route::get('/findwhere', function(){
    //$posts = Post::where('id', 4)->orderBy('id', 'desc')->take(1)->get();

    //return $posts;

//});
//

//Route::get('/findmore', function(){
    ////$posts = Post::findOrFail(5); 

    ////return $posts;

    //$posts = Post::where('users_count', '<', 50)->firstOrFail();

//});


Route::get('/basicinsert', function(){

    $post = new Post;

    $post->id = 2;
    $post->title = 'is_admin';
    $post->content = 'Wow eloqeunt is really cool, look at this content';
    $post->save(); 

});

//Route::get('/create', function(){

    //Post::create(['title'=>'the create method', 'content'=>'WOW I am learning a lot']);

//});

//Route::get('/update', function(){

    //Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor']);

//});

//Route::get('/delete', function(){

    //$post = Post::find(1);
    //$post->delete();

//});

//Route::get('/delete2', function(){

    //Post::destroy([4,5]);

    ////Post::where('is_admin',0)->delete();

//});
//

Route::get('/softdelete', function(){

    Post::find(2)->delete();

});

//Route::get('/readsoftdelete', function(){

    ////$post = Post::find(1);

    ////return $post;

    //$post = Post::onlyTrashed()->get();//->where('id', 1)->get();

    //return $post;
//});
//

//Route::get('/restore', function(){

    //Post::withTrashed()->where('is_admin', 0)->restore();

//});

Route::get('/forcedelete', function(){

    Post::onlyTrashed()->forceDelete();

});

Route::get('/post/{id}/user', function($id){

    return Post::find($id)->user->name;

});

Route::get('/posts', function(){

    $user = User::find(1);

    foreach($user->posts as $post) {

        echo $post->title."<br>";
         
    }

});
