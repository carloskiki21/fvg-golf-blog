<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo APP_URL ?>">
		<meta charset="utf-8">
		<title> <?php echo APP_TITTLE ?> </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#about">About</a>
				</li>
				<li>
					<a href="#contact">Contact</a>
				</li>
			</ul>
            <?php
            	if (isset($_SESSION['app_id'])) {
            		?>
            			<ul class="nav navbar-nav navbar-right">
            				<li class="">
				            	<a href="#"><?php echo strtoupper($_users[$_SESSION['app_id']]['user']); ?></a>
				            </li>
				            <li>
				            	<a href="?view=logout">Salir</a>
				            </li>
            			</ul>
            		<?php
            	}else{
            		?>
            			<ul class="nav navbar-nav navbar-right">
            				<li>
			            		<a href="?view=login">Sign in</a>
			            	</li>
										<li>
			            		<a href="?view=reg">Sign Up</a>
			            	</li>
            			</ul>

            		<?php
            	}
            ?>

        </div>
      </div>
    </nav>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
