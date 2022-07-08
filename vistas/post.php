<?php 
    require "../utils/autoload.php";

   /*  if(isset($_SESSION['autenticado']))
        header("Location: /");
        $userpost=. $_SESSION['nombreUsuario']; no se como pasar este valor como usuario*
        no se si es /*usuario=$userpost;*//
        if(isset($_SESSION['autenticado'])){
            echo "Bienvenido " . $_SESSION['nombreUsuario'];

        
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
    <h1></h1>
    
    <form action="/login" method="post">
    
        Inserte el usuario <input type="text" name="usuario"> <br />  
        Inserte el texto <input type="text" name="cuerpo"> <br />
        Fecha <input type=date('d-m-y h:i:s') name="fyh"> <br />
        <input type="submit" value="Postear">
        
    </form>

    
    <?php if(isset($parametros['error']) && $parametros['error'] === true ) :?>
        <div style="color: red;">Error al crear el post.</div>
    <?php endif;?>

    
</body>
</html>