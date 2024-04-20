<?php
	/**
		* Generates array of pagination links.
		*
		* @author Kama (wp-kama.com)
		* @varsion 2.5
		*
		* @param array $args {
		*
		*     @type int    $total        Maximum allowable pagination page.
		*     @type int    $current      Current page number.
		*     @type string $url_base     URL pattern. Use `{pagenum}` placeholder.
		*     @type string $first_url    URL to first page. Default: '' - taken automaticcaly from $url_base.
		*     @type int    $mid_size     Number of links before/after current: 1 ... 1 2 [3] 4 5 ... 99. Default: 2.
		*     @type int    $end_size     Number of links at the edges: 1 2 ... 3 4 [5] 6 7 ... 98 99. Default: 1.
		*     @type bool   $show_all     true - Show all links. Default: false.
		*     @type string $a_text_patt  `%s` will be replaced with number of pagination page. Default: `'%s'`.
		*     @type bool   $is_prev_next Whether to show prev/next links. « Previou 1 2 [3] 4 ... 99 Next ». Default: false.
		*     @type string $prev_text    Default: `« Previous`.
		*     @type string $next_text    Default: `Next »`.
		* }
		*
		* @return array
	*/
	function kama_paginate_links_data( array $args ): array {
		global $wp_query;
		
		$args += [
		'total'        => 1,
		'current'      => 0,
		'url_base'     => '/{pagenum}',
		'first_url'    => '',
		'mid_size'     => 2,
		'end_size'     => 1,
		'show_all'     => false,
		'a_text_patt'  => '%s',
		'is_prev_next' => false,
		'prev_text'    => '« Previous',
		'next_text'    => 'Next »',
		];
		
		$rg = (object) $args;
		
		$total_pages = max( 1, (int) ( $rg->total ?: $wp_query->max_num_pages ) );
		
		if( $total_pages === 1 ){
			return [];
		}
		
		// fix working parameters
		
		$rg->total = $total_pages;
		$rg->current = max( 1, abs( $rg->current ?: get_query_var( 'paged', 1 ) ) );
		
		$rg->url_base = $rg->url_base ?: str_replace( PHP_INT_MAX, '{pagenum}', get_pagenum_link( PHP_INT_MAX ) );
		$rg->url_base = wp_normalize_path( $rg->url_base );
		
		if( ! $rg->first_url ){
			// /foo/page(d)/2 >>> /foo/ /foo?page(d)=2 >>> /foo/
			$rg->first_url = preg_replace( '~/paged?/{pagenum}/?|[?]paged?={pagenum}|/{pagenum}/?~', '', $rg->url_base );
			$rg->first_url = user_trailingslashit( $rg->first_url );
		}
		
		// core array
		
		if( $rg->show_all ){
			$active_nums = range( 1, $rg->total );
		}
		else {
			
			if( $rg->end_size > 1 ){
				$start_nums = range( 1, $rg->end_size );
				$end_nums = range( $rg->total - ($rg->end_size - 1), $rg->total );
			}
			else {
				$start_nums = [ 1 ];
				$end_nums = [ $rg->total ];
			}
			
			$from = $rg->current - $rg->mid_size;
			$to = $rg->current + $rg->mid_size;
			
			if( $from < 1 ){
				$to = min( $rg->total, $to + absint( $from ) );
				$from = 1;
				
			}
			if( $to > $rg->total ){
				$from = max( 1, $from - ($to - $rg->total) );
				$to = $rg->total;
			}
			
			$active_nums = array_merge( $start_nums, range( $from, $to ), $end_nums );
			$active_nums = array_unique( $active_nums );
			$active_nums = array_values( $active_nums ); // reset keys
		}
		
		// fill by core array
		
		$pages = [];
		
		if( 1 === count( $active_nums ) ){
			return $pages;
		}
		
		$item_data = static function( $num ) use ( $rg ){
			
			$data = [
			'is_current'   => false,
			'page_num'     => null,
			'url'          => null,
			'link_text'    => null,
			'is_prev_next' => false,
			'is_dots'      => false,
			];
			
			if( 'dots' === $num ){
				
				return (object) ( [
				'is_dots' => true,
				'link_text' => '…',
				] + $data );
			}
			
			$is_prev = 'prev' === $num && ( $num = max( 1, $rg->current - 1 ) );
			$is_next = 'next' === $num && ( $num = min( $rg->total, $rg->current + 1 ) );
			
			$data = [
			'is_current'   => ! ( $is_prev || $is_next ) && $num === $rg->current,
			'page_num'     => $num,
			'url'          => 1 === $num ? $rg->first_url : str_replace( '{pagenum}', $num, $rg->url_base ),
			'is_prev_next' => $is_prev || $is_next,
			] + $data;
			
			if( $is_prev ){
				$data['link_text'] = $rg->prev_text;
			}
			elseif( $is_next ) {
				$data['link_text'] = $rg->next_text;
			}
			else {
				$data['link_text'] = sprintf( $rg->a_text_patt, $num );
			}
			
			return (object) $data;
		};
		
		foreach( $active_nums as $indx => $num ){
			
			$pages[] = $item_data( $num );
			
			// set dots
			$next = $active_nums[ $indx + 1 ] ?? null;
			if( $next && ($num + 1) !== $next ){
				$pages[] = $item_data( 'dots' );
			}
		}
		
		if( $rg->is_prev_next ){
			$rg->current !== 1 && array_unshift( $pages, $item_data( 'prev' ) );
			$rg->current !== $rg->total && $pages[] = $item_data( 'next' );
		}
		
		return $pages;
	}
	
	function pagination_front($links_data){
		if( $links_data ){
		?>
		<ul class="pagination_ul">
			<?php foreach( $links_data as $link ) { 
				//var_dump($link);
			?>
			<?php if ( $link->is_prev_next ) { ?>
				
				<?php
					if($link->link_text == 'Назад'){
					?>
					<li class="pagination_li">
						<a class="pagination_arrow" href="<?php esc_attr_e( $link->url ) ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M14.5302 18.5303C14.8231 18.2374 14.8231 17.7626 14.5302 17.4697L9.66155 12.601C9.45479 12.3943 9.33203 12.2707 9.24818 12.1719C9.19701 12.1116 9.17959 12.0822 9.17526 12.074C9.16033 12.0258 9.16033 11.9742 9.17526 11.926C9.17959 11.9178 9.19701 11.8884 9.24818 11.8281C9.33203 11.7293 9.45479 11.6057 9.66155 11.399L14.5302 6.53033C14.8231 6.23744 14.8231 5.76256 14.5302 5.46967C14.2373 5.17678 13.7624 5.17678 13.4695 5.46967L8.58235 10.3568C8.40027 10.5389 8.23304 10.7061 8.10467 10.8573C7.96628 11.0203 7.82959 11.2134 7.74971 11.4592C7.63551 11.8107 7.63551 12.1893 7.74971 12.5408C7.82959 12.7866 7.96628 12.9797 8.10467 13.1427C8.23304 13.2939 8.40027 13.4611 8.58235 13.6432C8.58852 13.6493 8.59469 13.6555 8.60089 13.6617L13.4695 18.5303C13.7624 18.8232 14.2373 18.8232 14.5302 18.5303Z" fill="#4B5563"/>
							</svg>
						</a>
					</li>
					<?php
						}else{
					?>
					<li class="pagination_li pagination_li_pd">
						<a class="pagination_arrow pagination_arrow_rotate" href="<?php esc_attr_e( $link->url ) ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M14.5302 18.5303C14.8231 18.2374 14.8231 17.7626 14.5302 17.4697L9.66155 12.601C9.45479 12.3943 9.33203 12.2707 9.24818 12.1719C9.19701 12.1116 9.17959 12.0822 9.17526 12.074C9.16033 12.0258 9.16033 11.9742 9.17526 11.926C9.17959 11.9178 9.19701 11.8884 9.24818 11.8281C9.33203 11.7293 9.45479 11.6057 9.66155 11.399L14.5302 6.53033C14.8231 6.23744 14.8231 5.76256 14.5302 5.46967C14.2373 5.17678 13.7624 5.17678 13.4695 5.46967L8.58235 10.3568C8.40027 10.5389 8.23304 10.7061 8.10467 10.8573C7.96628 11.0203 7.82959 11.2134 7.74971 11.4592C7.63551 11.8107 7.63551 12.1893 7.74971 12.5408C7.82959 12.7866 7.96628 12.9797 8.10467 13.1427C8.23304 13.2939 8.40027 13.4611 8.58235 13.6432C8.58852 13.6493 8.59469 13.6555 8.60089 13.6617L13.4695 18.5303C13.7624 18.8232 14.2373 18.8232 14.5302 18.5303Z" fill="#4B5563"/>
							</svg>
						</a>
					</li>
					<?php
					}
				?>
				<?php }else{
					$aktive = $link->is_current ? 'aktive' : '';
				?>
				<li class="pagination_li2">
					<a class="pagination_number <?=$aktive?>" href="<?php esc_attr_e( $link->url ) ?>">
						<?php _e( $link->link_text ) ?>
					</a>
				</li>
				<?php 
			} 
			} 
		?>
	</ul>
	
	<?php
	}
}			