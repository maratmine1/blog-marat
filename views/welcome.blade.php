 @extends("layout") @section("links") @foreach($key as $row)
<li><a href="/posts/{{$row->id}}">{{$row->name}}</a></li>
@endforeach 
<li><a href=" https://www.youtube.com/channel/UCSV4lg4V64uH-sr2SU3gdVA">Youtube</a></li>
@endsection
 @section("body")
<div class="row">
	<div class="col m5 s12">
		<h1>Добро пожаловать!</h1>
		<img src="/img/fun.jpg" alt="" class="responsive-img">
		<p>Этот сайт был сделан Маратом Барамыгином. Для моего отца Николая Барамыгина.</p>
		<p>В этом блоге вы будете в курсе последних событий Якутии и не только.</p>
		
	</div>
	<div class="col m7 s12">
	<h1>Последняя новость </h1>
		<h2 class="flow-text">{{$post->title}}</h2>
		 <p>{{$post->created_at->diffForHumans()}}</p>
		 <p>{{str_limit($post->body, 400) }}</p>
		 <img src="{{asset($post->image)}}" class="responsive-img">
   <a href="/post/{{$post->id}}">Читать дальше....</a>
	</div>
</div>

@endsection
