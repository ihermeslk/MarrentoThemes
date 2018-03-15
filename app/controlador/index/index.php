<?php

class index {
	public $page;
	public function __construct(){
		$page = new page_site;
		$headerInterface = includeFile($_SESSION["interface"], PUBLICDIR .$_SESSION["load"]["interface"]["cssframework"]."/");
		$page->headersinclude = implode('', $headerInterface).'<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
		$this->page = $page;
		return $this->page;
	}
	public function index(){
		$teste = '';
		$this->page->bodycontent = $teste;
		$this->page->scriptsendpage = '';
		$this->page->render();
	}
}
?>
