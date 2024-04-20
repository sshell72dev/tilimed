<nav class="header__menu">
	<ul class="header__links-list level_1">
		<?php
			
			$menu_name = 'Menu 1'; // замените 'primary' на название своего меню
			
			// получаем объект меню
			$menu_obj = get_term_by('name', $menu_name, 'nav_menu');
			
			// получаем элементы меню
			$menu_items = wp_get_nav_menu_items($menu_obj->term_id);
			
			// получаем массив названий и ссылок элементов меню с вложенностями
			$menu_array = get_menu_items($menu_items);
			
			$menu_front_array = $menu_array;
			//var_dump($menu_array, 'ffffffffffffffffffffff');
			if($menu_array){
				$i = 0;
				foreach($menu_array as $ma){
					$i++;
					$header_link = $ma['children'] ? 'header__links-list-item-arrow' : '';
				?>
				<li class="header__links-list-item level_1 <?=$header_link?>">
					<a href="<?=$ma['url']?>" class="header__link level_1"><?=$ma['name']?></a>
					<?php
						if($ma['children']){
						?>
						<div class="header__links-dropdown level_2">
							<ul class="header__links-list level_2">
								<?php
									$chunks = array_chunk($ma['children'], 4, true);
									if($chunks){
										foreach($chunks as $ch){
											$header_absolute_block = $i != 1 ? 'header_absolute_block3' : 'header_absolute_block';
										?>
										
										<?php
											if($ch){
												foreach($ch as $ct){
													$item_children = $ct['children'] ? 'header__links-list-item-arrow-right' : '';
												?>
												<li class="header__links-list-item level_2 <?=$item_children?>">
													<a href="<?=$ct['url']?>" class="header__link level_2 "><?=$ct['name']?></a>
													
													<?php
														if($ct['children']){
														?>
														<div class="header__links-dropdown level_3">
															<ul class="header__links-list level_3">
																<?php
																	$chunks_ch = array_chunk($ct['children'], 4, true);
																	if($chunks_ch){
																		foreach($chunks_ch as $ch_ch){
																			$header_absolute_block_ch = $i != 1 ? 'header_absolute_block3' : 'header_absolute_block';
																		?>
																		
																		<?php
																			if($ch_ch){
																				foreach($ch_ch as $ct_ch){
																					$item_children_ch = $ct_ch['children'] ? 'header__links-list-item-arrow-right' : '';
																				?>
																				<li class="header__links-list-item level_3">
																					<a href="<?=$ct_ch['url']?>" class="header__link level_3"><?=$ct_ch['name']?></a>
																				</li>
																				<?php
																				}
																			}
																		?>
																		<?php
																		}
																	}
																?>
															</ul>
														</div>
														<?php
														}
													?>
												</li>
												<?php
												}
												}
												?>
												<?php
										}
									}
								?>
							</ul>
							</div>
							<?php
							}
						?>
						</li>
						<?php
						}
							}
						?>
						</ul>
						</nav>
										