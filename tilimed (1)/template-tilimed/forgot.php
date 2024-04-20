<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Забыли пароль</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572608576">
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
				<section class="auth">
					<div class="auth-gallerys">
						<div class="auth-gallery auth-gallery--left">
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-11.jpg" alt="ALT" loading="lazy"/></div>
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-9.jpg" alt="ALT" loading="lazy"/></div>
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-1.jpg" alt="ALT" loading="lazy"/></div>
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-7.jpg" alt="ALT" loading="lazy"/></div>
						</div>
						<div class="auth-gallery auth-gallery--right">
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-2.jpg" alt="ALT" loading="lazy"/></div>
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-12.jpg" alt="ALT" loading="lazy"/></div>
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-13.jpg" alt="ALT" loading="lazy"/></div>
							<div class="gallery__item"><img class="gallery__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-7.jpg" alt="ALT" loading="lazy"/></div>
						</div>
					</div>
					<div class="container">
						<div class="auth-content">
							<div class="row auth-row">
								<div class="col-12 col-xl-6">
									<form class="auth-form auth-col" action="/">
										<div class="auth-form__header">
											<h1 class="auth-form__title">Забыли пароль</h1>
											<p class="auth-form__subtitle">На вашу почту hello@example.c выслан временный пароль. Введите его, а позже поменяйте в личном кабинете.</p>
										</div>
										<div class="auth-form__group">
											<label class="auth-form__label" for="password">Ваш пароль:</label>
											<input class="auth-form__input" type="password" name="password" placeholder="Введите Ваш пароль:">
										</div>
										<div class="auth-form__buttons">
											<button class="btn btn-dashboard" type="submit">Войти</button>
											<div class="auth-form__group">
												<input class="visually-hidden" type="checkbox" name="member" id="member" checked>
												<label class="auth-form__checkbox" for="member">Запомнить</label>
											</div>
										</div>
									</form>
								</div>
								<div class="col-12 col-xl-6">
									<div class="auth-block auth-col">
										<h1 class="auth-block__title">Еще нет аккаунта?</h1><a class="auth-link" href="/register.html">Зарегистрироваться
											<svg>
												<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-right"></use>
											</svg></a>
										<div class="auth-block__detail">
											<div class="auth-block__detail-title">Чтобы:</div>
											<ul class="auth-block__detail-lists">
												<li>Видеть список отчетов</li>
												<li>Не терять результаты</li>
												<li>Видеть статус  своих покупок</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div><!-- Scripts Section  -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572608576"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572608576"></script>
	</body>
</html>