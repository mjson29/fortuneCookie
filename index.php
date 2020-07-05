<!doctype html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Fortune Cookie</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/styles/cookie.css" rel="stylesheet">

		<link rel="SHORTCUT ICON" href="assets/images/favicon.ico">
	  </head>
	  
  	<body class="text-center">
    	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
			<header class="masthead mb-auto">
				<div class="inner">
					<h3 class="masthead-brand">Fortune Cookie</h3>
				</div>
			</header>

			<main role="main" class="inner cover">
				<img src="assets/images/cookie.png" alt="..." class="img-thumbnail m-4">
				<h1 class="cover-heading"></h1>
				<p class="lead mt-3 desc">A fortune cookie is a crisp cookie usually made from flour, sugar, vanilla, and sesame seed oil with a piece of paper inside, a "fortune", on which is an aphorism, or a vague prophecy.</p>
				<input type="hidden" name="id" id="id">
				<div class="m-5" id="actions">
					<p class="lead">
						<a href="javascript:;" class="btn btn-lg btn-secondary crack_it">Crack It!</a>
					</p>
				</div>
			</main>

			<footer class="mastfoot mt-auto">
				<div class="inner">
					<p>Fortune Cookie Cracker, by <a href="https://www.linkedin.com/in/mc-jayson-sallan-14540a121" target="_blank">@mjayson</a>.</p>
				</div>
			</footer>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="fortune_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Enter Your Fortune</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<textarea class="form-control" name="custom_cookie" maxlength="250" id="custom_cookie" cols="30" rows="3" placeholder="Type here"></textarea>
						<div class="alert alert-warning mt-2" role="alert">
							Your fortune will be added to the pool of fortune.
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-secondary active replace">Save</button>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="assets/bootstrap/js/bootstrap.js"></script>
		<script src="assets/scripts/common.js"></script>
	</body>
</html>
