<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        include('conexion.php')
    ?>
    <h1>Vinos Baja Cheers</h1>
    <ul>
    <li>
        <a href="index.php">Inicio</a>
    </li>
    <li>
        <a href="formulario.php">Formulario</a>
    </li>
    </ul>
    <form action="store.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="tipo">Tipo</label>
        <select name="tipo">
            <option value="Vino_tinto">Tinto</option>
            <option value="Vino_rosado">Rosado</option>
            <option value="Vino_blanco">Blanco</option>
            <option value="Vino_espumoso">Espumoso</option>
        </select>
        <br>
        <label for="Vinedo">Viñedo:</label>
        <input type="text" name="vinedo">
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>