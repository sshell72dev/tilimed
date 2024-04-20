<?php global $options, $get_template_directory_uri, $str1, $str_format1,$str2, $str_format2, $get_queried_object, $soczseti;?>
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
<? if (!gpsiChecker()) {
	
	wp_footer();
	echo $options['counters_code_header'];
} 
?>	
</body>
</html>