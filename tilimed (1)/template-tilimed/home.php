<?php global $options, $get_template_directory_uri, $str1, $str_format1, $get_queried_object;
	/**
		* Template Name: Home 
	*/
	get_header();
	
	$nastrojki_dlya_straniczy = get_field('straniczy_glavnaya');
	//var_dump(get_field('straniczy_glavnaya'));
	
?>

<!-- Main Section  -->
<main class="main">
	<?php
		include(locate_template('template-tilimed/blocks/home/hero.php'));
		include(locate_template('template-tilimed/blocks/home/facilities.php'));
		include(locate_template('template-tilimed/blocks/home/about.php'));
		include(locate_template('template-tilimed/blocks/home/thesis.php'));
		include(locate_template('template-tilimed/blocks/home/map.php'));
		include(locate_template('template-tilimed/blocks/home/analyzes.php'));
		include(locate_template('template-tilimed/blocks/home/auth.php'));
	?>
</main><!-- Footer Section  -->

<?php get_footer()?>
