<?php

require_once 'model/Inventario.php';

if (is_file("view/" . $page . ".php")) {
  
  $inventario = new Inventario();
  
  if(isset($_POST['incluir'])){
    $inventario->producto = $_POST['producto'];
    $inventario->cantidad = $_POST['cantidad'];
    echo $inventario->incluir();
    $datos_enviados = "USTED DESEA INCLUIR <br/>".$_POST['cantidad']."  ".
    $_POST['producto'];  
  
  }
  elseif(isset($_POST['modificar'])){
    $datos_enviados = "USTED DESEA MODIFICAR <br/>".$_POST['cantidad']."  ".
    $_POST['producto'];  
  }
  require_once("view/" . $page . ".php");
} else {
  echo "VISTA EN CONSTRUCCIÓN";
}
