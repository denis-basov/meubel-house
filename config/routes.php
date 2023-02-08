<?php

return [
  'news/([0-9]+)' => 'news/view/$1',
  'news' => 'news/index',

	'contacts' => 'contacts/index', // ContactsController & actionIndex - страница контактов

	'catalog' => 'catalog/index', // CatalogController & actionIndex - главная страница каталога

	'' => 'mainPage/index', // MainPageController & actionIndex - главная страница
];