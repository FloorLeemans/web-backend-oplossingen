<?php

    function __autoload($classname) 
    {
        $filename = 'classes/'. $classname .'.php';
        include_once($filename);
    }

$webPage       =   new HTMLBuilder ('home', 'home');

echo $webPage->HTMLConstruct();

?>