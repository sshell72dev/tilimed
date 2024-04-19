<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>Оформление заказа</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711577082353">
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
				<section class="basket">
					<div class="container">
						<div class="row gy-2">
							<div class="col-12 col-lg-8">
								<form class="basket-form" action="/"> 
									<div class="basket-block">
										<h1 class="basket-block__title">Оформление заказа<br><span class="d-lg-none">Листайте горизонтально или вертикально</span></h1>
										<div class="table-responsive">
											<table class="table basket-tablet js-basket-table">
												<thead>
													<tr> 
														<th scope="col" align="left">
															<div class="form-group">
																<input class="visually-hidden" id="select-all" type="checkbox" name="all">
																<label class="checkbox-input" for="select-all"></label>
															</div>
														</th>
														<th scope="col" align="center">сУММА</th>
														<th scope="col" align="left">ОПИСАНИЕ</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="form-group">
																<input class="visually-hidden" type="checkbox" name="all" id="check-1">
																<label class="checkbox-input" for="check-1"></label>
															</div>
														</td>
														<td align="center">1000 ₽</td>
														<td colspan="2">Интимное здоровье мужчин. Андрофлор (количественный, ПЦР) (моча)</td>
													</tr>
													<tr>
														<td>
															<div class="form-group">
																<input class="visually-hidden" type="checkbox" name="all" id="check-2">
																<label class="checkbox-input" for="check-2"></label>
															</div>
														</td>
														<td align="center">1800 ₽</td>
														<td colspan="2">Папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР) (мазок)</td>
													</tr>
													<tr>
														<td>
															<div class="form-group">
																<input class="visually-hidden" type="checkbox" name="all" id="check-3">
																<label class="checkbox-input" for="check-3"></label>
															</div>
														</td>
														<td align="center">2000 ₽</td>
														<td colspan="2">Кандидоз (Candida albicans ) (количественный, ПЦР) (моча)</td>
													</tr>
													<tr>
														<td>
															<div class="form-group">
																<input class="visually-hidden" type="checkbox" name="all" id="check-4">
																<label class="checkbox-input" for="check-4"></label>
															</div>
														</td>
														<td align="center">1800 ₽</td>
														<td colspan="2">Папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР) (мазок)</td>
													</tr>
													<tr>
														<td>
															<div class="form-group">
																<input class="visually-hidden" type="checkbox" name="all" id="check-5">
																<label class="checkbox-input" for="check-5"></label>
															</div>
														</td>
														<td align="center">1800 ₽</td>
														<td colspan="2">Папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР) (мазок)</td>
													</tr>
													<tr>
														<td>
															<div class="form-group">
																<input class="visually-hidden" type="checkbox" name="all" id="check-6">
																<label class="checkbox-input" for="check-6"></label>
															</div>
														</td>
														<td align="center">1800 ₽</td>
														<td colspan="2">Папилломы человека 16, 18, 31, 33, 35, 39, 45, 51, 52, 56, 58, 59 типы (качественный, ПЦР) (мазок)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="basket-block">
										<div class="basket-block__wrapper">
											<h1 class="basket-block__title">Оплата
												<div class="basket-coupon">
													<input class="basket-coupon__input" type="text" name="coupon" placeholder="Купон на скидку">
													<button class="btn basket-coupon__btn" type="button" disabled>Активировать</button>
												</div>
											</h1>
											<div class="basket-block__cards">
												<div class="form-group">
													<input class="visually-hidden" type="radio" name="pay" id="card" checked>
													<label class="radio-input" for="card">
														<div class="radio-input__title">Банковской картой РФ</div>
														<div class="radio-input__subtitle">Вы можете оплатить с помощью банковской карты, выпущенной только  РФ</div>
														<div class="radio-input__icons"><img class="radio-input__icon" src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/visa.svg" alt="visa"><img class="radio-input__icon" src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/mastercard.svg" alt="mastercard">
														</div>
													</label>
												</div>
												<div class="form-group">
													<input class="visually-hidden" type="radio" name="pay" id="cash">
													<label class="radio-input" for="cash">
														<div class="radio-input__title">Электронными деньгами</div>
														<div class="radio-input__subtitle">Оплата покупки электронными деньгами</div>
														<div class="radio-input__icons"><img class="radio-input__icon" src="<?=$get_template_directory_uri?>/template-tilimed/images/icons/qiwi.svg" alt="qiwi">
														</div>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="row gy-2">
										<div class="col-12 col-md-6">
											<div class="basket-submit">
												<div class="basket-submit__value"><span class="basket-submit__title">Итого</span>
													<div class="basket-submit__price">3000</div>
												</div>
												<button class="btn btn-submit" type="submit">Оформить заказ и перейти к оплате</button>
												<div class="basket-submit__subtitle">Нажимая кнопку, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствие с политикой конфиденциальности, а также условиями продажи</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="basket-address">
												<div class="basket-address__title">Адрес выбранной клиники для приема материалов</div>
												<input class="basket-address__input" type="text" name="address" value="г.Москва, ул. Серпухова, д 20, с1">
												<button class="btn btn-primary" type="button" disabled>Выбрать</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-12 col-lg-4">
								<div class="basket-map"><img class="basket-map__iframe" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/map-test.jpg" alt="">
									<div class="basket-map__info">Если хотите изменить адрес клиники приема, выберите на карте подходящую и нажмите “Выбрать”.</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div><!-- Scripts Section  -->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711577082353"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711577082353"></script>
	</body>
</html>