<?php
/**
 * Template part for displaying page content in template-mainpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyorsogood_Design
 */

?>

<div class="modal-custom" id="code">
    <div class="modal-custom__header header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header-content">
                    <div class="back-btn"><a href="#"><i class="fa-solid fa-chevron-left"></i></a></div>
                    <div class="header-title">Gift QR Codes</div>
                    <div class="messenger-btn"><a href="https://m.me/rouie" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a></div>
                </div><!-- .header__content -->
            </div>
        </div><!-- .container -->
    </div>
    <div class="modal-custom__body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title">
                Account QR Codes
                </div>
                <div class="col-md-12 info">
                    <p>Your presence at our wedding is the greatest gift we could ask for. However, should you wish to honor us with a gift, we would be deeply grateful for a monetary contribution.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 qr-codes">
                    <div class="qr-codes__item">
                        <div class="desc">BPI: Bank of the Philippine Islands</div>
                        <div class="image"><img src="<?php echo wp_get_attachment_url(116)?>"></div>
                        <div class="btn"><a href="<?php echo wp_get_attachment_url(116)?>" download><i class="fa-regular fa-floppy-disk"></i> Download QR</a></div>
                    </div>
                    <div class="qr-codes__item">
                        <div class="desc">BDO Unibank, Inc.</div>
                        <div class="image"><img src="<?php echo wp_get_attachment_url(120)?>"></div>
                        <div class="btn"><a href="<?php echo wp_get_attachment_url(120)?>" download><i class="fa-regular fa-floppy-disk"></i> Download QR</a></div>
                    </div>
                    <div class="qr-codes__item">
                        <div class="desc">GCash</div>
                        <div class="image"><img src="<?php echo wp_get_attachment_url(124)?>"></div>
                        <div class="btn"><a href="<?php echo wp_get_attachment_url(124)?>" download><i class="fa-regular fa-floppy-disk"></i> Download QR</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>