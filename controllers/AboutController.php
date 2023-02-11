<?php

// контроллер страницы "О нас"
class AboutController
{
	// метод страницы "О нас"
	public static function actionIndex(){

		require(ROOT.'/views/about_tpl.php'); // подкл. шаблон страницы "О нас"

		return true;
	}
}