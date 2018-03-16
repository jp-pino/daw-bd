<?php

function connect() {
    $mysql = mysqli_connect("localhost:8089","root","","lab19");
    $mysql->set_charset("utf8");
    return $mysql;
}

function disconnect($mysql) {
    mysqli_close($mysql);
}

function selectLike($str) {
    $db = connect();
    if ($db != NULL) {
        $str_like = "%";
        $str_like .= $str;
        $str_like .= "%";
        // insert command specification
        $query="SELECT auto_option FROM autocomplete WHERE UPPER(auto_option) LIKE UPPER(?)";
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("s", $str_like)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Get results
        $results = $statement->get_result();
        $words = array();

        if (mysqli_num_rows($results) > 0)  {
            while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                $words[] = $row['auto_option'];
            }
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return $words;
        }
        disconnect($db);
        return false;
    }
    return false;
}

$pattern = $_GET['pattern'];
$words = selectLike($pattern);
$size = 0;
$response = "";
for($i=0; $i<count($words); $i++) {
     $size++;
     $word = $words[$i];
     $response.="<option value=\"$word\">$word</option>";
}
if($size>0)
  echo "<select class='form-control' id=\"list\" size=$size onclick=\"selectValue()\">$response</select>";
?>
