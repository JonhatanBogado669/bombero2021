<?php
    $servername ="localhost";
    $username="root";
    $password="root";
    $db_name="registro_evento";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_error){
        die("Conexion fallida:". $conn->connect_error);
    }

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];

    $sql = "INSERT INTO dato(nombre,apellido,correo,telefono) VALUES('$nombre','$apellido','$correo','$telefono')";

    if($conn->query($sql)==TRUE){
        echo "Se ha registrado exitosamente";
    }else{
        echo"Error:". $sql ."<br>".$conn->error;
    }

    $conn->close();
?>