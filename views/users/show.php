<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del usuario</title>
</head>
<body>
    <h1>Detalles del usuario</h1>

    <p>ID: <?= $user->id ?></p>
    <p>Nombre: <?= $user->name ?></p>
    <p>Email: <?= $user->email ?></p>
    <p>Edad: <?= $user->age ?></p>

    <br>
    <a href="index.php?action=edit&id=<?= $user->id ?>">Editar</a> 
    <a href="index.php">Volver a la lista</a>
</body>
</html>
