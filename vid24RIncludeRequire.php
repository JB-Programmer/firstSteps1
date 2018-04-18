<!DOCTYPE html>
<html>
<head>
    <title>POO videos 22, 23.</title>
    <meta charset = "utf-8">
</head>

<body>

<?php

       include('vid24ReutilizadClases.php');

       $mazda = new Coche();

       $pegaso = new Camion();

       echo($mazda->ruedas);

       echo "<br>";

       echo "El pegaso tiene ".$mazda->ruedas." ruedas.";
?>

</body>
</html>