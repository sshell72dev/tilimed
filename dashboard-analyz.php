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
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711577368587">
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
											<svg class="analyzes-form__icon">
												<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#search"></use>
											</svg>
											<input class="analyzes-form__input" id="search" type="search" name="q" placeholder="Поиск по названию анализа">
										</label>
									</form>
									<div class="analyzes-content">
										<div class="analyzes-content__item p-0">
											<h2 class="analyzes-content__title">Качественные анализы</h2>
											<div class="analyzes-content__header">
												<div class="analyzes-content__subtitle">Качественный анализ —  анализ по установлению качественного состава веществ, то есть обнаружению элементов и образуемых ими реакций.</div>
												<div class="analyzes-content__desc">Здесь вы можете выбрать нужный анализ, чтобы ознакомиться с его описанием и добавить в корзину</div>
											</div>
											<div class="analyzes-content__slider js-analyzes-slider">
												<div class="swiper"> 
													<div class="swiper-wrapper">
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-1.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Вирусы герпеса, цитомегаловируса, ВПЧ 16 и 18 (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-2.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Вирус папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-3.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Незащенный половой контакт (хламидия, трихомонада, гонококк, микоплазма) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-4.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Бактероиды (Bacteroides) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-5.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Микоплазма генитальная (Mуcoplasma genitalium) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-6.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Микоплазма хоминис (Муcoplasma hominis) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-7.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Кандида (Candida albicans) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-8.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Трихомонада (Trichomonas vaginalis) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-9.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Гонококки гонореи (Neisseria gonorrhoeae )(качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-10.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Гарднерелла вагиналис (Gardnerella vaginalis) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-11.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Уреаплазмы. 2 вида (Ureaplasma species, U. urealyticum, U. parvum) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-12.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Хламидии  (Chlamydia trachomatis) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-13.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Сифилис (Treponema pallidum) (качественный, ПЦР)</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-button-prev">
													<svg>
														<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-left"></use>
													</svg>
												</div>
												<div class="swiper-button-next">
													<svg>
														<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-right"></use>
													</svg>
												</div>
											</div>
											<div class="analyzes-content__mobile">
												<div class="analyzes-content__items">
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-1.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Вирусы герпеса, цитомегаловируса, ВПЧ 16 и 18 (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-2.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Вирус папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-3.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Незащенный половой контакт (хламидия, трихомонада, гонококк, микоплазма) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-4.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Бактероиды (Bacteroides) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-5.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Микоплазма генитальная (Mуcoplasma genitalium) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-6.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Микоплазма хоминис (Муcoplasma hominis) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-7.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Кандида (Candida albicans) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-8.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Трихомонада (Trichomonas vaginalis) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-9.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Гонококки гонореи (Neisseria gonorrhoeae )(качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-10.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Гарднерелла вагиналис (Gardnerella vaginalis) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-11.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Уреаплазмы. 2 вида (Ureaplasma species, U. urealyticum, U. parvum) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-12.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Хламидии  (Chlamydia trachomatis) (качественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-13.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Сифилис (Treponema pallidum) (качественный, ПЦР)</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="analyzes-content__item p-0">
											<h2 class="analyzes-content__title">Количественные анализы</h2>
											<div class="analyzes-content__header">
												<div class="analyzes-content__subtitle">Количественный анализ —  анализ определения содержания (массы, концентрации) количественных соотношений компонентов в анализируемом образце.</div>
												<div class="analyzes-content__desc">Здесь вы можете выбрать нужный анализ, чтобы ознакомиться с его описанием и добавить в корзину</div>
											</div>
											<div class="analyzes-content__slider js-analyzes-slider">
												<div class="swiper"> 
													<div class="swiper-wrapper">
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-1.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Интимное здоровье мужчин. Андрофлор (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-2.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Вирусы герпеса, цитомегаловируса, ВПЧ 16 и 18 (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-3.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Вирус папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-4.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Фемофлор-8. Анализ микробиоценоза влагалища (8 показателей) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-5.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Фемофлор-13. Анализ микробиоценоза влагалища (13 показателей) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-6.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Комплексное обследование на биоценоз методом Фемофлор 16 + (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-7.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Незащенный половой контакт (хламидия, трихомонада, гонококк, микоплазма) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-8.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Трихомонада Trichomonas vaginalis (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-9.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Бактероиды (Bacteroides) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-10.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Хламидии (Chlamydia trachomatis) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-11.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Кандида (Candida albicans) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-12.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Гарднерелла вагиналис (Gardnerella vaginalis) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="analyzes-block"> 
																<div class="analyzes-block__header">
																	<div class="analyzes-block__detail">
																		<div class="analyzes-block__tag">NNNN р.</div>
																		<div class="analyzes-block__tag">q-w дней</div>
																	</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																		<svg>
																			<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																		</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-13.jpg" alt="text" loading="lazy"/>
																</div>
																<div class="analyzes-block__body">
																	<div class="analyzes-block__title">Гонококки гонореи (Neisseria gonorrhoeae) (количественный, ПЦР)</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-button-prev">
													<svg>
														<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-left"></use>
													</svg>
												</div>
												<div class="swiper-button-next">
													<svg>
														<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-right"></use>
													</svg>
												</div>
											</div>
											<div class="analyzes-content__mobile">
												<div class="analyzes-content__items">
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-1.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Интимное здоровье мужчин. Андрофлор (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-2.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Вирусы герпеса, цитомегаловируса, ВПЧ 16 и 18 (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-3.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Вирус папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-4.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Фемофлор-8. Анализ микробиоценоза влагалища (8 показателей) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-5.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Фемофлор-13. Анализ микробиоценоза влагалища (13 показателей) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-6.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Комплексное обследование на биоценоз методом Фемофлор 16 + (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-7.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Незащенный половой контакт (хламидия, трихомонада, гонококк, микоплазма) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-8.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Трихомонада Trichomonas vaginalis (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-9.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Бактероиды (Bacteroides) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-10.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Хламидии (Chlamydia trachomatis) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-11.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Кандида (Candida albicans) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-12.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Гарднерелла вагиналис (Gardnerella vaginalis) (количественный, ПЦР)</div>
														</div>
													</div>
													<div class="analyzes-block"> 
														<div class="analyzes-block__header">
															<div class="analyzes-block__detail">
																<div class="analyzes-block__tag">NNNN р.</div>
																<div class="analyzes-block__tag">q-w дней</div>
															</div><a class="analyzes-block__link" href="javascript:void(0);" data-modal-open="modal-1"><span>Выбрать</span>
																<svg>
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#basket-circle"></use>
																</svg></a><img class="analyzes-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-13.jpg" alt="text" loading="lazy"/>
														</div>
														<div class="analyzes-block__body">
															<div class="analyzes-block__title">Гонококки гонореи (Neisseria gonorrhoeae) (количественный, ПЦР)</div>
														</div>
													</div>
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
			<div class="modal" id="modal-1" aria-hidden="true">
				<div class="modal__overlay" tabindex="-1" data-modal-close>
					<div class="modal__container" role="dialog" aria-modal="true">
						<button class="modal__close" aria-label="Close modal" data-modal-close>
							<svg>
								<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#close"></use>
							</svg>
						</button>
						<div class="modal__content">
							<div class="modal__slider js-modal-slider">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">Качественные анализы</h2>
												<h3 class="modal-block__subtitle">Незащищенный контакт (хламидия, трихомонада, гонококк, микоплазма), кач. ПЦР.</h3>
												<div class="modal-block__item">
													<div class="modal-block__compound">
														<div class="modal-block__compound-block">
															<h5>Состав комплексного исследования</h5>
															<ul> 
																<li>хламидия трахоматис (Chlamydia trachomatis);</li>
																<li>микоплазма гениталиум (Mycoplasma genitalium);</li>
																<li>трихомонада (Trichomonas vaginalis);</li>
																<li>гонококк (Neisseria gonorrhoeae).</li>
															</ul>
														</div>
														<div class="modal-block__compound-block">
															<div class="modal-block__compound-btn"><a class="btn btn-basketWhite" href="#"><span>Мазок</span></a><a class="btn btn-basketWhite" href="#"><span>Моча</span></a></div>
														</div>
													</div>
												</div>
												<div class="modal-block__item">
													<h5>Описание</h5>
													<p>
														 Комплексный анализ на выявление основных возбудителей инфекционных заболеваний, передаваемых половым путем. Результаты исследования помогут определить причины воспалительных заболеваний мочеполовой системы и нарушения репродуктивных функций, а также будут полезны при планировании беременности.</p>
												</div>
												<div class="modal-block__item">
													<div class="row gy-2">
														<div class="col-12 col-md-6">
															<h5>Синонимы русские</h5>
															<p>
																 Инфекции, передаваемые половым путем (ИППП), интимное здоровье</p>
														</div>
														<div class="col-12 col-md-6">
															<h5>Синонимы английские</h5>
															<p>
																 Sexually transmitted diseases (STDs), PCR testing for sexually transmitted infections</p>
														</div>
													</div>
												</div>
												<div class="modal-block__item">
													<div class="row gy-2 modal-block__row">
														<div class="col-12 col-md-6">
															<h5>Показания</h5>
															<ul> 
																<li>профилактическое обследование;</li>
																<li>диагностика инфекций, передаваемых половым путём;</li>
																<li>подозрение на воспалительные заболевания мочеполовой системы;</li>
																<li>нарушения менструального цикла;</li>
																<li>подготовка к беременности;</li>
																<li>бесплодие;</li>
																<li>привычное невынашивание беременности.</li>
															</ul>
														</div>
														<div class="col-12 col-md-6">
															<h5>Как правильно подготовиться к исследованию?</h5>
															<p>
																 Не рекомендуется проводить анализ во время менструации. Исследование следует проводить не позднее, чем за 5 дней до начала месячных или через 5 дней и позже после их окончания<br>за 30 дней до исследования исключить прием антибактериальных, противовирусных препаратов;<br>за 3 дня исключить спринцевание, вагинальные свечи, тампоны;<br>за 24 часа исключить половые контакты;<br>за 14 дней до исследования исключить прием антибактериальных препаратов;<br>за 2 часа до исследования мужчинам лучше воздержаться от мочеиспускания.</p>
														</div>
													</div>
												</div>
												<div class="modal-block__item">
													<h5>Метод исследования</h5>
													<p>Полимеразная цепная реакция (ПЦР) в режиме реального времени – высокоточный метод выявления ДНК возбудителя в биологическом материале</p>
												</div>
												<div class="modal-block__item">
													<h5>Какой биоматериал можно использовать для исследования?</h5>
													<p>
														Женщинам рекомендовано сдавать мазок из влагалища, который является более точным в сравнении с результатом анализа мочи.Мужчинам рекомендовано сдавать мочу</p>
												</div>
												<div class="modal-block__item">
													<h5>Общая информация об ИППП</h5>
													<p>
														 ИППП – инфекции, передаваемые половым путем, которые могут поражать не только мочеполовую систему, но и другие органы, во многих случаях бессимптомно. По этой причине обследование на ИППП рекомендовано проводить всем сексуально активным пациентам, не использующим барьерный метод контрацепции, чтобы не пропустить заболевание.</p>
												</div>
												<div class="modal-block__item">
													<h5>Основные симптомы ИППП:</h5>
													<ul> 
														<li>необычные выделения из половых путей;</li>
														<li>нарушение менструального цикла;</li>
														<li>болезненное, учащенное мочеиспускание;</li>
														<li>зуд, сыпь, покраснения, язвы на наружных половых органах;</li>
														<li>боли внизу живота, в области промежности;</li>
														<li>дискомфорт при половом контакте.</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">Качественные анализы</h2>
												<h3 class="modal-block__subtitle">Незащищенный контакт (хламидия, трихомонада, гонококк, микоплазма), кач. ПЦР.</h3>
												<div class="modal-block__item">
													<div class="modal-block__compound">
														<div class="modal-block__compound-block">
															<h5>Состав комплексного исследования</h5>
															<ul> 
																<li>хламидия трахоматис (Chlamydia trachomatis);</li>
																<li>микоплазма гениталиум (Mycoplasma genitalium);</li>
																<li>трихомонада (Trichomonas vaginalis);</li>
																<li>гонококк (Neisseria gonorrhoeae).</li>
															</ul>
														</div>
														<div class="modal-block__compound-block">
															<div class="modal-block__compound-btn"><a class="btn btn-basketWhite" href="#"><span>Мазок</span></a><a class="btn btn-basketWhite" href="#"><span>Моча</span></a></div>
														</div>
													</div>
												</div>
												<div class="modal-block__item">
													<h5>Описание</h5>
													<p>
														 Комплексный анализ на выявление основных возбудителей инфекционных заболеваний, передаваемых половым путем. Результаты исследования помогут определить причины воспалительных заболеваний мочеполовой системы и нарушения репродуктивных функций, а также будут полезны при планировании беременности.</p>
												</div>
												<div class="modal-block__item">
													<div class="row gy-2">
														<div class="col-12 col-md-6">
															<h5>Синонимы русские</h5>
															<p>
																 Инфекции, передаваемые половым путем (ИППП), интимное здоровье</p>
														</div>
														<div class="col-12 col-md-6">
															<h5>Синонимы английские</h5>
															<p>
																 Sexually transmitted diseases (STDs), PCR testing for sexually transmitted infections</p>
														</div>
													</div>
												</div>
												<div class="modal-block__item">
													<div class="row gy-2 modal-block__row">
														<div class="col-12 col-md-6">
															<h5>Показания</h5>
															<ul> 
																<li>профилактическое обследование;</li>
																<li>диагностика инфекций, передаваемых половым путём;</li>
																<li>подозрение на воспалительные заболевания мочеполовой системы;</li>
																<li>нарушения менструального цикла;</li>
																<li>подготовка к беременности;</li>
																<li>бесплодие;</li>
																<li>привычное невынашивание беременности.</li>
															</ul>
														</div>
														<div class="col-12 col-md-6">
															<h5>Как правильно подготовиться к исследованию?</h5>
															<p>
																 Не рекомендуется проводить анализ во время менструации. Исследование следует проводить не позднее, чем за 5 дней до начала месячных или через 5 дней и позже после их окончания<br>за 30 дней до исследования исключить прием антибактериальных, противовирусных препаратов;<br>за 3 дня исключить спринцевание, вагинальные свечи, тампоны;<br>за 24 часа исключить половые контакты;<br>за 14 дней до исследования исключить прием антибактериальных препаратов;<br>за 2 часа до исследования мужчинам лучше воздержаться от мочеиспускания.</p>
														</div>
													</div>
												</div>
												<div class="modal-block__item">
													<h5>Метод исследования</h5>
													<p>Полимеразная цепная реакция (ПЦР) в режиме реального времени – высокоточный метод выявления ДНК возбудителя в биологическом материале</p>
												</div>
												<div class="modal-block__item">
													<h5>Какой биоматериал можно использовать для исследования?</h5>
													<p>
														Женщинам рекомендовано сдавать мазок из влагалища, который является более точным в сравнении с результатом анализа мочи.Мужчинам рекомендовано сдавать мочу</p>
												</div>
												<div class="modal-block__item">
													<h5>Общая информация об ИППП</h5>
													<p>
														 ИППП – инфекции, передаваемые половым путем, которые могут поражать не только мочеполовую систему, но и другие органы, во многих случаях бессимптомно. По этой причине обследование на ИППП рекомендовано проводить всем сексуально активным пациентам, не использующим барьерный метод контрацепции, чтобы не пропустить заболевание.</p>
												</div>
												<div class="modal-block__item">
													<h5>Основные симптомы ИППП:</h5>
													<ul> 
														<li>необычные выделения из половых путей;</li>
														<li>нарушение менструального цикла;</li>
														<li>болезненное, учащенное мочеиспускание;</li>
														<li>зуд, сыпь, покраснения, язвы на наружных половых органах;</li>
														<li>боли внизу живота, в области промежности;</li>
														<li>дискомфорт при половом контакте.</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-button-prev"> 
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-left"></use>
									</svg>
								</div>
								<div class="swiper-button-next">
									<svg>
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-right"></use>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Scripts Section  -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711577368588"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711577368588"></script>
	</body>
</html>