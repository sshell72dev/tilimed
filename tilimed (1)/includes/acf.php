<?
	#добавляем страницу всех настроек
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page([
		'page_title' 	=> 'Все настройки',
		'menu_title'	=> 'Все настройки',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
		]);
	}
?>
