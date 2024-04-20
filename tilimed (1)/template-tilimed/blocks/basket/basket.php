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
														