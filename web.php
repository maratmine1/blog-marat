<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Route::get('/', function () {
  $result = App\Category::all();
	$post=App\Post::orderBy("created_at","desc")->first();
    return view('welcome',["key"=>$result, "post"=>$post]);
});
Route::get('/posts/{id}',function($id){
    $links = App\Category::all();
    $result = App\Post::where('id_categories',$id)->get();
    return view('post', ["key"=>$links,"posts"=>$result]);
   
});
Route::get('/post/{id}',function($id){
      $links = App\Category::all();
    $post = App\Post::find($id);
	$comments= $post->comments;
    return view('individ', [ "post"=>$post,"comments"=>$comments,"key"=>$links]);
});
Route::post('/comment/{id}',function(Request $req,$id){
    App\Comment::create([
        "post_id"=>$id,
        "user_name"=>$req->user_name,
        "body"=>$req->user_body,
		
    ]);

  
    
return back();
});
Route::get('/admin',function(){
	 $links = App\Category::all();
		return view('admin');
	});
Route::post('/addPost',function(Request $req){
	$puth= Storage::put('public',$req->file('image'));
	$url = Storage::url($puth);
	 App\Post::create([
        "id_categories"=>$req->categ,
        "title"=>$req->title,
        "body"=>$req->body,
		 "image"=>$url,
		 "likes"=>0,
    ]);

	return back();
});
Route::get('/lol',function(){
	header("Access-Control-Allow-Origin: *");
});
Route::post('/like/{id}',function($id){
	$post=App\Post::find($id);
	$likes=$post->likes;
	$likes++;
	App\Post::find($id)->update(['likes'=>$likes]);
	return back();
});
?>
