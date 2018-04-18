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

            <form action="vid52-PDO.php" method="GET">  <!-- Aqui le indico en que base de datos tiene que buscar -->
                <h1>Log In</h1>
                <label>Buscar segun nombre: <input type="text" name="buscar"></label> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->
                <input type="submit" name="enviando" value="DALE!">


            </form>



    </body>


</html>