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

	// метод работы с детальным просмотром одного товара
	public static function actionView($productId){

		$shopProduct = ShopProducts::getShopProductById($productId);
		Helper::d($shopProduct);

		$title = $shopProduct['title'];

		// редактируем текст описания
		$shopProduct['short_description'] = trim(str_replace("\r\n", '', $shopProduct['short_description']));
		$shopProduct['description'] = trim(str_replace("\r\n", '</p><p class="tabbed-content-text">', $shopProduct['description']));


		require(ROOT.'/views/single-product_tpl.php');

		return true;
	}
}