
@extends("layout")

@section("links")
@foreach($key as $row)
<li ><a href="/posts/{{$row->id}}">{{$row->name}}</a></li>

@endforeach
<li><a href=" https://www.youtube.com/channel/UCSV4lg4V64uH-sr2SU3gdVA">Youtube</a></li>
@endsection
@section("body")
@foreach($posts as $post)
  <h1>{{$post->title}}</h1>
  <p>{{$post->created_at->diffForHumans()}}</p>
   <p>{{str_limit($post->body, 200) }}</p>
   
   <a href="/post/{{$post->id}}">Читать дальше....</a>
@endforeach
<h1></h1>

@endsection