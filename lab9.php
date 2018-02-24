<?php

    $test_1 = array(100, 95, 97, 70, 98, 95);
    $test_2 = array(80, 97, 96, 65, 76, 95);

    function print_array($array) {
        echo $array[0];
        for ($i=1; $i<sizeof($array); $i++) {
            echo ", ".$array[$i];
        }
    }

    function media($array) {
        $aux = 0;
        $i = 0;
        foreach ($array as $value) {
            $aux += $value;
            $i++;
        }
        return $aux/$i;
    }

    function mediana($array) {
        sort($array);
        if (sizeof($array) % 2 == 0) {
            return ($array[sizeof($array)/2-1] + $array[sizeof($array)/2])/2;
        } else {
            return $array[(sizeof($array)-1)/2];
        }
    }

    function listas($array) {
        // Lista de numeros
        echo "<ul class='card-text'>";
        foreach ($array as $value) {
            echo "  <li>$value</li>";
        }
        echo "</ul>";

        // Lista de datos
        $media = media($array);
        $mediana = mediana($array);
        echo "<ul class='card-text'>";
        echo "  <li>Media: ".$media."</li>";
        echo "  <li>Mediana: ".$mediana."</li>";
        // Ascendente
        echo "<li>";
        sort($array);
        print_array($array);
        echo "</li>";
        // Descendente
        echo "<li>";
        rsort($array);
        print_array($array);
        echo "</li>";

        echo "</ul>";
    }

    function potencias($n) {
        echo "<table class='card-text table table-hover'>";
    	echo "<tr><th>n</th><th>n^2</th><th>n^3</th></tr>";
        for ($i=1; $i <= $n; $i++) {
            echo "<tr><td>".$i."</td><td>".pow($i,2)."</td><td>".pow($i,3)."</td></tr>";
        }
        echo "</table>";
    }

    function area_circulo($rad) {
        return pi() * pow($rad, 2);
    }

?>

<?php include("partials/structure.php"); ?>


