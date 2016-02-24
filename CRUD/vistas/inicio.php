<?php
$controlador = new controladorEstudiantes();
$resultado = $controlador->index();
?>

<h1>Pagina de Inicio</h1>

<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Promedio</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysql_fetch_array($resultado)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['cedula']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['promedio']; ?></td>
                <td>
                    <a href="?cargar=ver&id=<?php echo $row['id']; ?>">Ver</a>
                    <a href="?cargar=editar&id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="?cargar=eliminar&id=<?php echo $row['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


