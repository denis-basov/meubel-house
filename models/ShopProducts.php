<?php

// модель для работы с таблицей shop_products
class ShopProducts
{

	// метод получает все товары из таблицы
	public static function getAllShopProducts(){
		$pdo = DBConnect::getConnection();

		return $pdo->query("SELECT * FROM shop_products ORDER BY title DESC")->fetchAll(PDO::FETCH_ASSOC);
	}

}