<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
		<meta name="description" content="Описание страницы">
		<meta name="format-detection" content="telephone=no">
		<title>База знаний</title><!-- Styles Section  -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=$get_template_directory_uri?>/template-tilimed/css/main.css?v=1711572605137">
	</head>
	<body>
		<div class="site"><!-- Header Section  -->
			<header class="header">
				<div class="container">
					<div class="header__wrapper"><a class="header__logo logo" href="/"><img class="logo__img" src="<?=$get_template_directory_uri?>/template-tilimed/logo.svg" alt="logo" width="175" height="60"></a>
						<div class="header__navbar">
							<nav class="header__menu"><a class="header__link" href="/analyzes.html">Анализы</a><a class="header__link" href="/maps.html">Карта лабораторий</a><a class="header__link" href="/faq.html">Вопрос-ответ</a><a class="header__link" href="/instructions.html">Инструкции</a><a class="header__link header__link--active" href="/about.html">База знаний</a>
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
				<section class="about section section--first">
					<div class="container">
						<div class="about__wrapper">
							<h2 class="about__title">Как мы работаем</h2>
						</div>
						<div class="row gy-2">
							<div class="col-12 col-md-6"><a class="about-block about-block--first" href="/login.html">
									<div class="about-block__icon">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-up-deg"></use>
										</svg>
									</div>
									<div class="about-block__count">01.</div>
									<div class="about-block__body">
										<ul class="about-block__lists">
											<li class="about-block__list">Регистрируемся на <b>Tilimed.com</b></li>
											<li class="about-block__list">Получаем инструкцию</li>
											<li class="about-block__list">Выбираем на сайте необходимые для <br/>тестирования анализы</li>
											<li class="about-block__list">Оплачиваем</li>
										</ul>
									</div><img class="about-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/icon-1.svg" alt="icon-1" loading="lazy"></a>
							</div>
							<div class="col-12 col-md-6"><a class="about-block about-block--second" href="/instructions.html">
									<div class="about-block__icon">
										<svg>
											<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-up-deg"></use>
										</svg>
									</div>
									<div class="about-block__count">02.</div>
									<div class="about-block__body">
										<ul class="about-block__lists">
											<li class="about-block__list">Посещаем лабораторию-партнера</li>
											<li class="about-block__list">Говорим кодовое словосочетание “Tilimed Self-test”</li>
											<li class="about-block__list">Берем виалу - специальный контейнер <br/>для набора материала</li>
											<li class="about-block__list">Самостоятельно берем материал, <br/><b>следуя инструкциям</b></li>
										</ul>
									</div><img class="about-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/icon-2.svg" alt="icon-2" loading="lazy"></a>
							</div>
							<div class="col-12 col-md-6">
								<div class="about-block">
									<div class="about-block__count">03.</div>
									<div class="about-block__body">
										<ul class="about-block__lists">
											<li class="about-block__list">Возвращаем виалу в лабораторию, <br/>показываем талон регистрации и оплаты</li>
											<li class="about-block__list">Ожидаем результат</li>
										</ul>
									</div><img class="about-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/icon-3.svg" alt="icon-3" loading="lazy">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about-block">
									<div class="about-block__count">04.</div>
									<div class="about-block__body">
										<ul class="about-block__lists">
											<li class="about-block__list">Получаем результат сразу по готовности <br/>в кратчайшие сроки:</li>
										</ul>
										<ul class="about-block__desc">
											<li>в электронном виде</li>
											<li>с клиническими рекомендациями <br/>специалистов</li>
										</ul>
									</div><img class="about-block__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/icon-4.svg" alt="icon-4" loading="lazy">
								</div>
							</div>
						</div>
						<div class="row gy-2 section">
							<div class="col-12 col-md-6"><a class="about-link" href="javascript:void(0);" data-modal-open="about-1">
									<svg class="about-link__icon">
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-up-deg-grey"></use>
									</svg>
									<div class="about-link__title">Урогенитальный микоплазмоз</div>
									<div class="about-link__subtitle">Инфекционное заболевание, передающееся половым путём, возбудителями которого являются Mycoplasma genitalium/hominis.</div></a></div>
							<div class="col-12 col-md-6"><a class="about-link" href="javascript:void(0);" data-modal-open="about-2">
									<svg class="about-link__icon">
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-up-deg-grey"></use>
									</svg>
									<div class="about-link__title">ЗППП и бесплодие</div>
									<div class="about-link__subtitle">Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза.</div></a></div>
							<div class="col-12 col-md-6"><a class="about-link" href="javascript:void(0);" data-modal-open="about-3">
									<svg class="about-link__icon">
										<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#arrow-up-deg-grey"></use>
									</svg>
									<div class="about-link__title">Сифилис. Симптомы. Признаки</div>
									<div class="about-link__subtitle">Сифилис- это инфекция, передаваемая половым путем (ИППП).</div></a></div>
						</div>
						<div class="about-section d-none d-md-grid">
							<div class="about-section__item">
								<div class="accardions">
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Почему у нас дешевле, чем в лаборатории или медицинском центре?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Нужны ли показания для выбора анализов? Что такое клинические рекомендации?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Можно ли проконсультироваться с врачом?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Где вы работаете?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Можно ли вызвать курьера для сдачи тестов?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Делаете ли вы анализы на COVID?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Можно ли оплатить сразу в лаборатории?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">С какого возраста можно проходить тестирование?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Интерпретация результатов? Что означают результаты?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Что может влиять на результат? Бывают ли ошибки в результатах?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
									<div class="accardions__item js-accardion-toggle">
										<div class="accardions__header">
											<button class="accardions__title" type="button">Через какое время после приёма лекарств можно сдать анализы?</button>
										</div>
										<div class="accardions__body js-accardion-body">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique asperiores ut ipsum quo provident ea consequatur recusandae est accusamus quas atque deserunt ipsam perspiciatis inventore maxime eligendi, quaerat itaque! Recusandae!</p>
											<ul>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
												<li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
											</ul>
											<p>
												 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptates eius itaque? Provident laborum nobis in, et distinctio porro labore atque laboriosam a dolorum sint sapiente dolores nulla voluptatum est.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="about-section__item d-none d-lg-block"><img class="about-section__image" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-1.jpg" alt="about" width="100%" height="auto"></div>
						</div>
						<div class="about-instruction section">
							<div class="about-instruction__header">
								<h3 class="about-instruction__title">Инструкции</h3>
								<p class="about-instruction__subtitle">Здесь мы описали подробные инструкции по сбору <br/> анализов для мужчин и женщин. Выбрав анализ,<br/> обязательно внимательно следуйте списку действий<br/> ниже</p>
								<div class="row d-none d-md-flex">
									<div class="col-6"><a class="about-instruction__header-title js-to-anchor" href="#forman">ДЛЯ МУЖЧИН</a></div>
									<div class="col-6"><a class="about-instruction__header-title js-to-anchor" href="#forwoman">ДЛЯ ЖЕНЩИН</a></div>
								</div>
							</div>
							<div class="about-instruction__content section">
								<div class="row">
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
				</section>
				<?php
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
			<div class="modal" aria-hidden="true" id="about-1">
				<div class="modal__overlay" tabindex="-1" data-modal-close="data-modal-close">
					<div class="modal__container" role="dialog" aria-modal="true">
						<button class="modal__close" aria-label="Close modal" data-modal-close="data-modal-close">
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
												<h2 class="modal-block__title">Урогенитальный микоплазмоз</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">Урогенитальный микоплазмоз</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">Урогенитальный микоплазмоз</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
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
			<div class="modal" aria-hidden="true" id="about-2">
				<div class="modal__overlay" tabindex="-1" data-modal-close="data-modal-close">
					<div class="modal__container" role="dialog" aria-modal="true">
						<button class="modal__close" aria-label="Close modal" data-modal-close="data-modal-close">
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
												<h2 class="modal-block__title">ЗППП и бесплодие</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">ЗППП и бесплодие</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">ЗППП и бесплодие</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
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
			<div class="modal" aria-hidden="true" id="about-3">
				<div class="modal__overlay" tabindex="-1" data-modal-close="data-modal-close">
					<div class="modal__container" role="dialog" aria-modal="true">
						<button class="modal__close" aria-label="Close modal" data-modal-close="data-modal-close">
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
												<h2 class="modal-block__title">Сифилис. Симптомы. Признаки</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">Сифилис. Симптомы. Признаки</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="modal-block">
												<h2 class="modal-block__title">Сифилис. Симптомы. Признаки</h2>
												<div class="modal-block__item">
													<p>
														 Инфекции, передающиеся половым путем, могут вызывать воспалительные заболевания органов малого таза. Вот некоторые из них:</p>
													<ul>
														<li>Папилломавирусная инфекция.</li>
														<li>
															 Урогенитальный хламидиоз.</li>
														<li>
															 Урогенитальный трихомониаз</li>
														<li>
															 Генитальный герпес</li>
														<li>
															 Микоплазменная инфекция</li>
													</ul>
													<p>Эти инфекции могут передаваться от матери ребенку во время беременности, родов, вызывая патологию беременности, плода и новорожденного, пневмонию новорожденных и низкий вес при рождении, поэтому, своевременное выявление, профилактика и лечение ИППП являются важными аспектами охраны здоровья населения.<br/>Часто эти инфекции могут протекать бессимптомно или с невыраженными симптомами, при этом они могут вызывать тяжелые осложнения, такие как: как уретрит, простатит, пиелонефрит, артрит, послеродовый эндометрит.</p>
													<p>
														 Возможные симптомы инфекций, передающихся половым путем:</p>
													<ul> 
														<li>
															 выделения из половых путей</li>
														<li>
															 зуд, жжение</li>
														<li>
															 отечность тканей влагалища и вульвы</li>
														<li>
															 высыпания на наружных половых органах в виде пузырьков, которые в дальнейшем вскрываются с образованием эрозий</li>
														<li>
															 пальцеобразные или бородавчатые разрастания единичные, множественные и сливные образования</li>
														<li>
															 дискомфорт или болезненность в области наружных половых органов и малого таза, возникающие при половых контактах</li>
														<li>
															 дискомфорт или болезненность при мочеиспускании</li>
													</ul>
													<p>
														 Последствия от перенесенного или хронического воспалительного процесса бывают достаточно серьезными. Он — один из самых частых причин развития бесплодия. В пораженных инфекцией маточных трубах разрастается соединительная ткань, трубы становятся непроходимыми, и сперматозоид не может добраться до яйцеклетки. Чем чаще женщина переносила ВЗОМТ, тем выше вероятность бесплодия (15% при однократном ВЗОМТ, 35% при двух случаях и от 50% при трех и более).</p>
													<p>
														 Еще одно неблагоприятное последствие — развитие внематочной беременности. Это также связано с непроходимостью трубы, но в данном случае продвигаться по ней не может уже не сперматозоид, а оплодотворенная яйцеклетка.<br/>Лечение непроходимости маточных труб возможно с помощью хирургического вмешательства, в случае неуспеха может потребоваться использование вспомогательных репродуктивных технологий.</p>
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
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/vendor.js?v=1711572605139"></script>
		<script src="<?=$get_template_directory_uri?>/template-tilimed/js/main.js?v=1711572605139"></script>
	</body>
</html>