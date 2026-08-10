<?php
 $host = "localhost";
 $user = "root"; // Cambia por tu usuario de MySQL
 $password = ""; // Cambia por tu contraseña
 $database = "dbcorreos";
 $conn = new mysqli($host, $user, $password, $database);
 if ($conn->connect_error) {
 die("Error de conexión: " . $conn->connect_error);
 }
 echo "Conexión exitosa";
?>