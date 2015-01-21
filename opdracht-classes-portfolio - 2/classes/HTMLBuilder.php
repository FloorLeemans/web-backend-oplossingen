<?php

class HTMLBuilder
{

	public $header 	=	'';
	public $body 	=	'';
	public $footer 	=	'';

	public function __construct ($header, $body, $footer)
	{
		$this->header 	=	$header;
		$this->body 	=	$body;
		$this->footer 	=	$footer;
	}

	public function buildHeader()
	{
		include 'html/' . $this->header;
	}

	public function buildBody()
	{

	}

	public function buildFooter()
	{
		include 'html/footer.partial.php';
	}


}

?>