<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Мои заказы</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572608164">
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
											<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/arrow-right.png" alt="Мой профиль" width="20" height="20"></div>Мой профиль</a><a class="dashboard-menu__link is-active" href="/dashboard-orders.html">
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
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/arrow-right.png" alt="Мой профиль" width="20" height="20"></div>Мой профиль</a><a class="dashboard-menu__link is-active" href="/dashboard-orders.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/clock.png" alt="Мои заказы" width="20" height="20"></div>Мои заказы</a><a class="dashboard-menu__link" href="/dashboard-analyz.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/medical.png" alt="Анализы" width="20" height="20"></div>Анализы</a>
								</nav>
								<div class="dashboard-menu__footer"><a class="dashboard-menu__link" href="/dashboard-instruction.html">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/doc.png" alt="analyz" width="20" height="20"></div>Инструкции</a><a class="dashboard-menu__link" href="#">
										<div class="dashboard-menu__icon"><img src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/right.png" alt="exit" width="20" height="20"></div>Выйти</a></div>
							</aside>
							<div class="dashboard__content">
								<div class="dashboard-info">
									<div class="dashboard-info__title">Ваши оплаченные анализы</div>
									<div class="dashboard-info__subtitle">Здесь вы можете отслеживать статусы заказов, а также просматривать информацию по результатам исследования. При нажатии на необходимую позицию, открывается подробная информация<br class="d-xl-none"><br class="d-xl-none"><span class="d-xl-none">Листайте горизонтально</span></div>
								</div>
								<div class="row gy-2">
									<div class="col-12 col-xl-3 order-xl-1">
										<div class="dashboard-blueblock">"При получении положительного результата лабораторных исследований - немедленно проконсультируйтесь с Вашим лечащим врачом!"</div>
									</div>
									<div class="col-12 col-xl-9 order-xl-0">
										<div class="table-responsive">
											<table class="table" id="top_table">
												<thead>
													<tr>
														<th scope="col" align="left">№ заказа</th>
														<th scope="col" align="center">сУММА</th>
														<th scope="col" align="center">сТАТУС</th>
														<th scope="col" align="center">ОПИСАНИЕ</th>
														<th scope="col" align="center">Пациент</th>
														<th scope="col" align="center">ДАТА</th>
													</tr>
												</thead>
												<tbody>
													<tr data-bs-toggle="collapse" data-bs-target="#list-1" aria-expanded="true" aria-controls="list-1">
														<th scope="row">2844</th>
														<td>
															 5800 ₽</td>
														<td> 
															<div class="result-item result-item--success">
																<svg class="result-item__icon">
																	<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																</svg>Результат
															</div>
														</td>
														<td>
															<div class="dashboard__table-desc">Герпес, цитомегаловирус, ВПЧ 16 и 18 (качественный, пцр), Гонорея, трихомониаз, микоплазмоз, хламидии (количественный, пцр), Папиллома человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, пцр)</div>
														</td>
														<td>
															 manhhachkt08@gmail.com</td>
														<td>
															 09:42 PM, Дек 30, 2023</td>
													</tr>
													<tr class="collapse" id="list-1" data-bs-parent="#top_table">
														<td colspan="6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="dashboard-accardion">
																				<div class="row">
																					<div class="col-3">
																						<ul class="result-items">
																							<li class="result-item">В обработке</li>
																							<li class="result-item">Возьмите пробирку в центре</li>
																							<li class="result-item">Ожидание биоматериала</li>
																							<li class="result-item">В лаборатории</li>
																							<li class="result-item result-item--success">
																								<svg class="result-item__icon">
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																								</svg>Результат
																							</li>
																						</ul>
																					</div>
																					<div class="col-9">
																						<div class="dashboard-accardion__block">
																							<div class="dashboard-accardion__content">Герпес, цитомегаловирус, ВПЧ 16 и 18 (качественный, пцр), Гонорея, трихомониаз, микоплазмоз, хламидии (количественный, пцр), Папиллома человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, пцр)<br><br>Медицинская компания “ИНВИТРО”, г.Москва, ул.Сретенка, 9, с1</div>
																							<button class="btn btn-download" type="button">Скачать результат анализа
																								<svg>
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#upload-cloud"></use>
																								</svg>
																							</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr data-bs-toggle="collapse" data-bs-target="#list-2" aria-expanded="true" aria-controls="list-2">
														<th scope="row">2845</th>
														<td>
															 1000 ₽</td>
														<td> 
															<div class="result-item result-item--orange">В лаборатории</div>
														</td>
														<td>
															<div class="dashboard__table-desc">Интимное здоровье мужчин. Андрофлор (качественный, пцр)</div>
														</td>
														<td>
															 manhhachkt08@gmail.com</td>
														<td>
															 09:42 PM, Дек 30, 2023</td>
													</tr>
													<tr class="collapse" id="list-2" data-bs-parent="#top_table">
														<td colspan="6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="dashboard-accardion">
																				<div class="row">
																					<div class="col-3">
																						<ul class="result-items">
																							<li class="result-item">В обработке</li>
																							<li class="result-item">Возьмите пробирку в центре</li>
																							<li class="result-item">Ожидание биоматериала</li>
																							<li class="result-item result-item--orange">В лаборатории</li>
																							<li class="result-item">
																								<svg class="result-item__icon">
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																								</svg>Результат
																							</li>
																						</ul>
																					</div>
																					<div class="col-9">
																						<div class="dashboard-accardion__block">
																							<div class="dashboard-accardion__content">Интимное здоровье мужчин. Андрофлор (качественный, пцр)<br><br>Медицинская компания “ИНВИТРО”, г.Москва, ул.Сретенка, 9, с1</div>
																							<button class="btn btn-download" type="button">Скачать результат анализа
																								<svg>
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#upload-cloud"></use>
																								</svg>
																							</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr data-bs-toggle="collapse" data-bs-target="#list-3" aria-expanded="true" aria-controls="list-3">
														<th scope="row">2846</th>
														<td>
															 2000 ₽</td>
														<td> 
															<div class="result-item result-item--waiting">Ожидание биоматериала</div>
														</td>
														<td>
															<div class="dashboard__table-desc">Кандидоз (Candida albicans) (качественный, пцр)</div>
														</td>
														<td>
															 manhhachkt08@gmail.com</td>
														<td>
															 09:42 PM, Дек 30, 2023</td>
													</tr>
													<tr class="collapse" id="list-3" data-bs-parent="#top_table">
														<td colspan="6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="dashboard-accardion">
																				<div class="row">
																					<div class="col-3">
																						<ul class="result-items">
																							<li class="result-item">В обработке</li>
																							<li class="result-item">Возьмите пробирку в центре</li>
																							<li class="result-item result-item--waiting">Ожидание биоматериала</li>
																							<li class="result-item">В лаборатории</li>
																							<li class="result-item">
																								<svg class="result-item__icon">
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																								</svg>Результат
																							</li>
																						</ul>
																					</div>
																					<div class="col-9">
																						<div class="dashboard-accardion__block">
																							<div class="dashboard-accardion__content">Кандидоз (Candida albicans) (качественный, пцр)<br><br>Медицинская компания “ИНВИТРО”, г.Москва, ул.Сретенка, 9, с1</div>
																							<button class="btn btn-download" type="button">Скачать результат анализа
																								<svg>
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#upload-cloud"></use>
																								</svg>
																							</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr data-bs-toggle="collapse" data-bs-target="#list-4" aria-expanded="true" aria-controls="list-4">
														<th scope="row">2847</th>
														<td>
															 1500 ₽</td>
														<td> 
															<div class="result-item result-item--processing">В обработке</div>
														</td>
														<td>
															<div class="dashboard__table-desc">Гонорея, трихомониаз, микоплазмоз, хламидии (качественный, пцр)</div>
														</td>
														<td>
															 manhhachkt08@gmail.com</td>
														<td>
															 09:42 PM, Дек 30, 2023</td>
													</tr>
													<tr class="collapse" id="list-4" data-bs-parent="#top_table">
														<td colspan="6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="dashboard-accardion">
																				<div class="row">
																					<div class="col-3">
																						<ul class="result-items">
																							<li class="result-item result-item--processing">В обработке</li>
																							<li class="result-item">Возьмите пробирку в центре</li>
																							<li class="result-item">Ожидание биоматериала</li>
																							<li class="result-item">В лаборатории</li>
																							<li class="result-item">
																								<svg class="result-item__icon">
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																								</svg>Результат
																							</li>
																						</ul>
																					</div>
																					<div class="col-9">
																						<div class="dashboard-accardion__block">
																							<div class="dashboard-accardion__content">Гонорея, трихомониаз, микоплазмоз, хламидии (качественный, пцр)<br><br>Медицинская компания “ИНВИТРО”, г.Москва, ул.Сретенка, 9, с1</div>
																							<button class="btn btn-download" type="button" disabled>Скачать результат анализа
																								<svg>
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#upload-cloud"></use>
																								</svg>
																							</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr data-bs-toggle="collapse" data-bs-target="#list-5" aria-expanded="true" aria-controls="list-5">
														<th scope="row">2848</th>
														<td>
															 2900 ₽</td>
														<td> 
															<div class="result-item result-item--center">Возьмите пробирку в центре</div>
														</td>
														<td>
															<div class="dashboard__table-desc">Микоплазма  (Муcoplasma hominis) (качественный, пцр)</div>
														</td>
														<td>
															 manhhachkt08@gmail.com</td>
														<td>
															 09:42 PM, Дек 30, 2023</td>
													</tr>
													<tr class="collapse" id="list-5" data-bs-parent="#top_table">
														<td colspan="6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="dashboard-accardion">
																				<div class="row">
																					<div class="col-3">
																						<ul class="result-items">
																							<li class="result-item">В обработке</li>
																							<li class="result-item result-item--center">Возьмите пробирку в центре</li>
																							<li class="result-item">Ожидание биоматериала</li>
																							<li class="result-item">В лаборатории</li>
																							<li class="result-item">
																								<svg class="result-item__icon">
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																								</svg>Результат
																							</li>
																						</ul>
																					</div>
																					<div class="col-9">
																						<div class="dashboard-accardion__block">
																							<div class="dashboard-accardion__content">Микоплазма  (Муcoplasma hominis) (качественный, пцр)<br><br>Медицинская компания “ИНВИТРО”, г.Москва, ул.Сретенка, 9, с1</div>
																							<button class="btn btn-download" type="button" disabled>Скачать результат анализа
																								<svg>
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#upload-cloud"></use>
																								</svg>
																							</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr data-bs-toggle="collapse" data-bs-target="#list-6" aria-expanded="true" aria-controls="list-6">
														<th scope="row">2849</th>
														<td>
															 2900 ₽</td>
														<td> 
															<div class="result-item result-item--error">Оплата не прошла</div>
														</td>
														<td>
															<div class="dashboard__table-desc">Микоплазма (Муcoplasma hominis) (количественный, пцр)</div>
														</td>
														<td>
															 manhhachkt08@gmail.com</td>
														<td>
															 09:42 PM, Дек 30, 2023</td>
													</tr>
													<tr class="collapse" id="list-6" data-bs-parent="#top_table">
														<td colspan="6">
															<table class="table">
																<tbody>
																	<tr>
																		<td>
																			<div class="dashboard-accardion">
																				<div class="row">
																					<div class="col-3">
																						<ul class="result-items">
																							<li class="result-item result-item--error">Оплата не прошла</li>
																							<li class="result-item">Возьмите пробирку в центре</li>
																							<li class="result-item">Ожидание биоматериала</li>
																							<li class="result-item">В лаборатории</li>
																							<li class="result-item">
																								<svg class="result-item__icon">
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#checked"></use>
																								</svg>Результат
																							</li>
																						</ul>
																					</div>
																					<div class="col-9">
																						<div class="dashboard-accardion__block">
																							<div class="dashboard-accardion__content">Микоплазма  (Муcoplasma hominis) (качественный, пцр)<br><br>Медицинская компания “ИНВИТРО”, г.Москва, ул.Сретенка, 9, с1</div>
																							<button class="btn btn-download" type="button" disabled>Скачать результат анализа
																								<svg>
																									<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#upload-cloud"></use>
																								</svg>
																							</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
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
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572608164"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572608164"></script>
	</body>
</html>