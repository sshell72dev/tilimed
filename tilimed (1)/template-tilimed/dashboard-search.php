<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Анализы</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572608388">
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
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/clock.png" alt="Мои заказы" width="20" height="20"></div>Мои заказы</a><a class="dashboard-menu__link is-active" href="/dashboard-analyz.html">
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
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/clock.png" alt="Мои заказы" width="20" height="20"></div>Мои заказы</a><a class="dashboard-menu__link is-active" href="/dashboard-analyz.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/medical.png" alt="Анализы" width="20" height="20"></div>Анализы</a>
								</nav>
								<div class="dashboard-menu__footer"><a class="dashboard-menu__link" href="/dashboard-instruction.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/doc.png" alt="analyz" width="20" height="20"></div>Инструкции</a><a class="dashboard-menu__link" href="#">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/right.png" alt="exit" width="20" height="20"></div>Выйти</a></div>
							</aside>
							<div class="dashboard__content">
								<div class="dashboard-analyzes">
									<form class="analyzes-form section section--first" action="/">
										<label class="analyzes-form__label" for="search">
											<svg class="analyzes-form__icon analyzes-form__icon--black">
												<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-left"></use>
											</svg>
											<input class="analyzes-form__input" id="search" type="search" name="q" placeholder="Поиск по названию анализа" value="папилломы">
										</label>
									</form>
									<div class="analyzes-search section">
										<div class="row gy-5">
											<div class="col-12 col-lg-7 order-1 order-lg-0 analyzes-search__col">
												<div class="row">
													<div class="col-12 col-lg-8">
														<div class="analyzes-search__header">
															<h2 class="analyzes-search__header-title">Качественные анализы</h2>
															<p class="analyzes-search__header-subtitle">Качественный анализ —  анализ по установлению качественного состава веществ, то есть обнаружению элементов и образуемых ими реакций.</p>
														</div>
													</div>
													<div class="row gy-2">
														<div class="col-12 col-md-7">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-2.jpg" alt="text" loading="lazy">
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Вирус папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row gy-2">
													<div class="col-12 col-lg-8">
														<div class="analyzes-search__header">
															<h2 class="analyzes-search__header-title">Количественные анализы</h2>
															<p class="analyzes-search__header-subtitle">Количественный анализ —  анализ определения содержания (массы, концентрации) количественных соотношений компонентов в анализируемом образце.</p>
														</div>
													</div>
													<div class="row gy-2">
														<div class="col-12 col-md-7">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-2.jpg" alt="text" loading="lazy">
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Вирус папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-5 order-0 order-lg-1">
												<div class="analyzes-search-block">
													<h2 class="analyzes-search__title">Результаты поиска</h2>
													<p class="analyzes-search__subtitle">Здесь вы можете выбрать нужный анализ, чтобы ознакомиться с его описанием и добавить в корзину</p>
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
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572608388"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572608388"></script>
	</body>
</html>