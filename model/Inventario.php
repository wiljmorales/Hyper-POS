<?php

require_once 'model/Dato.php';

class Inventario extends Dato {
  public $producto;
  public $cantidad;

  function incluir(){
    $co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    try {
				$co->query("Insert into inventario(
					producto,
					cantidad
					)
					Values(
					'$this->producto',
					'$this->cantidad'
					)");
					return "Registro incluido";
		} catch(Exception $e) {
			return $e->getMessage();
		}   
	}
	
	// function modificar(){
	// 	$co = $this->conecta();
	// 	$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	try {
	// 			$co->query("Update usuarios set 
	// 				usuario = '$this->usuario',
  //         clave = '$this->clave',
  //         correo = '$this->correo',
  //         telefono = '$this->telefono',
  //         direccion = '$this->direccion'
  //         where cedula = '$this->cedula'");
	// 				return "Registro modificado";
	// 	} catch(Exception $e) {
	// 		return $e->getMessage();
	// 	}
	// }
}