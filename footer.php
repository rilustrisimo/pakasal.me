<?php
/**
 * Footer template part.
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @package Eyorsogood_Design
 * @version   1.0.0
 */


$profile_pic = qed_get_option( 'profile_picture', 'option' );

do_action('eyor_after_main_content');
?>

<footer class="footer">
	<div class="footer__bottom">
		<div class="container footer-container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-btns">
						<div class="footer-btns__item"><a href="#" class="modal-btn" modal-id="accom"><i class="fa-solid fa-house"></i></a></div>
						<div class="footer-btns__item"><a href="#" class="modal-btn" modal-id="code"><i class="fa-solid fa-qrcode"></i></a></div>
						<div class="footer-btns__item"><a href="<?php echo get_permalink(63); ?>"><i class="fa-regular fa-square-plus"></i></a></div>
						<div class="footer-btns__item"><a href="#" class="modal-btn" modal-id="message"><i class="fa-regular fa-paper-plane"></i></a></div>
						<div class="footer-btns__item pp <?php echo (is_front_page())?'home':''; ?>"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo $profile_pic; ?>"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<input type="hidden" id="base-url" value="<?php echo home_url(); ?>">
<input type="hidden" id="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">
<input type="hidden" id="rand" value="<?php echo (isset($_GET['r']))?$_GET['r']:''; ?>">
<?php
get_template_part( 'templates/modals/page', 'rsvp' );
get_template_part( 'templates/modals/page', 'accom' );
get_template_part( 'templates/modals/page', 'code' );
get_template_part( 'templates/modals/page', 'contact' );
get_template_part( 'templates/modals/page', 'message' );
get_template_part( 'templates/modals/page', 'playlist' );
get_template_part( 'templates/modals/page', 'guests' );
get_template_part( 'templates/footer/footer', 'clean' );
