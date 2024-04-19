<?php //authorization.php forgot.php password.php register.php ?>
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
										<h1 class="auth-form__title">Авторизация на сайте</h1>
										<div class="auth-form__group">
											<label class="auth-form__label" for="login">Введите e-mail или телефон:</label>
											<input class="auth-form__input" type="text" name="login" placeholder="Введите e-mail или телефон:">
										</div>
										<div class="auth-form__buttons">
											<button class="btn btn-dashboard" type="submit">Продолжить</button>
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
		