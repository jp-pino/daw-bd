<?php
    // define variables and set to empty values
    $name = $email = $comment = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["e-mail"]);
        $comment = test_input($_POST["message"]);
    }

    include("partials/_header.html");
    include("partials/_content.html");

    include("partials/_questions.html");
    include("partials/_contact.php");
    include("../partials/_footer.html");
    include("partials/_scripts.html");
    echo "<script src='js/index.js'></script>";
    include("partials/_end.html");
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>LAB 1: Intro</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/custom.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Saira+Condensed|Yanone+Kaffeesatz" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>

		<!-- Font Awesome -->
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body data-spy="scroll" data-target="#data-scrollspy">
		<div class="container ">
			<header class="py-4">
				<h1>DAW y BD</h1>
			</header>

			<!-- Static navbar -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
				<a class="navbar-brand" href="#"><img src="images/logo.png" width="30" height="30" class="d-inline-block " alt=""> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Labs
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="lab1.html">Lab 1</a>
								<a class="dropdown-item" href="#">Lab 2</a>
								<a class="dropdown-item" href="lab3.html">Lab 3</a>
								<a class="dropdown-item" href="lab4.html">Lab 4</a>
								<a class="dropdown-item" href="lab5.html">Lab 5/6</a>
								<a class="dropdown-item" href="lab7.html">Lab 7</a>
								<a class="dropdown-item" href="lab9.php">Lab 9</a>
		                        <a id="lab11" class="dropdown-item" href="lab11/">Lab 11</a>
								<div class="dropdown-divider"></div>
          						<a class="dropdown-item" href="q_1.html">Cuestionario 1</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="CV.pdf">CV</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" href="#contact">Contacto</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<section id="content" class="container">
			<header>
				<h2 class="sr-only">Home</h2>
			</header>


			<article id="intro">
				<header>
					<h2 class="sr-only">DAW y BD</h2>
				</header>
				<div class="container-fluid">
					<div class="asog">
						<h1 class="ml1 asog-r1">
							<span class="text-wrapper">
								<span class="line line1"></span>
								<span class="letters">DAW y BD</span>
								<span class="line line2"></span>
							</span>
						</h1>
						<h1 class="asog-r2">Repositorio de Laboratorios</h1>
					</div>
				</div>
			</article>

			<article id="recent" class="py-4 mt-4">
				<header>
					<h2>Artículos recientes</h2>
					<h5>Laboratorios, Cuestionarios y Entregas</h5>
				</header>

				<div class="row mt-4">
					<div class="col">
						<a href="lab3.html">
							<div class="box my-4">
								<div class="px-3 py-3">
									<h3>Laboratorio 3</h3>
									<p>En este lab debemos agregar estilos CSS al laboratorio anterior y contestar nuevas preguntas.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="lab4.html">
							<div class="box my-4">
								<div class="px-3 py-3">
									<h3>Laboratorio 4</h3>
									<p>En este lab debemos realizar ejercicios de JS y contestar nuevas preguntas.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col">
						<a href="lab1.html">
							<div class="box my-4">
								<div class="px-3 py-3">
									<h3>Laboratorio 5</h3>
									<p>En este lab debemos realizar ejercicios de Programación Orientada a Eventos y contestar nuevas preguntas relacionadas al tema.</p>
								</div>
							</div>
						</a>
					</div>
				</div>

			</article>

		</section>

		<section id="social" class="container">
			<header>
				<h2 class="sr-only">Social</h2>
			</header>
			<!-- Main component for a primary marketing message or call to action -->
			<article>
				<div class="wrapper text-center">
					<div class="btn-group py-4 text-center" role="group" aria-label="Basic example">
						<button type="button" class="btn btn-link"><i class="fab fa-2x fa-facebook-square"></i></button>
						<button type="button" class="btn btn-link"><i class="fab fa-2x fa-instagram"></i></button>
						<button type="button" class="btn btn-link"><i class="fab fa-2x fa-twitter-square"></i></button>
						<button type="button" class="btn btn-link"><i class="fab fa-2x fa-slack"></i></button>
					</div>
				</div>
			</article>
		</section>



		<!-- Modal -->
		<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="row">
						<div class="col">
							<div class="well">
								<form class="form-horizontal" method="post">
									<fieldset>
										<legend class="text-center py-4">Contáctenos</legend>

										<!-- Name input-->
										<div class="form-group">
											<label class="col control-label" for="name">Nombre</label>
											<div class="col">
												<input id="name" name="name" type="text" placeholder="Nombre Completo" class="form-control">
											</div>
										</div>

										<!-- Email input-->
										<div class="form-group">
											<label class="col control-label" for="email">E-mail</label>
											<div class="col">
												<input id="email" name="email" type="email" placeholder="E-mail" class="form-control">
											</div>
										</div>

										<!-- Select input-->
										<div class="form-group">
											<label class="col control-label" for="options">¿Por qué te contactas?</label>
											<div class="col">
												<select class="form-control" id="options">
													<option>Me gusta mucho el sitio!</option>
													<option>Encontré una falla</option>
													<option>Oportunidades de negocio</option>
												</select>
											</div>
										</div>

										<!-- Message body -->
										<div class="form-group">
											<label class="col control-label" for="message">Comentarios</label>
											<div class="col">
												<textarea class="form-control" id="message" name="message" placeholder="Por favor escriba aquí su mensaje..." rows="5"></textarea>
											</div>
										</div>

										<!-- Form actions -->
										<div class="form-group">
											<div class="col text-right">
												<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/anime_test.js"></script>
	</body>

	<footer class="footer bg-dark text-white mt-4">
		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-md-6">
					<span class="text-muted">Hecho con el editor <strong>Brackets</strong> - <a href="http://brackets.io/">http://brackets.io/</a></span>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3 text-right align-self-end">
					Por <strong>Juan Pablo Pino</strong>
				</div>
			</div>
		</div>
	</footer>

</html>
