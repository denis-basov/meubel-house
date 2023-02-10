<?php

include ROOT.'/models/ShopProducts.php';

// контроллер главной страницы каталога
class CatalogController
{

	// метод главной страницы каталога
	public static function actionIndex(){

		$shopProducts = ShopProducts::getAllShopProducts(); // получаем все товары

		require(ROOT.'/views/catalog_tpl.php'); // подкл. шаблон главной страницы каталога

		return true;
	}

}