<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <title>Document</title>
</head>
<body>
<?php

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$matricula = $_POST ["matricula"];
$carrera = $_POST ["carrera"];

// echo "Mi Nombre es:". "<h2>".$nombre."&nbsp".$apellido."</h2>";
?>

<table class = "credencial">
<tr>
  <td rowspan="3" class="fotocredencial">1</td>
  <td class="nombrecredencial">
    <?php
    echo $nombre."&nbsp;".$apellido;
    ?>
  </td>
</tr>

<tr>
  <td class="nombrecredencial">
    <?php
    echo $matricula;
    ?>
  </td>
</tr>

<tr>
  <td class="carreracredencial">
    <?php
    echo $carrera;
    ?>
  </td>
</tr>


</>

</body>
</html>