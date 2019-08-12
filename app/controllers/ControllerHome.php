<?php

namespace App\controllers;

class ControllerHome extends Controller
{
	public function index()
	{
		$array_css = ['home.css']; // Array is used in layouts/header.php
		$array_js = ['home.js'];   // Array is used in layouts/footer.php
		$title = 'Home';           // Title is used in layouts/header.php

		$this->css = $array_css;
		$this->js = $array_js;
		$this->renderView("home", $title);
	}

}