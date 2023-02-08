<?php

// контроллер главной страницы
class MainPageController
{

	// метод главной страницы
	public static function actionIndex(){

		require(ROOT.'/views/main_page_tpl.php');// подкл. вид главной страницы

		return true;
	}

}