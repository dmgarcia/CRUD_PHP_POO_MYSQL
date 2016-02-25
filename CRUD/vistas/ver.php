<?php

$controlador = new controladorEstudiantes();
if (isset($_GET['id'])) {
    $row = $controlador->ver($_GET['id']);
} else {
    header('Location: index.php');
}
?>

<br><br>
<b>Cedula:</b> <?php echo $row['cedula']; ?>
<br><br>

<b>Nombre:</b> <?php echo $row['nombre']; ?>
<br><br>

<b>Apellido:</b> <?php echo $row['apellido']; ?>
<br><br>

<b>Edad:</b> <?php echo $row['edad']; ?>
<br><br>

<b>Teléfono:</b> <?php echo $row['telefono']; ?>
<br><br>

<b>Promedio:</b> <?php echo $row['promedio']; ?>
<br><br>