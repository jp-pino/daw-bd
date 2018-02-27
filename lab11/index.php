<?php
    // define variables and set to empty values
    $name = $email = $comment = $option = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include("../partials/_header.html");
    include("partials/_content.html");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["e-mail"]);
        $comment = test_input($_POST["message"]);
        if ($_POST["options"] == "1") {
            $option = " en breve para preguntarte que otras ideas tienes para mejorar nuestro sitio. Valoramos mucho tu aporte!";
        } else if ($_POST["options"] == "2") {
            $option = " cuando hayamos solucionado la falla que encontraste.";
        } else {
            $option = " para concretar qué necesitas para tu sitio.";
        }

        echo '
            <div class="jumbotron" id="response">
                <h2>Bienvenido <strong>'.$name.'</strong></h2>
                <p>Hemos recibido tu mensaje:</p>
                <p class="mx-4"><i>'.$comment.'</i></p>
                <p>Te contactaremos a tu correo <strong>'.$email.'</strong>'.$option.'</p>
            </div>
        ';
    }

    include("partials/_questions.html");
    include("partials/_contact.php");
    include("../partials/_footer.html");
    include("../partials/_scripts.html");
    echo "<script src='js/lab11.js'></script>";
    include("../partials/_end.html");
?>
