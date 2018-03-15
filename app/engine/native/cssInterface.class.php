<?php
/*
Data criação: 14/03/2018
Autor: Daniel J. Santos
Ultima Alteração: 14/03/2018
*/
class cssInterface{
	public function __construct(){

	}
	public function start(){
		$convert = $_SESSION["load"]["interface"]["cssframework"];
		switch ($convert) {
			case 'materializecss':
			$interfaceFiles = ['materialize.min.css', 'materialize.min.js'];
			return $interfaceFiles;
				break;
			
			default:
				# code...
				break;
		}
	}
}
?>