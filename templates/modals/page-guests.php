<?php
/**
 * Template part for displaying page content in template-mainpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyorsogood_Design
 */

 $theme = new Theme();
 $guests = $theme->createQuery('guests');
 $guestsatt = $theme->createQuery('guests', array(array(
    array(
        'key'     => 'will_be_attending',
        'value'   => true,
        'compare' => '='
    ),
)));

$guestsnotatt = $theme->createQuery('guests', array(array(
    array(
        'key'     => 'will_be_attending',
        'value'   => true,
        'compare' => '!='
    ),
)));
?>

<div class="modal-custom" id="guests">
    <div class="modal-custom__header header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-content">
                    <div class="back-btn"><a href="#"><i class="fa-solid fa-chevron-left"></i></a></div>
                    <div class="header-title">Our Guests</div>
                    <div class="messenger-btn"><a href="https://m.me/rouie" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a></div>
                </div><!-- .header__content -->
            </div>
        </div><!-- .container -->
    </div>
    <div class="modal-custom__body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title">
                Guests Responded
                </div>
                <div class="col-md-12 info">
                    <div class="info__item">
                        Attending: <span><?php echo count($guestsatt->posts); ?></span> <span>/</span> Not Attending: <span><?php echo count($guestsnotatt->posts); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 guest-list">
                    <?php foreach($guests->posts as $g): ?>
                    <div class="guest-list__item <?php echo (get_field('will_be_attending', $g->ID))?'':'not-attending'; ?>">
                        <div class="image">
                            <?php 
                                $url = (get_field('guest_picture', $g->ID))?get_field('guest_picture', $g->ID):qed_get_option( 'profile_picture', 'option' );
                            ?>
                            <img src="<?php echo $url; ?>">
                        </div>
                        <div class="details">
                            <div class="name"><?php echo get_field('guest_name', $g->ID); ?></div>
                            <div class="email"><?php echo get_field('email_address', $g->ID); ?></div>
                            <div class="phone"><?php echo get_field('phone_number', $g->ID); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 copyright">
                    <p>© 2024 Pakasal.me. All rights reserved. Created and developed by <a href="https://eyorsogood.com" target="_blank">Rouie Ilustrisimo</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>