<!DOCTYPE html>
<html lang='es'>
    <?php _header("Lab 9: PHP"); ?>

    <body data-spy="scroll" data-target="#data-scrollspy">
        <?php _navbar(7); ?>

        <section id="content" class="container">
			<header>
				<h2 class="sr-only">Laboratorio 9</h2>
			</header>
			<div class="row">
				<div class="col-lg-9">

                    <!-- Main component for a primary marketing message or call to action -->
					<article id="intro" class="jumbotron bg-dark text-white shadow">
						<div class="row">
							<div class="col-lg-6">
								<header>
									<h2>Laboratorio 9: PHP</h2>
								</header>
								<p class="py-5">En este laboratorio cubriremos los conceptos básicos de PHP y responderemos algunas preguntas.</p>
							</div>
							<div class="col-sm">
								<div class="container-fluid">
								<img src="images/php.png" class="img-fluid img" alt="Responsive Image of PHP"></div>
							</div>
						</div>

					</article>

                    <article id="tests" class="py-4">
						<header>
							<h2>Ejercicios</h2>
							<h5 class="px-3"> de PHP</h5>
						</header>

						<div class="card-deck py-4">
							<div class="card shadow">
                                <div class="card-body">
									<h5 class="card-title">Media</h5>
                                    <p class="card-text">Prueba 1: <?php print_array($test_1)?>. Media: <?php echo media($test_1)?></p>
                                    <p class="card-text">Prueba 2: <?php print_array($test_2)?>. Media: <?php echo media($test_2)?></p>
								</div>
							</div>

                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Mediana</h5>
                                    <p class="card-text">Prueba 1: <?php print_array($test_1)?>. Mediana: <?php echo mediana($test_1)?></p>
                                    <p class="card-text">Prueba 2: <?php print_array($test_2)?>. Mediana: <?php echo mediana($test_2)?></p>
                                </div>
                            </div>

						</div>

                        <div class="card-deck py-4">
							<div class="card shadow">
                                <div class="card-body">
									<h5 class="card-title">Ordenar y Formatear</h5>
                                    <p class="card-text">Prueba 1: <?php print_array($test_1)?></p>
                                    <?php listas($test_1);?>
                                    <p class="card-text">Prueba 2: <?php print_array($test_2)?></p>
                                    <?php listas($test_2);?>
								</div>
							</div>

                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Potencias</h5>
                                    <?php potencias(5); ?>
                                </div>
                            </div>

						</div>

                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Area del círculo</h5>
                                <p class="card-text">Radio: 5cm. Área: <?php echo area_circulo(5);?>cm^2.</p>
                            </div>
                        </div>




					</article>

					<article id="questions" class="py-4">
						<header>
							<h2>Preguntas</h2>
							<h5 class="px-3">...y respuestas</h5>
						</header>

						<div class="card mt-4 shadow">
							<div class="card-body">
								<h4 class="card-title">¿Qué hace la función <code>phpinfo()</code>? Describe y discute 3 datos que llamen tu atención.<sub><small>[1]</small></sub></h4>
								<p class="card-text">La función <code>phpinfo()</code> despliega información de la configuración de PHP. Entre los datos que me llaman la atención está la versión instalada de Apache, que permite saber que vulnerabilidades presenta el sistema. También destaca la información del sistema que puede ser relevante al montar el servicio en un servidor de producción. Finalmente, es importante notar la versión de PHP que nos permite saber que funciones y librerias nativas tenemos disponibles.</p>
							</div>
						</div>
                        <div class="card mt-4 shadow">
                            <div class="card-body">
                                <h4 class="card-title">¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?<sub><small>[2]</small></sub></h4>
                                <p class="card-text">Ya que la principal diferencia entre un ambiente de producción y uno de prueba es la seguridad, en primer lugar hay que restringir el acceso a los usuarios autorizados. También hay que limitar el control a administradores del sistema.</p>
                            </div>
                        </div>
                        <div class="card mt-4 shadow">
                            <div class="card-body">
                                <h4 class="card-title">¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.<sub><small>[3]</small></sub></h4>
                                <p class="card-text">El código es generado por un servidor que le envía el archivo con únicamente código HTML. PHP contiene funciones que "hacen algo" y posteriormente envían la información ya procesada al usuario. Estas funciones se ejecutan en el servidor, no en el lado del cliente.</p>
                            </div>
                        </div>
					</article>

					<article id="sources" class="py-4">
						<header>
							<h2>Bibliografía</h2>
						</header>
                        <div class="container-fluid">
    						<ul class="list-unstyled">
    							<li>[1] http://php.net/manual/en/function.phpinfo.php</li>
    							<li>[2] https://documentation.progress.com/output/ua/OpenEdge_latest/index.html#page/pasoe-admin/development-servers-compared-to-production-serve.html</li>
                                <li>[3] http://php.net/manual/en/intro-whatis.php</li>
    						</ul>
                        </div>
					</article>


				</div>
				<div class="col-lg-3">
					<div class="sidebar sticky">
						<nav id="data-scrollspy">
							<div id="lineDrawing">
								<svg viewBox="0 0 301 301" class="mb-4">
									<g fill="none" fill-rule="evenodd" stroke="#343a40" stroke-width="1" class="lines">
										<path class="cls-1" d="M294.32,0H5.68A5.7,5.7,0,0,0,0,5.68V294.32A5.7,5.7,0,0,0,5.68,300H294.32a5.7,5.7,0,0,0,5.68-5.68V5.68A5.7,5.7,0,0,0,294.32,0ZM107.75,194.74q0,24.11-8.33,37.16t-28,13q-9.94,0-23.36-3.73V216.61a30.76,30.76,0,0,0,9.69,1.74q8.95,0,11.31-6.71t2.36-19.88V58l36.29-3Zm133.34-46.85a50,50,0,0,1-26.59,16.4q-15.79,3.86-36.41,3.85V240l-36.54,3V55.05h23.36q28.08,0,44.74,2.36A52.69,52.69,0,0,1,239.1,72q12.8,12.18,12.8,39Q251.9,135.34,241.09,147.89Z"/>
										<path class="cls-1" d="M207.91,89.6q-7.71-5.46-24.36-5.47h-5.22v54.43h6.21q14.41,0,22.74-6t8.33-21.87Q215.62,95.07,207.91,89.6Z"/>
									</g>
								</svg>
							</div>
							<img src="images/logo-big.png" class="img img-fluid logo_big" alt="">
							<div id="sidenav" class="list-group d-none d-lg-block">
								<a class="list-group-item list-group-item-action" href="#intro"><i class="fas fa-angle-right"></i> Introducción</a>
								<a class="list-group-item list-group-item-action" href="#tests"><i class="fas fa-angle-right"></i> Pruebas de PHP</a>
								<a class="list-group-item list-group-item-action" href="#questions"><i class="fas fa-angle-right"></i> Preguntas</a>
								<a class="list-group-item list-group-item-action" href="#sources"><i class="fas fa-angle-right"></i> Bibliografía</a>
							</div>
							<div class="wrapper text-center">
								<div class="btn-group py-3 text-center" role="group" aria-label="Basic example">
									<button type="button" class="btn btn-link social"><i class="fab fa-2x fa-facebook-square"></i></button>
									<button type="button" class="btn btn-link social"><i class="fab fa-2x fa-instagram"></i></button>
									<button type="button" class="btn btn-link social"><i class="fab fa-2x fa-twitter-square"></i></button>
									<button type="button" class="btn btn-link social"><i class="fab fa-2x fa-slack"></i></button>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/anime_test.js"></script>

    </body>
    <?php _footer(); ?>
</html>
