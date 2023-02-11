<?php

include ROOT.'/models/ShopProducts.php';

// контроллер главной страницы
class MainPageController
{

	// метод главной страницы
	public static function actionIndex(){

		$popularShopProducts =  ShopProducts::getShopProducts(4);

		require(ROOT.'/views/main_page_tpl.php');// подкл. вид главной страницы

		return true;
	}

}