<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<nav>
		<div class="nav-wrapper">
			



			<nav class="indigo ">
				<div class="nav-wrapper">
				<a href="http://127.0.0.1:8000/" class="brand-logo center ">Блог Николая Барамыгина</a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						@yield("links")
					 	
					</ul>
				</div>
			</nav>

			<ul class="sidenav" id="mobile-demo">
				@yield("links")
			</ul>
		</div>
	</nav>
	<div class="container">
		@yield("body")
	</div>
	@yield("forms")
	<footer class="page-footer indigo">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text"></h5>
					<p class="grey-text text-lighten-4"></p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text"></h5>
					<ul>
						<li>
							<a class="grey-text text-lighten-3" href="#!"></a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="#!"></a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="#!"></a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="#!"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-copyright">
		<div class="container">
		<h5 class="white-text">Support</h5>
				 <ul>
                  <li><a class="grey-text text-lighten-3" href="https://vk.com/gavno87">VK</a></li>
                   </ul>
			
				© 2018 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!"></a>
				
                 
               
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
			$('select').formSelect();
			  $('.sidenav').sidenav();
		});

	</script>
</body>

</html>
