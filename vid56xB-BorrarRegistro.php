<!DOCTYPE html>
<html>
<!-- Objetivo: Borrar registro. Voy a borrar los que tengan cierta edad -->
<!-- Metodo get, formulario en el que meto un valor y me lo busca en una base de datos
almacenada en vid52pdo.php
 -->
    <head>
        
        <meta charset="utf-8">
        <title>Buscador de productos de una base de datos</title>

    </head>


    <body>

            <form action="vid56xB-phpborrarRegisro.php" method="GET">  <!-- Aqui le indico en que base de datos tiene que buscar -->
                <label>Edad: <input type="text" name="formEdad"></label> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->

                <input type="submit" name="enviando" value="Borrar!">


            </form>



    </body>


</html>