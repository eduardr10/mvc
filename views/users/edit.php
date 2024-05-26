<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar usuario</h1>

    <form method="post">
        <input type="hidden" name="id" value="<?= $user->id ?>">

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="<?= $user->name ?>" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $user->email ?>" required>

        <br>
        
        <label for="age">Edad:</label>
        <input type="number" id="age" name="age" value="<?= $user->age ?>" min="12" max="60" required>

        <br>

        <button type="submit" name="submit">Actualizar</button>
    </form>
</body>
</html>
