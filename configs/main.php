<?php
/*
|--------------------------------------------------------------------------
| Главный файл конфигурации
|--------------------------------------------------------------------------
|
| Указаны основые данны для работы с системой
| Есть возможность подключить сторонние конфигурационные файлы
|
*/
return [

	// Режим откладки, рекомендуеться использовать во время разработки
	'debug_mode'	=>		true,

	// URL вашего сайта.
	// Будет использовано при формировании URL адреса
	'url'			=>		'http://example.com/',
	
	// Ключ приложения
	// Будет использоват в шифровке данных
	'app_key'		=>		"empty",

	// Данные Базы Данных
	'db'			=>		[
		
		// Драйвер для работы с БД.
		// По умолчанию MySQL (mysqli).
		'driver'		=>		'mysql',

		// Тип СУБД.
		// По умолчанию поддерживается только СУБД MySQL (mysql).
		'type'			=>		'mysql',
		
		// Хост БД.
		// Пример: localhost, 127.0.0.1, db.example.com и пр.
		'hostname'		=>		'localhost',
		
		// Имя пользователя СУБД.
		'username'		=>		'root',
		
		// Пароль пользователя СУБД.
		'password'		=>		'',
		
		// Название БД.
		'database'		=>		'myucp',

		// Испльзуемая кодировка
		'charset'   	=> 		'utf8',
		
	],

    //Список пользовательских файлов для загрузки
    'load_files'          =>      [
        "app/helpers/Custom.php",
    ],
];