<?php
include("db.php"); // con esta forma incluimos al db.php que es donde esta la conexion a MYSQL

if (isset($_POST['save_task'])) { //validador
    $title = $_POST['title']; //aca es donde recibe las tareas en los input
    $description = $_POST['description']; //aca es donde recibe las tareas en los input

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; //para ingresar los registros a MYSQL, VALUES es para indicar que objetos son los que hay que agregar
    $result = mysqli_query($conn, $query); // esto es par almacenar los datos
 
    if (!$result) {
        die("Query Failed"); 
    }

    $_SESSION['message'] = 'Task Saved succesfully';  // almacenamos un mensaje
    $_SESSION['message_type'] = 'success'; // almacenamos un color para el mensaje con una clase de BOOTSTRAP
   
    header("Location: index.php"); //Forma de rediccionar a la misma pagina
} 

?>