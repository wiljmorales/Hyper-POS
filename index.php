<?php

$page = 'Home';

if (!empty($_GET['page'])) {
  $page = $_GET['page'];
}


if (is_file("controller/" . $page . ".php")) {
  require_once("controller/" . $page . ".php");
} else {
  echo "PAGINA EN CONSTRUCCIÓN";
}
