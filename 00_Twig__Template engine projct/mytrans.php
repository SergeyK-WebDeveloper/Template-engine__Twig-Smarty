<?php


class mytrans extends Symfony\Component\Translation\Translator {
	
	public function __construct($locale, MessageSelector $selector = null, $cacheDir = null, $debug = false)
    {
       parent::__construct();
    }
}
	

?>