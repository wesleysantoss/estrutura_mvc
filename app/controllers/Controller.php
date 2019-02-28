<?php

class Controller
{
	protected $array_css; // Array de CSS que a página vai receber.
	protected $array_js;  // Array de JS que a página vai receber.

	/**
	* Gets e setters
	*/
	public function setCss($array_css)
    {
    	$this->array_css = $array_css;
    }

    public function setJs($array_js)
    {
    	$this->array_js = $array_js;
    }

    public function getCss()
    {
    	return $this->array_css;
    }

    public function getJs()
    { 
    	return $this->array_js;
    }

    /**
     * Renderiza uma view na tela.
     * @param $view  - Nome da view a ser renderizada.
     * @param $title - Titulo da página, que é visivel na página.
     * @param $param - Caso queira mandar algum valor para a view mostrar.
     */
    public function renderSite($view, $title, $param = '')
    {
    	$css = $this->getCss(); // Variavel fica visivel no header.
    	$js  = $this->getJs();  // Variavel fica visivel no footer.

        require_once 'app/views/site/layouts/header.php';
        require_once 'app/views/site/' . $view . '.php';
        require_once 'app/views/site/layouts/footer.php';
    }

}
