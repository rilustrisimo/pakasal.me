<?php
/**
 * Template Name: Media Upload
 *
 * @author    eyorsogood.com, Rouie Ilustrisimo
 * @version   1.0.0
 */

/**
 * No direct access to this file.
 *
 * @since 1.0.0
 */
defined( 'ABSPATH' ) || die();

get_header();

$theme = new Theme();

$fields = get_fields(get_the_ID());

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="container media-upload">
			<?php if(is_user_logged_in()): ?>
				<div class="row">
					<div class="col-md-12 title">
					Upload Memories
					</div>
					<div class="col-md-12 info">
						<p>You are invited to upload your own photographs here for everyone to enjoy and share.</p>
					</div>
				</div>
			<?php else: ?>
				<div class="row">
                <div class="col-md-12 title">
                Login to begin uploading
                </div>
                <div class="col-md-12 info">
                    <p>The login details will be distributed either on the day of the event or one day prior to the wedding day.</p>
                </div>
            </div>
			<?php endif; ?>
			<div class="row">
				<div class="col-md-12">
					<?php if(is_user_logged_in()): ?>
					<?php $theme->createAcfForm(139, 'uploads'); ?>
					<?php else: ?>
					<?php echo do_shortcode('[ultimatemember form_id="163"]'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
