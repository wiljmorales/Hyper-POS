<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario</title>
</head>

<body>
  <form action="" method="POST" id="form-inventario">
    <input type="text" name="producto" id="producto" placeholder="producto">
    <input type="text" name="cantidad" id="cantidad" placeholder="cantidad"><br>
    <button type="submit" name="incluir" id="incluir">Incluir</button>
    <button type="submit" name="modificar" id="modificar">Modificar</button>
  </form>
  <?php
  if (isset($datos_enviados)) {
    echo ($datos_enviados);
  }
  ?>
</body>

</html>