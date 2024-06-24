<?php
/**
 * Content template part.
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

$post_id = get_the_ID();
$profile_pic = qed_get_option( 'profile_picture', 'option' );
$fields = get_fields($post_id);

?>

<div class="post-single">
	<div class="post-single__head">
		<div class="post-single__head-image"><img src="<?php echo $profile_pic; ?>"></div>
		<div class="post-single__head-details">
			<div class="title"><?php echo (isset($fields['title']))?$fields['title']:$fields['guest_name']; ?></div>
			<div class="sub-title"><?php echo (isset($fields['sub_title']))?$fields['sub_title']:''; ?></div>
		</div>
	</div>
	<div class="post-single__gallery">
		<?php if(isset($fields['gallery'])): ?>
			<?php foreach($fields['gallery'] as $item): ?>
			<div class="post-single__gallery-item"><img src="<?php echo $item['url']; ?>"></div>
			<?php endforeach; ?>
		<?php else: ?>
			<?php foreach($fields['upload_media'] as $item): ?>
			<div class="post-single__gallery-item"><img src="<?php echo $item['url']; ?>"></div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<div class="post-single__functions">
	<?php echo do_shortcode('[addtoany]'); ?>
	</div>
	<div class="post-single__desc">
		<span><?php echo (isset($fields['title']))?$fields['title']:$fields['guest_name']; ?></span>
		<?php echo $fields['description']; ?>
	</div>
</div>