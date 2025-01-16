<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <nav>
        <a href="formulario.php"> Formulario.php </a> 
        <br>
        <a href="recibir.php"> Recibir.php </a>
    </nav>
</head>
<body>
    
    <?php
    //variables superglobales

    //variables de servidor
    echo '<h1> ADDR: '.$_SERVER['SERVER_ADDR'].'</h1>';
    echo '<h1> PORT: '.$_SERVER['SERVER_PORT'].'</h1>';
    echo '<h1> ADMIN: '.$_SERVER['SERVER_ADMIN'].'</h1>';
    echo '<h1> NAME: '.$_SERVER['SERVER_NAME'].'</h1>';
    echo '<h1> PROTOCOL: '.$_SERVER['SERVER_PROTOCOL'].'</h1>';
    echo '<h1> SIGNATURE: '.$_SERVER['SERVER_SIGNATURE'].'</h1>';
    echo '<h1> SOFTWARE: '.$_SERVER['SERVER_SOFTWARE'].'</h1>';
    echo '<h1> USER AGENT:'.$_SERVER['HTTP_USER_AGENT'].'</h1>';
    echo '<h1> IP REMOTA: '.$_SERVER['REMOTE_ADDR'].'</h1>';
     ?>
     
</body>
</html>