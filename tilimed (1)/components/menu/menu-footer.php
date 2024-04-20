<ul class="footer__menu-items">
	<?php
		
		$menu_name = 'Menu Footer'; // замените 'primary' на название своего меню
		
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
				$header_link = $ma['children'] ? 'burger__menu-item-check level_1 burger__manu__links-list-item-arrow burger__menu-mobile' : '';
			?>
			<li class="footer__menu-item menu-item-first"> <a class="footer__menu-item-first-color__url"  href="<?=$ma['url']?>"><?=$ma['name']?></a>
				<?php
					if($ma['children']){
					?>
					<ul class="footer__menu-items footer__menu-items-second">
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
										<li class="footer__menu-item menu-item-second">
											<a class="footer__menu-item-color__url" href="<?=$ct['url']?>"><?=$ct['name']?></a>
										</li>
										<?php
										}
									}
								}
							}
						?>
					</ul>
					<?php
					}
				?>
			</li>
			<?php
			}
		}
	?>	
</ul>