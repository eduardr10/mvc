<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear nuevo usuario</title>
</head>
<body>
    <h1>Crear nuevo usuario</h1>

    <form method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <br>
        
        <label for="age">Edad:</label>
        <input type="number" id="age" name="age" min="12" max="60" required>

        <br>

        <button type="submit" name="submit">Crear</button>
    </form>
</body>
</html>
