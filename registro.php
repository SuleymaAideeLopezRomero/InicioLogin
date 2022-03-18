<?php
include('config.php');
session_start();

$username = $_POST['usuario'];
$password = $_POST['password'];

$query = $conn ->prepare("LELECT * FROM usarios WHERE username = :username");
$query ->bindparam("username, $username, PDO::PARAM_STR");
$query -> excute();
$result = $query-> fetch(PDO::FETCH_ASSOC);
 
if (!result) {
    echo 'usuario o password es incorrecto';
}else {
    if (password_verify($pasword, $result['PASSWORD'])) {
        echo 'Exito Bienvenido, los datos ingresados son correctos';
    }else {
           echo 'Error al iniciar';
    }
    
}
