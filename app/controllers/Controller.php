<?php

namespace App\controllers;

class Controller
{
	protected $css; // Array CSS
	protected $js;  // Array JS

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    public function __get($value)
    {
        return $value;
    }

    /**
     * Renderiza uma view na tela.
     * @param $view  - Nome da view a ser renderizada.
     * @param $title - Titulo da página, que é visivel na página.
     * @param $param - Caso queira mandar algum valor para a view mostrar.
     */
    public function renderView($view, $title, $param = null)
    {
    	$css = $this->css; // Variavel fica visivel no header.
    	$js = $this->js;  // Variavel fica visivel no footer.

        require_once 'app/views/site/layouts/header.php';
        require_once 'app/views/site/' . $view . '.php';
        require_once 'app/views/site/layouts/footer.php';
    }

}
