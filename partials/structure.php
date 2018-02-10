<?php

	function _header($title) {
		echo "<head>
				<meta charset='utf-8'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				<meta name='description' content=''>
				<meta name='author' content=''>
				<link rel='icon' href='../../favicon.ico'>''

				<title>$title</title>

				<!-- Bootstrap core CSS -->
				<link href='css/bootstrap.min.css' rel='stylesheet'>

				<!-- Custom styles for this template -->
				<link href='css/custom.css' rel='stylesheet'>

				<!-- Custom Fonts -->
				<link href='https://fonts.googleapis.com/css?family=Fjalla+One|Saira+Condensed|Yanone+Kaffeesatz' rel='stylesheet'>
				<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
				<link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>

				<!-- Font Awesome -->
				<link href='https://use.fontawesome.com/releases/v5.0.4/css/all.css' rel='stylesheet'>

				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!--[if lt IE 9]>
				  <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
				  <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
				<![endif]-->
			</head>";
	}

	function _navbar($active_i) {
		$array = [];
		for ($i=0; $i < 9; $i++) {
			if ($i == $active_i) {
				$array[] = " active";
			} else {
				$array[] = "";
			}
		}

		echo "<div class='container '>
		    <header class='py-4'>
		        <h1>DAW y BD</h1>
		    </header>

		    <!-- Static navbar -->
		    <nav class='navbar navbar-expand-lg navbar-light bg-light rounded shadow'>
		        <a class='navbar-brand' href='#'><img src='images/logo.png' width='30' height='30' class='d-inline-block ' alt=''> </a>
		        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
		            <span class='navbar-toggler-icon'></span>
		        </button>
		        <div class='collapse navbar-collapse' id='navbarNav'>
		            <ul class='navbar-nav'>
		                <li class='nav-item'>
		                    <a class='nav-link".$array[0]."' href='index.html'>Home</a>
		                </li>
		                <li class='nav-item dropdown'>
		                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
		                        Labs
		                    </a>
		                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
		                        <a class='dropdown-item".$array[1]."' href='lab1.html'>Lab 1</a>
		                        <a class='dropdown-item".$array[2]."' href='#'>Lab 2</a>
		                        <a class='dropdown-item".$array[3]."' href='lab3.html'>Lab 3</a>
		                        <a class='dropdown-item".$array[4]."' href='lab4.html'>Lab 4</a>
		                        <a class='dropdown-item".$array[5]."' href='lab5.html'>Lab 5/6</a>
		                        <a class='dropdown-item".$array[6]."' href='lab7.html'>Lab 7</a>
		                        <a class='dropdown-item".$array[7]."' href='lab9.php'>Lab 9</a>
		                        <div class='dropdown-divider'></div>
		                        <a class='dropdown-item".$array[8]."' href='q_1.html'>Cuestionario 1</a>
		                    </div>
		                </li>
		                <li class='nav-item'>
		                    <a class='nav-link' href='CV.pdf'>CV</a>
		                </li>
		                <li class='nav-item'>
		                    <a class='nav-link' data-toggle='modal' href='#contact'>Contacto</a>
		                </li>
		            </ul>
		        </div>
		    </nav>
		</div>";
	}

	function _footer() {
		echo "	<footer class='footer bg-dark text-white mt-4'>
			<div class='container-fluid py-4'>
				<div class='row'>
					<div class='col-md-6'>
						<span class='text-muted'>Hecho con el editor <strong>Brackets</strong> - <a href='http://brackets.io/'>http://brackets.io/</a></span>
					</div>
					<div class='col-md-3'></div>
					<div class='col-md-3 text-right align-self-end'>
						Por <strong>Juan Pablo Pino</strong>
					</div>
				</div>
			</div>
		</footer>";
	}

?>
