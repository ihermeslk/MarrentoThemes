<?php

class index {
	public $page;
	public function __construct(){
		$page = new page_site;
		$headerInterface = includeFile($_SESSION["interface"], PUBLICDIR .$_SESSION["load"]["interface"]["cssframework"]."/");
		$page->headersinclude = implode('', $headerInterface);
		$this->page = $page;
		return $this->page;
	}
	public function index(){
		$teste = '<div class="collection">
    <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
    <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
    <a href="#!" class="collection-item">Alan</a>
    <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
  </div>';
		$this->page->bodycontent = $teste;
		//$this->page->scriptsendpage = '$(".button-collapse").sideNav();';
		$this->page->render();
	}
}
?>
