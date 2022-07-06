<?php
$server = "localhost:3325";
$username = "root";
$password = "";
$database = "todoslist";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
