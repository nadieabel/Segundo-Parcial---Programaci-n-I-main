<?php 
    require "../utils/autoload.php";

     if(isset($_SESSION['autenticado']))
        header("Location: /");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al registro</h1>
    
    <form action="/login" method="post">
        Usuario <input type="text" name="usuario"> <br />
        Password <input type="password" name="password"> <br />
        Nombre Completo  <input type="text" name="nombrecompleto"><br />
        <input type="submit" value="Registrarte">
    </form>


    
    <?php if(isset($parametros['error']) && $parametros['error'] === true ) :?>
        <div style="color: red;">Registro erroneo.</div>
    <?php endif;?>

    
</body>
</html>