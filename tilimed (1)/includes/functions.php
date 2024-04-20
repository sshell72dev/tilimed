<?php
	//add_action('wp_loaded', 'my_custom_product_function');
	function my_custom_product_function() {
		set_time_limit(300);
		$dir = ABSPATH .'wp-content/uploads/luxe'; // Путь к папке с изображениями
		$files = scandir($dir);
		$p = '';
		foreach($files as $file) {
			if(is_file($dir . '/' . $file) && !is_dir($dir . '/' . $file)) {
				$image_path = $dir . '/' . $file;
				$image_name_base = basename($image_path); // Получаем имя изображения без расширения
				$image_name = pathinfo($image_path, PATHINFO_FILENAME);
				$file_info = pathinfo($image_path);
				$file_extension = $file_info['extension'];
				$product = wc_get_product( wc_get_product_id_by_sku( $image_name ) ); // Получаем продукт по артикулу
				
				if($product) {
					if (has_post_thumbnail($product->get_id())) {
						continue; // Пропускаем товар с изображением
					}
					$image_data = file_get_contents($image_path);
					$upload = wp_upload_bits($image_name_base, null, $image_data); // Загружаем изображение
					if(!$upload['error']) {
						$file_path = $upload['file'];
						$attachment = array(
						'guid' => $upload['url'],
						'post_mime_type' => 'image/jpeg',
						'post_title' => $image_name,
						'post_content' => '',
						'post_status' => 'inherit'
						);
						$attach_id = wp_insert_attachment($attachment, $file_path, $product->get_id()); // Вставляем вложение в медиабиблиотеку
						$product_id = $product->get_id();
						if (!is_wp_error($attach_id)) {
							require_once ABSPATH . 'wp-admin/includes/image.php';
							require_once ABSPATH . 'wp-admin/includes/file.php';
							require_once ABSPATH . 'wp-admin/includes/media.php';
							
							$attach_data = wp_generate_attachment_metadata($attach_id, $file_path);
							wp_update_attachment_metadata($attach_id, $attach_data);
							
							// Привязка изображения к продукту как миниатюры
							set_post_thumbnail($product_id, $attach_id);
							
							// Привязка изображения к продукту в галерее
							$product = wc_get_product($product_id);
							$gallery_ids = $product->get_gallery_image_ids();
							$gallery_ids[] = $attach_id;
							update_post_meta($product_id, '_product_image_gallery', implode(',', $gallery_ids));
						}
					} 
					var_dump($product->get_id(), $attach_id);
					
				}
			}
		}
	}
	
	// функция для получения массива названий и ссылок элементов меню
	function get_menu_items($items, $parent_id = 0, $level = 0, $max_level = 5) {
		$result = array();
		
		foreach ($items as $item) {
			$id = $item->object_id;
			$name = $item->title;
			$url = $item->url;
			$description = $item->description;
			$current_level = $level + 1;
			
			if ($item->menu_item_parent == $parent_id) {
				// элемент является дочерним
				$children = array();
				
				// если уровень вложенности меньше или равен максимальному уровню вложенности
				if ($current_level <= $max_level) {
					// получаем дочерние элементы
					$children = get_menu_items($items, $item->ID, $current_level, $max_level);
				}
				
				// добавляем элемент в массив дочерних элементов
				$result[] = array(
				'id' => $id,
				'name' => $name,
				'url' => $url,
				'level' => $level,
				'children' => $children,
				'description' => $description,
				);
			}
		}
		
		return $result;
	}
	
	function getNoun($number, $one, $two, $five) {
		$number = abs($number);
		$number %= 100;
		if ($number >= 5 && $number <= 20) {
			return $five;
		}
		$number %= 10;
		if ($number == 1) {
			return $one;
		}
		if ($number >= 2 && $number <= 4) {
			return $two;
		}
		return $five;
	}
	
	
	function rc($input) {
		
	}
	
	function transliterate($input) {
		$converter = array(
		'a' => 'а', 'b' => 'б', 'c' => 'ц', 'd' => 'д', 'e' => 'е', 'f' => 'ф', 'g' => 'г',
		'h' => 'х', 'i' => 'и', 'j' => 'й', 'k' => 'к', 'l' => 'л', 'm' => 'м', 'n' => 'н',
		'o' => 'о', 'p' => 'п', 'q' => 'к', 'r' => 'р', 's' => 'с', 't' => 'т',
		'u' => 'у', 'v' => 'в', 'w' => 'в', 'x' => 'кс', 'y' => 'й', 'z' => 'з',
		'A' => 'А', 'B' => 'Б', 'C' => 'Ц', 'D' => 'Д', 'E' => 'Е', 'F' => 'Ф', 
		'G' => 'Г', 'H' => 'Х', 'I' => 'И', 'J' => 'Й', 'K' => 'К', 'L' => 'Л',
		'M' => 'М', 'N' => 'Н', 'O' => 'О', 'P' => 'П', 'Q' => 'К', 'R' => 'Р',
		'S' => 'С', 'T' => 'Т',  'U' => 'У',  'V' => 'В',  'W' =>  'В',
		'X' =>  'Кс',  'Y' =>  'Й',  'Z' =>  'З'
		);
		return strtr($input, $converter);
	}
	
	function loop_products($args, $anima = true){
		$query = new WP_Query( $args );
		
		// Цикл
		if ( $query->have_posts() ) {
			$max_num_pages = $query->max_num_pages;
			$i = 0;
			while ( $query->have_posts() ) {
				$i++;
				$query->the_post();
				$product_id = get_the_ID();
				//$dlya_kartochki = get_field('dlya_kartochki')['standartnyj_blok'];
				$terms = get_the_terms( $product_id, 'brand' );
				
				if ( $terms && ! is_wp_error( $terms ) ) {
					$first_term = current($terms);
					$brand_name = $first_term->name;
				}
				if($anima){
					switch ($i) {
						case 1:
						$class = 'animate-block animate-block--left';
						break;
						case 5:
						$class = 'animate-block';
						break;
						default:
						$class = '';
					}
					}else{
					$class = '';
				}
			?>
			<a href="<?=get_the_permalink()?>" class="<?=$class?> product-item products-list__item">
				<picture><img src="<?=get_the_post_thumbnail_url($product_id, 'full')?>" alt="" class="product-item__img"></picture>
				<div class="product-item__content">
					<div class="product-item__brand"><?=$brand_name?></div>
					<div class="product-item__title"><?=get_the_title()?></div>
					<p class="product-item__description"><?=get_the_content()?></p>
				</div>
				<div href="<?=get_the_permalink()?>" class="product-item__link">Подробнее
					<svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19.7857 4.03083C20.1749 4.415 20.3949 4.94583 20.3999 5.5C20.3982 6.04833 20.1849 6.58 19.7991 6.97166L16.5341 10.3725C16.4524 10.4575 16.3432 10.5 16.2332 10.5C16.1291 10.5 16.0249 10.4617 15.9449 10.3833C15.7791 10.225 15.7732 9.96 15.9324 9.79416L19.2016 6.38916C19.3374 6.25166 19.4374 6.09083 19.4974 5.91666H0.816569C0.586569 5.91666 0.399902 5.73 0.399902 5.5C0.399902 5.27 0.586569 5.08333 0.816569 5.08333H19.4924C19.4299 4.91 19.3291 4.75167 19.1941 4.61833L15.8982 1.24333C15.7374 1.07916 15.7407 0.814998 15.9057 0.654165C16.0707 0.494165 16.3341 0.496665 16.4949 0.661665L19.7849 4.03083H19.7857Z" fill="black"/>
					</svg>
				</div>
			</a>
			<?php
			}
		}
		wp_reset_query();
	}		
	
