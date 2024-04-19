<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Инструкции</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572607925">
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
									<nav class="dashboard-menu__nav"><a class="dashboard-menu__link" href="/profile.html">
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
								<nav class="dashboard-menu__nav"><a class="dashboard-menu__link" href="/profile.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/arrow-right.png" alt="Мой профиль" width="20" height="20"></div>Мой профиль</a><a class="dashboard-menu__link" href="/dashboard-orders.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/clock.png" alt="Мои заказы" width="20" height="20"></div>Мои заказы</a><a class="dashboard-menu__link" href="/dashboard-analyz.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/medical.png" alt="Анализы" width="20" height="20"></div>Анализы</a>
								</nav>
								<div class="dashboard-menu__footer"><a class="dashboard-menu__link is-active" href="/dashboard-instruction.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/doc.png" alt="analyz" width="20" height="20"></div>Инструкции</a><a class="dashboard-menu__link" href="#">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/right.png" alt="exit" width="20" height="20"></div>Выйти</a></div>
							</aside>
							<div class="dashboard__content">
								<div class="dashboard__instruction">
									<div class="about-instruction__header">
										<h3 class="about-instruction__title">Инструкции</h3>
										<p class="about-instruction__subtitle">Здесь мы описали подробные инструкции по сбору <br/> анализов для мужчин и женщин. Выбрав анализ,<br/> обязательно внимательно следуйте списку действий<br/> ниже</p>
										<div class="row d-none d-md-flex">
											<div class="col-6"><a class="about-instruction__header-title js-to-anchor" href="#forman">ДЛЯ МУЖЧИН</a></div>
											<div class="col-6"><a class="about-instruction__header-title js-to-anchor" href="#forwoman">ДЛЯ ЖЕНЩИН</a></div>
										</div>
									</div>
									<div class="about-instruction__content section">
										<div class="row gy-2">
											<div class="col-12 col-md-6">
												<div class="about-instruction__block">
													<div class="instruction-accardion js-accardion-toggle order-lg-1" id="forman">
														<div class="instruction-accardion__header">
															<button class="instruction-accardion__title" type="button"><span class="js-replace-text">Развернуть&nbsp;</span>инструкцию для мужчин</button>
														</div>
														<div class="instruction-accardion__body js-accardion-body">
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">01.</div>
																<div class="instruction-accardion__text">Получить в пункте лаборатории партнёра контейнер для мочи и гриппер-пакет для упаковки материала для сдачи в лабораторию.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">02.</div>
																<div class="instruction-accardion__text">Утром до утреннего туалета, душа, подмывания и тд. тщательно вымойте руки.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">03.</div>
																<div class="instruction-accardion__text">ВНИМАНИЕ! Мужчины накануне обследования не должны проводить туалет половых органов.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">04.</div>
																<div class="instruction-accardion__text">Собрать первую порцию утренней мочи в стерильный пластиковый контейнер в количестве 20-30 мл и закрыть его плотно.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">05.</div>
																<div class="instruction-accardion__text">Хранить до транспортировки в холодильнике при температуре +2С° +4С°</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">06.</div>
																<div class="instruction-accardion__text">Желательно отвезти контейнер с мочой в лабораторию в течение 2-3 часов с момента забора материала.</div>
															</div>
														</div>
													</div>
													<figure class="about-instruction__figure order-lg-0"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-6.jpg" alt="">
														<figcaption>Фото-пример пробирки для набора материала</figcaption>
													</figure>
													<figure class="about-instruction__figure order-lg-2"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-3.jpg" alt="">
														<figcaption>Фото-пример пробирки для набора материала</figcaption>
													</figure>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="about-instruction__block">
													<div class="instruction-accardion js-accardion-toggle order-lg-1" id="forwoman">
														<div class="instruction-accardion__header">
															<button class="instruction-accardion__title" type="button"><span class="js-replace-text">Развернуть</span>&nbsp;инструкцию для женщин</button>
														</div>
														<div class="instruction-accardion__body js-accardion-body">
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">01.</div>
																<div class="instruction-accardion__text">Получить в пункте лаборатории партнёра эппендорф (контейнер), урогенитальный зонд (палочку с ватным наконечником) и гриппер-пакет для упаковки материала для сдачи в лабораторию.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">02.</div>
																<div class="instruction-accardion__text">Утром до утреннего туалета, душа, подмывания и тд. тщательно вымойте руки.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">03.</div>
																<div class="instruction-accardion__text">ВНИМАНИЕ! Женщинам исследование забор материала рекомендуется производить до менструации или через 2 дня после её окончания. Накануне обследования не должны проводить туалет половых органов и спринцевание. Необходимо за неделю исключить применение жиросодержащих вагинальных препаратов.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">04.</div>
																<div class="instruction-accardion__text">Ввести зонд аккуратно во влагалище на глубину 3-5 см, после чего вытащить, перенести в эппендорф. В случае посещения врача гинеколога попросите его сделать забор материала в ваш эппендорф.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">05.</div>
																<div class="instruction-accardion__text">Кончик зонда обломить и оставить в эппендорфе.</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">06.</div>
																<div class="instruction-accardion__text">Закрыть эппендорф и положить в гриппер-пакет</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">07.</div>
																<div class="instruction-accardion__text">Хранить до транспортировки в холодильнике при температуре +2С° - +4С°</div>
															</div>
															<div class="instruction-accardion__item">
																<div class="instruction-accardion__count">08.</div>
																<div class="instruction-accardion__text">Желательно отвезти эппендорф в лабораторию в течение 2-3 часов с момента забора материала.</div>
															</div>
														</div>
													</div>
													<figure class="about-instruction__figure order-lg-0"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-8.jpg" alt="">
														<figcaption>Фото-пример пробирки для набора материала</figcaption>
													</figure>
													<figure class="about-instruction__figure order-lg-2"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-7.jpg" alt="">
														<figcaption>Фото-пример пробирки для набора материала</figcaption>
													</figure>
												</div>
											</div>
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
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572607926"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572607926"></script>
	</body>
</html>