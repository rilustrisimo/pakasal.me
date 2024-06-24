<?php
/**
 * Template part for displaying page content in template-mainpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyorsogood_Design
 */

$theme = new Theme();

?>

<div class="modal-custom" id="rsvp">
    <div class="modal-custom__header header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-content">
                    <div class="back-btn"><a href="#"><i class="fa-solid fa-chevron-left"></i></a></div>
                    <div class="header-title">RSVP</div>
                    <div class="messenger-btn"><a href="https://m.me/rouie" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-custom__body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title">
                Répondez S'il Vous Plaît, <span>/ Please Respond</span>
                </div>
                <div class="col-md-12 info">
                    <p>Please provide the names, email addresses, and phone numbers of all guests in your party. Ensure to list as many guests as possible (including you) to help us with accurate planning.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form">
                    <?php $theme->createAcfForm(51, 'guests', 'acf-field_6674d950cfe08'); ?>
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