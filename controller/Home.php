<?php

if (is_file("view/" . $page . ".php")) {
  require_once("view/" . $page . ".php");
} else {
  echo "VISTA EN CONSTRUCCIÓN";
}
