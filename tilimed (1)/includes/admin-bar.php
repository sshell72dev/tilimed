<?
#wp-admin-bar снизу
if (is_user_logged_in()) {
    add_action('get_header', function() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    });

add_action('get_header', function() {
    	remove_action('wp_head', '_admin_bar_bump_cb');
    });

    add_action('wp_head', function() {
    	echo '
    	<style type="text/css">
    	html{margin-bottom:0 !important}
    	* html body{margin-bottom:0 !important}
    	#wpadminbar{top:auto !important;bottom:0;}
    	#footer {margin-bottom:32px;}
        @media screen and (max-width: 782px) {
            #footer {margin-bottom:46px;}
        }
    	#wpadminbar .menupop .ab-sub-wrapper{bottom:0;-moz-box-shadow:2px -2px 5px rgba(0,0,0,.2);-webkit-box-shadow:2px -2px 5px rgba(0,0,0,.2);box-shadow:2px -2px 5px rgba(0,0,0,.2)}
    	@media screen and ( max-width:782px ){
    		html{margin-bottom:46px !important}
    		* html body{margin-bottom:46px !important}
    		#wpadminbar{position:fixed}
    		#wpadminbar .menupop .ab-sub-wrapper{bottom:46px}
    	}
    	</style>
    	';
    });
}
?>
