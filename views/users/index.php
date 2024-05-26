<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="views/users/css/style.css">
</head>
<body>
    <h1>Lista de usuarios</h1>
    <?php
        if(count($users)){
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><a href="index.php?action=show&id=<?= $user['id'] ?>"><?= $user['name'] ?></a></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['age'] ?></td>
                    <td>
                        <!-- <a href="index.php?action=edit&id=<?= $user['id'] ?>">Editar</a> | -->
                        <a href="index.php?action=delete&id=<?= $user['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
                $i++; 
                endforeach; 
            ?>
        </tbody>
    </table>
    <?php
        }
        else{
            echo "No hay usuarios registrados";
        }
    ?>

    <br>

    <a href="index.php?action=create">Crear nuevo usuario</a>
</body>
</html>
