<?php
include("db.php"); // con esta forma incluimos al db.php que es donde esta la conexion MYSQL

if (isset($_POST['save_task'])) {
    $title = $_POST['title']; 
    $description = $_POST['description']; 

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; 
    $result = mysqli_query($conn, $query);
 
    if (!$result) {
        die("Query Failed"); 
    }
    echo 'saved'; 
} 

?>