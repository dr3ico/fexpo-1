<?php
include 'conector.php';
if (isset($_POST["nombre"]))
   {
    $nombre = $_POST["nombre"];
    $apelldios = $_POST["apellidos"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $sexo = $_POST["email"];
    $sexo = $_POST["sexo"];

     $sql = "INSERT INTO usuario (nombre, apellidos,login,password,sexo ) ";
    $sql.= "VALUES ('".$nombre."', '".$apelldios."','".$login."','".$password."', '".$sexo."')";
    // enviamos la consulta
    mysql_query($sql, $conexion);
    $status = "ok";
    echo "Tus datos fueron enviados correctamente <b></b>";
}


?>