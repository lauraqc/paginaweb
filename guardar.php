<?php
include("db.php");
if(isset($_POST['save'])){
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $fechaNaci = $_POST['fecha-Nacimiento'];
    $papa = $_POST['papa'];

    $query = "INSERT INTO estudiante(id, nombre, fechaNacimiento, papa)
     VALUES($id, '$nom', '$fechaNaci', $papa)";
    $result = mysqli_query($conn, $query);
    if(!$result){
        $_SESSION['mensaje'] = "No se pudo guardar";
        $_SESSION['tipo_mensaje'] = "danger";
        //die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Estudiante guardado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: index.php");
    
}

?>