<?php

// модель для работы с таблицей shop_products
class ShopProducts
{

	// метод получает все товары из таблицы
	public static function getAllShopProducts(){
		$pdo = DBConnect::getConnection();

		return $pdo->query("SELECT * FROM shop_products ORDER BY title DESC")->fetchAll(PDO::FETCH_ASSOC);
	}

	// метод получает указанное кол-во товаров из таблицы
	public static function getShopProducts($count){
		$pdo = DBConnect::getConnection();

		return $pdo->query("SELECT * FROM shop_products 
																	ORDER BY price DESC 
																	LIMIT $count ")
							 ->fetchAll(PDO::FETCH_ASSOC);
	}

	// получение одного товара по ID
	public static function getShopProductById($productId){
		$pdo = DBConnect::getConnection();

		return $pdo->query("SELECT * FROM shop_products 
																	WHERE id=$productId")
							 ->fetch(PDO::FETCH_ASSOC);
	}


}