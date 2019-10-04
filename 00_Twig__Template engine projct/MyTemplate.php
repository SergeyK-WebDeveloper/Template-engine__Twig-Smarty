<?php
class MyTemlate extends Twig_Template {
	
	public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);
    }
    
    public function getTemplateName() {
		
	}
    
    protected function doDisplay(array $context, array $blocks = array()) {
		
	}
	
	public function render(array $context) {
		print_r($context);
	}
}
?>