<?php


// контроллер главной страницы каталога
class CatalogController
{

	// метод главной страницы каталога
	public static function actionIndex(){

		require(ROOT.'/views/catalog_tpl.php'); // подкл. шаблон главной страницы каталога

		return true;
	}

}