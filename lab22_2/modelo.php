 <?php
    function connect() {
        $mysql = mysqli_connect("localhost","root","","Tienda");
        $mysql->set_charset("utf8");
        return $mysql;
    }

    function disconnect($mysql) {
        mysqli_close($mysql);
    }

    function login($id) {
        $db = connect();
        if ($db != NULL) {
    
            // insert command specification
            $query="SELECT * FROM Usuarios WHERE id = ?";
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("s", $id)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Get results
            $results = $statement->get_result();
    
            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                mysqli_free_result($results);
                disconnect($db);
                return $id;
            }
            disconnect($db);
            return false;
        }
        return false;
    }
    
    function signup($id) {
        $db = connect();
        if ($db != NULL) {
    
            // insert command specification
            $query='INSERT INTO Usuarios (id) VALUES (?) ';
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("s", $id)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
             // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }

            disconnect($db);
            return $id;
        }
        return false;
    }

    //var_dump(login('lalo', 'hockey'));
    //var_dump(login('joaquin', 'basket'));
    //var_dump(login('cesar', 'basket'));

    function crearProducto($nombre, $descripcion, $imagen) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query='INSERT INTO Productos (nombre,description,image) VALUES (?,?,?) ';
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("sss", $nombre, $descripcion, $imagen)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
             // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }

            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function getProductoRow($id) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT * FROM Productos WHERE id ='.$id;
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results

            $fila = mysqli_fetch_array($results, MYSQLI_BOTH);
            mysqli_free_result($results);
            disconnect($db);
            return $fila;
        }
        return false;
    }

    function getProductos() {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT * FROM Productos';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results
            $html = '';
            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $html .= '  <div class="card">
                                    <div class="card-header">'.$fila["nombre"].'</div>
                                    <img class="card-img" src="uploads/'.$fila["image"].'" alt="Card image">
                                    <div class="card-body">
                                        <div class="card-text">'.$fila["description"].'</div>
                                        <a class="btn btn-primary" href="delete.php?q='.$fila["id"].'">Eliminar</a>
                                        <a class="btn btn-primary" href="edit.php?q='.$fila["id"].'">Editar</a>
                                    </div>
                                    <div class="card-footer">Publicado el '.$fila["created_at"].'</div>
                                </div>';
            }
            echo $html;
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return true;
    }

    function deleteProducto($id) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query='DELETE FROM Productos WHERE id=?';
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("i", $id)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
             // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }

            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function editProducto($id, $nombre, $description) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query='UPDATE Productos SET nombre=?, description=? WHERE id=?';
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("ssi", $nombre, $description, $id)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
             // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }

            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }


        //var_dump(login('lalo', 'hockey'));
        //var_dump(login('joaquin', 'basket'));
        //var_dump(login('cesar', 'basket'));

?>
