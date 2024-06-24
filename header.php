<?php
/**
 * Header template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package Eyorsogood_Design
 * @version   1.0.0
 */

get_template_part( 'templates/header/header', 'clean' );

$is_sticky_header = qed_get_option( 'sticky_header', 'option' );

if ( $is_sticky_header ) {
//	SD_Js_Client_Script::add_script( 'sticky-header', 'Theme.initStickyHeader();' );
	echo '<div class="header-wrap header-wrap--sticky-header">';
}
?>
<header class="header" role="banner">
	<div class="top_layer">
		<div class="header__content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12 header-content">
						<?php if(!is_front_page()): ?>
						<div class="back-btn-header"><a href="<?php echo get_home_url(); ?>"><i class="fa-solid fa-chevron-left"></i></a></div>
						<?php endif; ?>
						<div class="header-title"><?php echo (is_single())?'Post':'pakasal.me';?></div>
						<div class="messenger-btn"><a href="https://m.me/rouie" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a></div>
					</div><!-- .header__content -->
				</div>
			</div><!-- .container -->
		</div><!-- .header__content-wrap -->
	</div>
	<div class="clearfix"></div>
</header>
<?php if ( $is_sticky_header ) { echo '</div>'; }
SD_Js_Client_Script::add_script( 'initResizeHandler', 'Theme.initResizeHandler();' );
//SD_Js_Client_Script::add_script( 'initResizeHandler', 'Theme.initResizeHandler(' . wp_json_encode( $js_config ) . ');' );
get_template_part( 'templates/header/header', 'section' );
do_action('eyor_before_main_content');
