@extends("layout")
 @section("links")


@endsection
 @section("body")
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<form action="/addPost" method="post" enctype="multipart/form-data">
	@csrf
	<input type="text" name="title">
	<input type="text" name="body">
	<input type="file" name="image">
	<div class="input-field col s12 m12">
	<select name="categ">
      <option value="" disabled selected>Категории</option>
      <option value="1">Мое мнение</option>
      <option value="2">Новости </option>
      
    </select>
	</div>
	
	<button class="btn waves-effect waves-light" type="submit">Submit
    <i class="material-icons right">send</i>
  </button>

</form>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
	$(document).ready(function() {
		$('select').formSelect();
	});

</script>
@endsection




