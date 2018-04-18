<!-- Formulario que busca en la base de datos. -->

<!DOCTYPE html>
<html>
    <head>
    <title>Formulario</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    
    
    <body>

    <!-- Formulario para que a partir de un nombre, me devuelva los datos por ejemplo -->
    <form action="video5802index.php" method="GET" >

    <div class="row">
        <div class="form-group col-xs-4">
        <label for="name">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="name">
        </div>
    </div>
    
    <div class="row">
        <input type="submit" name="send" class="btn btn-default" value="Buscar nombre en Tabla">
    </div>

    </form>

    </body>
</html>