<?php

	//* Добавляем какое то действие. Первым аргументом мы добавляем какой то хук а вторым вызываемую функцию
	add_action('wp_enqueue_scripts', 'childhood_styles');
	add_action('wp_enqueue_scripts', 'childhood_scripts');

	function childhood_styles() {
		//* Подключение основного файла css который уже отслеживает wordpress. Первым аргументом мы задаем id этого файла
		wp_enqueue_style('childhood-style', get_stylesheet_uri());

		// *Подключение внешного стиля. Что бы не писать полный путь, получаем путь до папки темы с помощью функции
		//* Функция дает нам путь до темы и через точку конкатинируем с оставшимся путем
		// wp_enqueue_style('button-style', get_template_directory_uri() . '/assets/styles/buttons.css');	
	}

	function childhood_scripts() {
		// wp_enqueue_scripts(name_id, path, dependencies_array, version, in_footer);
		wp_enqueue_script	('childhood-script', get_template_directory_uri() . '/assets/js/main.min.js',	array(), null, true);
	}

	add_theme_support('custom-logo');
?>