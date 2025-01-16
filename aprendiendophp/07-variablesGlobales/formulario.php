<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
    <nav>
        <a href="index.php"> Index.php </a> 
        <br>
        <a href="recibir.php"> Recibir.php </a>
    </nav>
</head>
<body>
    <h1>Formulario en PHP con GET</h1>
    <form action="recibir.php" method="GET">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </p>
        <p>
            <input type="submit" value="enviar">
        </p>
        
    </form>

    <h1>Formulario en PHP con POST</h1>
    <form action="recibir.php" method="POST">
        <p>
            <label for="nombrePost">Nombre</label>
            <input type="text" name="nombrePost">
        </p>
        
        <p>
            <label for="apellidoPost">Apellido</label>
            <input type="text" name="apellidoPost">
        </p>
        <p>
            <input type="submit" value="enviar">
        </p>
        
    </form>
</body>
</html>