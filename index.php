<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Incidentes</title>
</head>
<body>
    <section>
        <form action="insertar.php" method="POST" class="w-1/2 mx-auto shadow-lg px-12 py-12 rounded-lg bg-white">
        <div class="flex flex-col">
        <h1 class="text-5xl font-bold mb-12 text-center">Incidentes</h1>
      </div>
      <div class="flex flex-col mb-4">
        <label for="fecha" class="font-bold text-lg">Fecha</label>
        <input class="rounded-sm px-8 py-2 border" type="date" name="fecha" >
      </div>
      <div class="flex flex-col mb-4">
        <label for="descripcion" class="font-bold text-lg">Descripcion del incidente</label>
        <input class="rounded-sm px-8 py-2 border" type="text" name="descripcion" >
      </div>
      <div class="flex flex-col mb-4">
        <label for="name" class="font-bold text-lg">Nombre de quien reporta</label>
        <input class="rounded-sm px-8 py-2 border" type="text" name="name" >
      </div>
      <div class="flex flex-col mb-4">
        <label for="acciones" class="font-bold text-lg">Acciones tomadas en el incidente</label>
        <input class="rounded-sm px-8 py-2 border" type="text" name="acciones" >
      </div>
      <div class="flex mt-8 justify-end">
        <button class="bg-green-500 text-white font-bold rounded-sm py-3 px-8 mx-2" type="submit">Insertar</button>
        <button class="bg-red-500 text-white font-bold rounded-sm py-3 px-8 mx-2" type="reset">Limpiar</button>
      </div>
    </form>
  </div>
</section>

<section class="my-8">
  <div class="container mx-auto px-4">
    <?php
    $query ="SELECT * FROM incidentes";
    $resultado = $con->query($query);
    //VALIDAMOS LA EJECUCION DE LA SENTENCIA
    if(!$resultado){
      echo 'Error';
    }
    ?>
    <div id="tabla-master" class="block">
      <table class="border-separate border bg-white border-green-800">
        <thead class="">
        <tr class=" ">
          <th class="w-2/12 text-center">Fecha</th>
          <th class="w-3/12 text-center">Descripcion</th>
          <th class="w-2/12 text-center">Nombre de quien reporta</th>
          <th class="w-3/12 text-center">Acciones tomadas</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($fila = $resultado->fetch_assoc()){
          ?>
          <tr class="">
            <td class="w-1/12"><?php echo $fila['Id']; ?></td>
            <td class="w-2/12"><?php echo $fila['Fecha']; ?></td>
            <td class="w-1/5"><?php echo $fila['Descripcion']; ?></td>
            <td class="w-1/12"><?php echo $fila['Nombre']; ?></td>
            <td class="w-1/12"><?php echo $fila['Acciones']; ?></td>
            </td>

          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</section>