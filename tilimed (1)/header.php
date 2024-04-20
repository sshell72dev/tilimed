<?php global $options, $get_template_directory_uri, $str1, $str_format1, $str2, $str_format2, $get_queried_object, $posts_per_page,$val_arr, $soczseti;
	
	/**
		* The header for our theme
		*
		* This is the template that displays all of the <head> section and everything up until <div id="content">
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package eastlineseven
	*/
	
	$get_template_directory_uri = get_template_directory_uri();
	$get_queried_object = get_queried_object();
	$options = get_fields('options');
	$str1 = strval($options['contacts_phone']);
	$str_format1 = '+7 '.substr($str1, 0, 3).' '.substr($str1, 3, 3).'-'.substr($str1, 6, 2).'-'.substr($str1, 8, 2);
	/* 	$str2 = strval($options['contacts_phone_2']);
		$str_format2 = '8 ('.substr($str2, 0, 3).') '.substr($str2, 3, 3).'-'.substr($str2, 6, 2).'-'.substr($str2, 8, 2);
		$soczseti = $options['soczseti'];
	$posts_per_page = get_option('posts_per_page'); */
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<? if (!gpsiChecker()) {
			
			wp_head();
			echo $options['counters_code_header'];
		} 
		?>	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572608838">
	</head>
	<body>
		<div class="site"><!-- Header Section  -->
			<header class="header">
				<div class="container">
					<div class="header__wrapper"><a class="header__logo logo" href="/"><img class="logo__img" src="<?=$get_template_directory_uri?>/template-tilimed/logo.svg" alt="logo" width="175" height="60"></a>
						<div class="header__navbar">
							<nav class="header__menu"><a class="header__link" href="/analyzes.html">Анализы</a><a class="header__link" href="/maps.html">Карта лабораторий</a><a class="header__link" href="/faq.html">Вопрос-ответ</a><a class="header__link" href="/instructions.html">Инструкции</a><a class="header__link" href="/about.html">База знаний</a>
							</nav>
							<div class="header__actions"><a class="btn btn--blue" href="/authorization.html"><span>Войти</span>
								<svg class="btn__icon">
									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#small-arrow-right"></use>
								</svg></a><a class="btn btn--basket" href="/basket.html">
								<svg>
									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket"></use>
								</svg></a></div>
						</div>
						<button class="btn header__burger js-burger" type="button"></button>
					</div>
					<div class="mobile-menu">
						<div class="container">
							<div class="mobile-menu__picture">
								<div class="gallery__items">
									<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-9.jpg" alt="ALT" loading="lazy"/></div>
									<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-1.jpg" alt="ALT" loading="lazy"/></div>
									<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-10.jpg" alt="ALT" loading="lazy"/></div>
									<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-11.jpg" alt="ALT" loading="lazy"/></div>
								</div>
							</div>
							<div class="mobile-menu__content"><a class="mobile-menu__logo logo" href="/"><img class="logo__img" src="<?=$get_template_directory_uri?>/template-tilimed/logo.svg" alt="logo" width="175" height="60"></a>
								<div class="mobile-menu__block">
									<nav class="mobile-menu__nav"><a class="mobile-menu__link" href="/analyzes.html">Анализы</a><a class="mobile-menu__link" href="/maps.html">Карта лабораторий</a><a class="mobile-menu__link" href="/faq.html">Вопрос-ответ</a><a class="mobile-menu__link" href="/instructions.html">Инструкции</a><a class="mobile-menu__link" href="/about.html">База знаний</a><a class="mobile-menu__link mobile-menu__basket" href="/basket.html">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket"></use>
										</svg></a>
										</nav><a class="btn btn--blue mobile-menu__btn" href="/authorization.html"><span>Войти</span>
										<svg class="btn__icon">
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#small-arrow-right"></use>
										</svg></a>
										<button class="btn btn__close js-burger-close" type="button"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>						