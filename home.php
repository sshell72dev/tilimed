<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Главная страница</title><!-- Styles Section  -->
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
			</header><!-- Main Section  -->
			<main class="main">
				<?php
					include(locate_template('template-tilimed/blocks/home/hero.php'));
					include(locate_template('template-tilimed/blocks/home/facilities.php'));
					include(locate_template('template-tilimed/blocks/home/about.php'));
					include(locate_template('template-tilimed/blocks/home/thesis.php'));
					include(locate_template('template-tilimed/blocks/home/map.php'));
				?>
			</main><!-- Footer Section  -->
			<footer class="footer">
				<div class="container">
					<div class="footer__top">
						<nav class="footer__nav">
							<div class="footer__nav-item">
								<h3 class="footer__nav-title">Главная</h3>
								<div class="footer__nav-lists"><a class="js-to-anchor footer__nav-link" href="#facilities.html">Удобства</a><a class="js-to-anchor footer__nav-link" href="#jobs.html">Как мы работаем</a><a class="js-to-anchor footer__nav-link" href="#doctors.html">Наши врачи</a><a class="js-to-anchor footer__nav-link" href="#map.html">Карта лабораторий</a>
								</div>
							</div>
							<div class="footer__nav-item">
								<h3 class="footer__nav-title">Анализы</h3>
								<div class="footer__nav-lists"><a class="footer__nav-link" href="#analyzes.html">Качественные
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-right"></use>
									</svg></a><a class="footer__nav-link" href="#analyzes.html">Количественные
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-right"></use>
									</svg></a>
								</div>
							</div>
							<div class="footer__nav-item">
								<h3 class="footer__nav-title">Дополнительно</h3>
								<div class="footer__nav-lists"><a class="footer__nav-link" href="/instructions.html">Инструкции</a><a class="footer__nav-link" href="/about.html">База знаний</a><a class="footer__nav-link" href="/faq.html">Вопрос-ответ</a>
								</div>
							</div>
							<div class="footer__nav-urls">
								<div class="footer__nav-url"><a class="footer__nav-link footer__nav-underline" href="policy.html">Политика конфиденциальности</a></div>
								<div class="footer__nav-url"><a class="footer__nav-link footer__nav-underline" href="cookie.html">Политика использования cookie</a></div>
								<div class="footer__nav-url"><a class="footer__nav-link footer__nav-underline" href="offers.html">Договор оферты</a></div>
								<div class="footer__nav-url"><a class="footer__nav-link footer__nav-underline" href="licenses.html">Лицензии</a></div>
								<div class="footer__nav-url"><a class="footer__nav-link footer__nav-underline" href="rules.html">Правила оплаты</a></div>
								<div class="footer__nav-url"><a class="footer__nav-link footer__nav-underline" href="return.html">Возврат</a></div>
							</div>
						</nav>
						<div class="footer-contact">
							<div class="footer-contact__mobile"><a class="btn btn--darkBLue" href="">Связь с нами
								<svg>
									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#phone-circle"></use>
								</svg></a>
								<div class="footer-contact__lists"><a class="footer-contact__icon" href="mailto:">
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#mail"></use>
									</svg></a><a class="footer-contact__icon" href="#">
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#telegram"></use>
									</svg></a><a class="footer-contact__icon" href="#">
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#vk"></use>
									</svg></a><a class="footer-contact__icon" href="#">
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#instagram"></use>
									</svg></a>
								</div>
							</div>
							<div class="footer-contact__desktop">
								<div class="footer-contact__social">
									<div class="footer-contact__title">Социальные сети</div>
									<div class="footer-contact__lists"><a class="footer-contact__icon" href="#">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#telegram"></use>
										</svg></a><a class="footer-contact__icon" href="#">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#vk"></use>
										</svg></a><a class="footer-contact__icon" href="#">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#instagram"></use>
										</svg></a>
									</div>
								</div>
								<div class="footer-contact__callback">
									<div class="footer-contact__title">Контакты</div>
									<div class="footer-contact__row"><a class="btn btn--darkBLue" href="">Связь с нами
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#phone-circle"></use>
										</svg></a><a class="footer-contact__icon" href="mailto:">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#mail"></use>
										</svg></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer__bottom">
						<button class="btn btn--white" type="button">Войти
							<svg class="btn__icon">
								<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#small-arrow-right"></use>
							</svg>
						</button>
						<div class="footer__info">
							<h5>Правообладатель - Дудова Кристина Андреевна</h5>
							<p>Перепечатка и воспроизведение материалов, а также любых фрагментов из них, в том числе в порядке подпункта 3 пункта 1 статьи 1274 ГК РФ, возможны лишь с письменного разрешения правообладателя.</p>
						</div>
					</div>
				</div>
			</footer>
		</div><!-- Scripts Section  -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572608838"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572608838"></script>
	</body>
</html>