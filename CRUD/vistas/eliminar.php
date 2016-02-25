<?php

$controlador = new controladorEstudiantes();
if (isset($_GET['id'])) {
    $row = $controlador->ver($_GET['id']);
} else {
    header('Location: index.php');
}

if(isset($_POST['enviar'])){
    $controlador->eliminar($_GET['id']);
    header('Location: index.php');         
}
?>


Usted de verdad quiere eliminar al estudiante <?php  echo $row['nombre']." ". $row['apellido']?>
<br><br>
<form action="" method="POST">
    <input type="submit" name="enviar" value="Eliminar">
</form>
