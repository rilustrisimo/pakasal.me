<?php
/**
 * Template Name: Main Page
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

$profile_pic = qed_get_option( 'profile_picture', 'option' );
$fields = get_fields(get_the_ID());
$guests = $theme->createQuery('guests');
$uploads = $theme->createQuery('uploads');
$posts = get_posts(array(
    'post_status' => 'publish', // Only get published posts
	'order' => 'ASC',
	'nopaging'    => true,
));

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) { the_post(); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-profile">
						<div class="section-profile__profpic"><img src="<?php echo $profile_pic; ?>"></div>
						<div class="section-profile__misc">
							<div class="section-profile__handle">Celebrate with us!</div>
							<div class="section-profile__buttons">
								<a href="#" class="modal-btn" modal-id="rsvp">RSVP</a>
								<a href="#" class="modal-btn" modal-id="contact">Contact us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-desc">
						<div class="section-desc__title">Rouie & Jazzy</div>
						<div class="section-desc__content"><?php echo $fields['description_content']; ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="highlights">
						<?php 
						$highlight_counter = 0;
						foreach($fields['highlights'] as $item): 
							$highlight_counter++;
						?>
							<div class="highlights__item">
								<div>
								<?php
								$media_counter = 0;
								foreach($item['gallery'] as $media):
									$file_url = $media['url'];
									$file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
					
									// Check if the file is an image or video
									$is_image = in_array(strtolower($file_extension), ['jpg', 'jpeg', 'png', 'gif']);
									$is_video = in_array(strtolower($file_extension), ['mp4', 'webm', 'ogg']);
									
									// Increment the media counter for unique fancybox grouping
									$media_counter++;
								?>
									<?php if ($is_image): ?>
										<a href="<?php echo $file_url; ?>" 
										data-fancybox="gallery<?php echo $highlight_counter; ?>" 
										>
											<img src="<?php echo $file_url; ?>" alt="Highlight Image">
										</a>
									<?php elseif ($is_video): ?>
										<a href="<?php echo $file_url; ?>" 
										data-fancybox="gallery<?php echo $highlight_counter; ?>" 
										>
											<img src="path/to/placeholder/image.jpg" alt="Highlight Video">
										</a>
									<?php else: ?>
										<!-- Handle other file types or provide a fallback -->
										<p>Unsupported file type: <?php echo $file_extension; ?></p>
									<?php endif; ?>
								<?php endforeach; ?>
								</div>
								<div class="highlights__title"><div><?php echo $item['title']; ?></div></div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="padding: 0;">
					<div class="numbers">
						<div class="numbers__item">
							<div class="value"><?php echo count($posts); ?></div>
							<div class="title">posts</div>
						</div>
						<a href="<?php echo get_permalink(63); ?>">
						<div class="numbers__item">
							<div class="value"><?php echo count($uploads->posts); ?></div>
							<div class="title">uploads</div>
						</div>
						</a>
						<a href="#" class="modal-btn" modal-id="guests">
						<div class="numbers__item">
							<div class="value"><?php echo count($guests->posts); ?></div>
							<div class="title">guests</div>
						</div>
						</a>
					</div>
				</div>
			</div>

			<div class="row" style="position:relative;">
				<div class="col-md-12">
					<div class="functions">
						<div class="functions__item">
							<a href="#" class="show-all active"><i class="fa-solid fa-border-all"></i></a>
						</div>
						<div class="functions__item">
							<a href="https://maps.app.goo.gl/xNTBvFphaTfHPAWD9" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
						</div>
						<div class="functions__item">
							<a href="#" class="upload-btn"><i class="fa-regular fa-square-caret-up"></i></a>
						</div>
						<div class="functions__item">
							<a href="#" class="gift-btn"><i class="fa-solid fa-gift"></i></a>
						</div>
						<div class="functions__item">
							<a href="#" class="modal-btn" modal-id="playlist"><i class="fa-solid fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row posts">
				<?php foreach($posts as $p): ?>
				<div class="col-4 col-sm-4 col-md-4 col-custom <?php echo (get_field('gift', $p->ID))?'is-gift':''; ?>">
					<div class="posts__item">
					<a href="<?php echo get_permalink($p->ID); ?>">
						<?php
							$gallery = get_field('gallery', $p->ID);
							$thumb = $gallery[0]['url'];
						?>
						<?php if(count($gallery) > 1): ?>
						<div class="stack"><i class="fa-solid fa-layer-group"></i></div>
						<?php endif; ?>
						<img src="<?php echo $thumb; ?>" class="main-thumb">
					</a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

			<div class="row posts">
				<?php foreach($uploads->posts as $p): ?>
				<div class="col-4 col-sm-4 col-md-4 col-custom is-uploads">
					<div class="posts__item">
					<a href="<?php echo get_permalink($p->ID); ?>">
						<?php
							$gallery = get_field('upload_media', $p->ID);
							$thumb = $gallery[0]['url'];
						?>
						<?php if(count($gallery) > 1): ?>
						<div class="stack"><i class="fa-solid fa-layer-group"></i></div>
						<?php endif; ?>
						<img src="<?php echo $thumb; ?>" class="main-thumb">
					</a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php } ?>
<?php else :
	get_template_part( 'templates/content', 'none' );
endif;

get_footer();
