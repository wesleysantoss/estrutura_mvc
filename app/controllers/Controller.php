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
     * @param $view  - Caminho da view a ser renderizada.
     * @param $title - Titulo da página, que é visivel na página app/views/frontend/site/layouts/header.php
     * @param $param - Caso queira mandar algum valor para a view mostrar.
     */
    public function renderSite($view, $title, $param = false)
    {
    	$css = $this->getCss();
    	$js  = $this->getJs();

        require_once 'app/views/frontend/site/layouts/header.php';
        require_once 'app/views/frontend/site/' . $view . '.php';
        require_once 'app/views/frontend/site/layouts/footer.php';
    }

}
