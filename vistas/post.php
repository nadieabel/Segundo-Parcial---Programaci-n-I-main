<?php 
    require "../utils/autoload.php";

     if(isset($_SESSION['autenticado']))
        header("Location: /");
        $userpost=. $_SESSION['nombreUsuario'];
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
    <h1>Fabrica de Chacinados - Bienvenido</h1>
    
    <form action="/login" method="post">
        Inserte el texto <input type="text" name="usuario"> <br />
        Fecha <input type=date('d-m-y h:i:s') name="FyH"> <br />
        <input type="submit" value="Iniciar Sesión">
    </form>

    
    <?php if(isset($parametros['error']) && $parametros['error'] === true ) :?>
        <div style="color: red;">Credenciales invalidas.</div>
    <?php endif;?>

    
</body>
</html>