<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Мой профиль</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572609521">
	</head>
	<body>
		<div class="site"><!-- Header Section  -->
			<header class="header">
				<div class="container">
					<div class="header__wrapper"><a class="header__logo logo" href="/"><img class="logo__img" src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/logo-mobile.svg" alt="logo" width="203" height="60"></a>
						<button class="btn header__burger js-burger" type="button"></button>
						<div class="header__block">
							<div class="header__profile">Приветствуем, Анастасия!</div><a class="btn btn--basket" href="/basket.html">
								<svg>
									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket"></use>
								</svg></a>
						</div>
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
							<div class="dashboard-menu__content mobile-menu__content"><a class="dashboard-menu__logo logo" href="/"><img class="logo__img" src="<?=$get_template_directory_uri?>/template-tilimed/logo.svg" alt="logo" width="175" height="60"></a>
								<div class="dashboard-menu__block">
									<nav class="dashboard-menu__nav"><a class="dashboard-menu__link is-active" href="/profile.html">
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/arrow-right.png" alt="Мой профиль" width="20" height="20"></div>Мой профиль</a><a class="dashboard-menu__link" href="/dashboard-orders.html">
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/clock.png" alt="Мои заказы" width="20" height="20"></div>Мои заказы</a><a class="dashboard-menu__link" href="/dashboard-analyz.html">
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/medical.png" alt="Анализы" width="20" height="20"></div>Анализы</a>
									</nav>
									<div class="dashboard-menu__footer"><a class="dashboard-menu__link" href="/dashboard-instruction.html">
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/doc.png" alt="analyz" width="20" height="20"></div>Инструкции</a><a class="dashboard-menu__link" href="#">
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/right.png" alt="exit" width="20" height="20"></div>Выйти</a>
										<button class="btn btn__close js-burger-close" type="button"></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header><!-- Main Section  -->
			<main class="main">
				<section class="dashboard">
					<div class="container">
						<div class="dashboard__grid">
							<aside class="dashboard__aside">
								<nav class="dashboard-menu__nav"><a class="dashboard-menu__link is-active" href="/profile.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/arrow-right.png" alt="Мой профиль" width="20" height="20"></div>Мой профиль</a><a class="dashboard-menu__link" href="/dashboard-orders.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/clock.png" alt="Мои заказы" width="20" height="20"></div>Мои заказы</a><a class="dashboard-menu__link" href="/dashboard-analyz.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/medical.png" alt="Анализы" width="20" height="20"></div>Анализы</a>
								</nav>
								<div class="dashboard-menu__footer"><a class="dashboard-menu__link" href="/dashboard-instruction.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/doc.png" alt="analyz" width="20" height="20"></div>Инструкции</a><a class="dashboard-menu__link" href="#">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/right.png" alt="exit" width="20" height="20"></div>Выйти</a></div>
							</aside>
							<div class="dashboard__content">
								<div class="dashboard-info">
									<div class="dashboard-info__title">Редактирование данных аккаунта</div>
								</div>
								<div class="row gy-2">
									<div class="col-12 col-lg-4">
										<div class="row gy-2">
											<div class="col">
												<form class="profile-form" action="/">
													<div class="profile-form__group">
														<label class="dashboard__label" for="name">Имя и Фамилия</label>
														<input class="dashboard__input" type="text" name="name" placeholder="Введите Имя или Фамилию">
													</div>
													<div class="profile-form__group">
														<label class="dashboard__label" for="email">Email</label>
														<input class="dashboard__input" type="email" name="email" placeholder="Введите Ваш Email">
													</div>
													<div class="profile-form__group">
														<label class="dashboard__label" for="phone">Телефон для смс-информирования</label>
														<input class="dashboard__input" type="text" name="phone" placeholder="Введите Ваш номер телефона">
													</div>
													<div class="profile-form__group">
														<label class="dashboard__label" for="newPass">Сменить пароль на новый</label>
														<input class="dashboard__input" type="password" name="newPass" placeholder="Введите пароль">
													</div>
													<div class="profile-form__group">
														<label class="dashboard__label" for="confirm">Повторите новый пароль</label>
														<input class="dashboard__input" type="password" name="confirm" placeholder="Введите пароль">
													</div>
													<button class="btn btn-primary" type="submit">Сохранить</button>
												</form>
											</div>
											<div class="col">
												<form class="profile-form" action="/">
													<div class="profile-form__group">
														<label class="dashboard__label" for="address">Адрес выбранной клиники для приема материалов</label>
														<input class="dashboard__input" type="text" name="address" value="г.Москва, ул. Серпухова, д 20, с1">
													</div>
													<button class="btn btn-primary" type="submit" disabled>Выбрать</button>
												</form>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-8"><img class="profile__map" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/map-test.jpg" alt="map"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div><!-- Scripts Section  -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572609521"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572609521"></script>
	</body>
</html>