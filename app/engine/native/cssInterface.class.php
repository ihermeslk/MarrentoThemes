<?php
/*
Data criação: 14/03/2018
Autor: Daniel J. Santos
Ultima Alteração: 14/03/2018
*/
class cssInterface{
	public $convert;
	public function __construct(){
		$this->convert = $_SESSION["load"]["interface"]["cssframework"];
	}
	public function start(){
		switch ($this->convert) {
			case 'materializecss':
				$interfaceFiles = ['materialize.min.css', 'materialize.min.js'];
				$_SESSION["interface"] = $interfaceFiles;
				break;
			case 'bootstrap':
				$interfaceFiles = ['bootstrap.min.css', 'bootstrap-grid.min.css','bootstrap-reboot.min.css', 'jquery-3.2.1.min.js', 'bootstrap.min.js', 'bootstrap.bundle.min.js'];
				$_SESSION["interface"] = $interfaceFiles;
				break;
			case 'mdb':
				$interfaceFiles = ['bootstrap.min.js', 'jquery-3.2.1.min.js', 'mdb.min.js', 'popper.min.js', 'bootstrap.min.css', 'mdb.min.css', 'style.css'];
				$_SESSION["interface"] = $interfaceFiles;
				break;
			default:
				# code...
				break;
		}
	}
}
?>