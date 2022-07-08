<?php 
    require "../utils/autoload.php";

    if(isset($_SESSION['autenticado'])){
        echo "Bienvenido " . $_SESSION['nombreUsuario'];
        echo "<br /><a href='/cerrarSesion'>Salir</a>";

    <form action="../post.php">
    <input type="submit" value="Ver posts"/>
</form>
    }
    else 
        header("Location: /login");
