<?php


// контроллер страницы контактов
class ContactsController
{

	// метод страницы контактов
	public static function actionIndex(){

		require(ROOT.'/views/contacts_tpl.php');

		return true;
	}
}