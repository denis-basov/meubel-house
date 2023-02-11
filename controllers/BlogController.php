<?php


// контроллер главной страницы блога
class BlogController
{

	// метод главной страницы блога
	public static function actionIndex(){

		require(ROOT.'/views/blog_tpl.php'); // подкл. шаблон главной страницы блога

		return true;
	}
}