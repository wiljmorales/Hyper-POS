<?php 

require_once 'model/Inventario.php';

$inventario = new inventario ();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario</title>
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/inventario.css">
</head>

<body>

  <header class="header">
    <img src="img/LOGO DE KAIROS.png" alt="logo Kairos" class="header-img">
    <h1 class="header-title">Inventario</h1>
    <div class="header-menu">Menu</div>
  </header>
  <section class="menu-inventario">
    <div class="search-container">
      <input type="text" class="search-bar" placeholder="Buscar...">
      <div class="search-options-container">
        <input type="checkbox" id="id" name="id" value="id">
        <label for="id">ID</label>
        <input type="checkbox" name="proveedor" id="proveedor" value="proveedor">
        <label for="proveedor">Proveedor</label>
        <input type="checkbox" name="nombre" id="nombre" value="nombre">
        <label for="nombre">Nombre</label>
      </div>
    </div>
    <div class="actions-container">
      <a href="#modal" class="show-modal">Agregar Porducto</a>
      <a href="#modal" class="show-modal">Imprimir</a>
    </div>
  </section>

  <section class="table-section">
    <div class="table-container">
      <table class="inventario-table">
        <thead>
          <tr class="table-header">
            <th>ID</th>
            <th>Producto</th>
            <th>Proveedor</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php echo $inventario->consultar(); ?>
        </tbody>
      </table>
    </div>
  </section>

  <div id="modal" class="modal">
    <div class="content-modal">
      <header>
        <a href="#" class="close-modal">X</a>
        <h2>Agregar al Inventario</h2>
        <article>
          <form action="" method="POST" id="form-inventario">
            <input type="text" name="producto" id="producto" placeholder="producto">
            <input type="text" name="precio" id="precio" placeholder="precio">
            <select name="moneda" id="moneda">
              <option value="dolares">$</option>
              <option value="bolivares">BsS</option>
            </select><br>
            <input type="text" name="proveedor" id="proveedor" placeholder="proveedor">
            <input type="text" name="cantidad" id="cantidad" placeholder="cantidad">
            <select name="medida" id="medida">
              <option value="peso">peso</option>
              <option value="litros">litros</option>
              <option value="unidades">unidades</option>
            </select><br>
            <button type="submit" name="incluir" id="incluir">Incluir</button>
            <a href="#" class="close-modal-buttom">Cancelar</a>
          </form>
          <?php
          if (isset($datos_enviados)) {
            echo ($datos_enviados);
          }
          ?>
        </article>
      </header>
    </div>
    <a href="#" class="btn-close-modal"></a>
  </div>
</body>

</html>