<?php
    $name = "Juanpi";
    $url = "http://daw-em2018-juanpi96.c9users.io/jp-pino.github.io/lab24/web-service/public/$name"; //Route to the REST web service
    $c = curl_init($url);
    $response = curl_exec($c);
    curl_close($c);
    //var_dump($response); 
    
    $n = 125;
    $url = "http://daw-em2018-juanpi96.c9users.io/jp-pino.github.io/lab24/web-service/public/fibonacci/$n"; //Route to the REST web service
    $c = curl_init($url);
    $response = curl_exec($c);
    curl_close($c);
?>