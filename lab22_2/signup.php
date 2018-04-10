<?php
    require_once("modelo.php");
    require_once 'vendor/google-api-php-client-2.2.1/vendor/autoload.php';

    // Get $id_token via HTTPS POST.
    
    $id_token = $_POST["id_token"];
    
    $client = new Google_Client(['client_id' => "54504204460-s1s929a9k8mksj07ubsfds0k4atcgif0.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $userid = $payload['sub'];
        // If request specified a G Suite domain:
        //$domain = $payload['hd'];
        echo signup($userid);
    } else {
        // Invalid ID token
        echo "Usuario no válido";
    }

   
?>