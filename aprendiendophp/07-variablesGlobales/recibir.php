<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecibirGet</title>
    <nav>
        <a href="index.php"> Index.php </a> 
        <br>
        <a href="formulario.php"> Formulario.php </a>
    </nav>
</head>
<body>
    <?php
        echo '<h1> Nombre: '.$_GET['nombre'].'</h1>';
        echo '<h1> Apellido: '.$_GET['apellido'].'</h1>';
        var_dump($_GET);

        echo '<h1> Nombre Post: '.$_POST['nombrePost'].'</h1>';
        echo '<h1> Apellido Post: '.$_POST['apellidoPost'].'</h1>';
        var_dump($_POST);
    ?>
</body>
</html>