<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style>
		.comments {
			height: 200px;
			width: 140px;
		}
		
		.name {
			height: 100px;
			width: 40px
		}

	</style>
</head>

<body>


</body>

</html>
@extends("layout")
 @section("links")
  @foreach($key as $row)
<li><a href="/posts/{{$row->id}}">{{$row->name}}</a></li>
@endforeach 
<li><a href=" https://www.youtube.com/channel/UCSV4lg4V64uH-sr2SU3gdVA" target="_blank">Youtube</a></li>
@endsection
 @section("body")

<h3>{{$post->title}}</h3>
<p>{{$post->body}}</p>
<img src="{{$post->image}}" class="responsive-img">
<form action="/like/{{$post->id}}" method="post">
	@csrf
	<button class="btn waves-effect waves-light" type="submit" name="likes">Like {{$post->likes}}
    <i class="material-icons right">favorite </i>
    
  </button>
</form>
@foreach($comments as $comment)
<h5>{{$comment->user_name}}</h5>
<p>{{$comment->body}}</p>
<p>{{$comment->created_at->diffForHumans()}}</p>
@endforeach

<form action="/comment/{{$post->id}}" method="post">
	@csrf
	<input input="text" name="user_name">
	<input input="text" name="user_body"><button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</form>

@endsection
