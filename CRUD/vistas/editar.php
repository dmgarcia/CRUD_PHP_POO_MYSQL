<?php
$controlador = new controladorEstudiantes();
if (isset($_GET['id'])) {
    $row = $controlador->ver($_GET['id']);
} else {
    header('Location: editar.php');
}

if(isset($_POST['enviar'])){
    $controlador->editar($_GET['id'], $_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['telefono']);
    header('Location: index.php');
}
?>

<form action="" method="POST">

    <b>Cedula: </b><br>
    <input type="number" name="cedula" value="<?php echo $row['cedula'] ?>" required="" disabled="">
    <br>

    <b>Nombre: </b><br>
    <input type="text" name="nombre" value="<?php echo $row['nombre'] ?>" required="">
    <br>

    <b>Apellido: </b><br>
    <input type="text" name="apellido" value="<?php echo $row['apellido'] ?>" required="">
    <br>

    <b>Edad: </b><br>
    <input type="text" name="edad" value="<?php echo $row['edad'] ?>" required="">
    <br>
    
    <b>Teléfono: </b><br>
    <input type="number" name="telefono" value="<?php echo $row['telefono'] ?>" required="">
    <br>

    <b>Promedio: </b><br>
    <input type="text" name="promedio" value="<?php echo $row['promedio'] ?>" required="" disabled="">
    <br><br>

    <input type="submit" name="enviar" value="Editar">
</form>

