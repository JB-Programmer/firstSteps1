<!DOCTYPE html>
<html>
<!-- Objetivo: insertar registro en base de datos desde web -->
<!-- Metodo get, formulario en el que meto un valor y me lo busca en una base de datos
almacenada en vid52pdo.php
 -->
    <head>
        
        <meta charset="utf-8">
        <title>Buscador de productos de una base de datos</title>

    </head>


    <body>

            <form action="vid56insertarRPDO.php" method="GET">  <!-- Aqui le indico en que base de datos tiene que buscar -->
                <label>NIF: <input type="text" name="formNIF"></label> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->
                <label>Nombre: <input type="text" name="formNombre"></label> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->
                <label>Apellido: <input type="text" name="formApellido"></label> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->
                <label>Edad: <input type="text" name="formEdad"></label> <!--  El name es muy importante aqui ya que es lo que hace efecto en el post -->

                <input type="submit" name="enviando" value="DALE!">


            </form>



    </body>


</html>