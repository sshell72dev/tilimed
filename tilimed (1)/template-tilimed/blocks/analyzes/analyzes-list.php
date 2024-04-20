<?php //analyzes-list.php  analyzes-search.php  analyzes.php dashboard-analyz.php dashboard-search.php ?>
<section class="analyzes">
	<div class="container">
		<div class="analyzes-filter">
			<div class="analyzes-filter__title">Анализы</div>
			<div class="analyzes-filter__items"><a class="analyzes-filter__item js-to-anchor" href="#quality">Качественные</a><a class="analyzes-filter__item js-to-anchor" href="#quantitative">Количественные</a></div>
		</div>
		<div class="analyzes-section facilities__wrapper section section--first">
			<div class="facilities__block">
				<div class="facilities__tags">
					<div class="facilities__tag facilities__tag--black">Достоверность</div>
					<div class="facilities__tag facilities__tag--blue">Анонимность</div>
					<div class="facilities__tag facilities__tag--pink">Удобство</div>
				</div>
				<p class="facilities__body">-	Возможность сдачи анализов <span class="primary-text font-medium">в комфортных условиях</span> дома или уборной в лаборатории<br><br>-	<span class="primary-text font-medium">Информативность</span> самодиагностики равноценна информативности забора анализов квалифицированными медицинскими работниками<br><br>-	Сотрудничество с крупными сетями лабораторий (гемотест, лабстори), расположенными по всей территории России <br><br>-	<span class="primary-tex font-mediumt">Уменьшение стоимости</span> анализов до 50% от изначального тарифа.</p>
			</div>
			<div class="facilities__sliders">
				<div class="facilities__slider"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-11.jpg" alt="bg-11"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-9.jpg" alt="bg-9"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-1.jpg" alt="bg-1"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/quality-7.jpg" alt="quality-7">
				</div>
				<div class="facilities__slider"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-2.jpg" alt="bg-2"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-12.jpg" alt="bg-12"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-13.jpg" alt="bg-13"><img class="facilities__slide" src="<?=$get_template_directory_uri?>/template-tilimed/images/content/bg-7.jpg" alt="bg-7">
				</div>
			</div>
		</div>
		<form class="analyzes-form section" action="/">
			<label class="analyzes-form__label" for="search">
				<svg class="analyzes-form__icon">
					<use xlink:href="<?=$get_template_directory_uri?>/template-tilimed/images/sprites.svg#search"></use>
				</svg>
				<input class="analyzes-form__input" id="search" type="search" name="q" placeholder="Поиск по названию анализа">
			</label>
		</form>
		<div class="analyzes-content">
			<div class="analyzes-content__item section" id="quality">
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
			<div class="analyzes-content__item section" id="quantitative">
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
</section>
