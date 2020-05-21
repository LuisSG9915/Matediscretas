<?php

session_abort();
session_start();
//Objeto de conexión para poder reutilizar 
$conex=mysqli_connect("localhost", "root", "", "tests")
    //Si existe la conexión conex
// if (isset($conex)){
//     echo("Congratulations")
// }
?>
