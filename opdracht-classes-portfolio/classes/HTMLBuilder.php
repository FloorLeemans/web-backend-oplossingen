<?php

class HTMLBuilder
{
	public $bodyString	=	'home';
	public $controller 	=   'home';

	public function __construct ($bodyString, $controller)
	{
		$this->bodyString 	=	$bodyString;
		$this->controller 	=   $controller;
	}

	public function HTMLConstruct()
	{
	    if (isset($_GET['page'])) 
	    {
	        switch ($_GET['page']) 
	        {
	            case 'contact':
	                $this->controller =   'contact';
	                break;
	        }
	    }

		include 'html/header.partial.php';

		switch ($this->controller) {
        case 'contact':
            $this->bodyString =   'contact';
            break;
        
        default:
            $this->bodyString =   'home';
            break;
    	}

    	include ('html/' . $this->bodyString . '.body.partial.php');
    	include 'html/footer.partial.php';
	}

}

?>