<!DOCTYPE html>
<html lang="en">
	<head>

		<?php $pageName = "Assemble Books" ?>
		<title><?php echo $pageName ?></title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>

	    <script src="js/FED_Books.js"></script>
		

	</head>

	<body>

		<header class="border-bottom p-2">
			<div class="container">
				<h1 class="mt-2"><?php echo $pageName ?></h1>
			</div>
		</header>

		<main>
			<div class="container">
				
				<h2 class="font-weight-bold mt-3">Books</h1>

				<!-- Titles A-M -->

				<div class="bookcase-AM">

					<p class="mt-3">Titles A-M</p>

					<div id="bookshelf-AM" class="bookshelf row">
					</div>

					<button id="button-AM" class="btn btn-primary" type="button" onclick="toggleBooks('bookshelf-AM', 0)">Show more</button>

				</div>

				<!-- Titles N-Z -->

				<div class="bookcase-NZ">

					<p class="mt-4">Titles N-Z</p>

					<div id="bookshelf-NZ" class="bookshelf row">
					</div>

					<button id="button-NZ" class="btn btn-primary" type="button" onclick="toggleBooks('bookshelf-NZ', 0)">Show more</button>

				</div>

			</div><!-- /#container -->
		</main>

		<footer class="mt-3 p-2">
			<div class="container">
				<div class="row">
				    <div class="col-6">
				      <?php echo $pageName ?>
				    </div>
				    <div id="footer-links" class="col-6 container">
				    	<ul class="row">
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    		<li class="col-md-4 col-sm-6 col-xs-12">
				    			<a href="">Link</a>
				    		</li>
				    	</ul>
				    </div>
				</div>
			</div>
		</footer>

		<script src="js/bookshelf.js"></script>

	</body>
</html>