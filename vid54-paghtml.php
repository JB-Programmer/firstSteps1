<!DOCTYPE html>
<html>
<!-- Metodo get, formulario en el que meto un valor y me lo busca en una base de datos
almacenada en vid52pdo.php
 -->
    <head>
        
        <meta charset="utf-8">
        <title>Buscador de productos de una base de datos</title>

    </head>


    <body>

            <form style="margin=auto" action="vid54marcadoresArrayAsociativo.php" method="GET">  <!-- Aqui le indico en que base de datos tiene que buscar -->
            <table>    
                Nombre: <input type="text" name="nombre"><br> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->
                Edad: <input type="text" name="Edad"> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->
                <input type="submit" name="enviando" value="DALE!">


            </form>



    </body>


</html>