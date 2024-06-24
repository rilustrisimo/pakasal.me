<?php
/**
 * Template part for displaying page content in template-mainpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyorsogood_Design
 */

 $theme = new Theme();
 $messages = $theme->createQuery('message');

?>

<div class="modal-custom" id="message">
    <div class="modal-custom__header header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-content">
                    <div class="back-btn"><a href="#"><i class="fa-solid fa-chevron-left"></i></a></div>
                    <div class="header-title">Messages</div>
                    <div class="messenger-btn"><a href="https://m.me/rouie" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a></div>
                </div><!-- .header__content -->
            </div>
        </div><!-- .container -->
    </div>
    <div class="modal-custom__body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title">
                Share your wishes with the couple
                </div>
                <div class="col-md-12 info">
                    <p>We invite you to leave a heartfelt message for the newlyweds. Your thoughtful words of congratulations, love, and support will be cherished as they begin their new journey together. Please take a moment to convey your best wishes and blessings for their future.</p>
                </div>
            </div>
            <div class="row messages">
                <div class="col-md-12 form">
                    <?php $theme->createAcfForm(131, 'message'); ?>
                </div>
            </div>
            <div class="row message-list">
                <div class="col-md-12">
                    <?php if(count($messages->posts) > 0): ?>
                        <?php foreach($messages->posts as $key => $m): ?>
                        <div class="message-list__item">
                            <div class="name"><?php echo get_field('guest_name', $m->ID); ?></div>
                            <div class="content"><?php echo get_field('message', $m->ID); ?></div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>It's quiet here. Be the first to leave a message.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>