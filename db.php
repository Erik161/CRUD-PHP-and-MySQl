<?php
//CONN es una varible donde se almacena como objeto de coneccion para reutilizarla luego.

 session_start(); //sesion que nos permite guardar un dato, como los mensajes

$conn = mysqli_connect(
    'localhost', //lugar donde esta nuestra base de datos podemos colocar una IP o un dominio
    'root',  //Usuario en xampp por defecto es root
    '', //la contraseña, cuando instalamos mysql el por defecto crea un usuario root sin contraseña
    'php_mysql_crud' //nombre de la base de datos que quiero conectarme
);



?>
