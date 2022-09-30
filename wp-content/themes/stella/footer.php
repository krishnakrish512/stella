<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stella
 */

?>
<?php $footer = get_field('footer_setting', 'option'); ?>
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="<?= get_home_url(); ?>"><img src="<?php echo $footer['footer_logo'] ?>"
                                                                          alt=""/></a>
                                </div>
                                <div class="text"><?php echo $footer['description'] ?></div>
                                <ul class="social-icons">
                                    <li><a href="<?php echo $footer['facebook_url'] ?>"><span
                                                    class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="<?php echo $footer['linkedin_url'] ?>"><span
                                                    class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="<?php echo $footer['twitter_url'] ?>"><span
                                                    class="fab fa-twitter"></span></a></li>
                                    <li><a href="<?php echo $footer['google_plus_url'] ?>"><span
                                                    class="fab fa-google-plus-g"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'Footer-menu',
                                                'menu_id' => 'Footer-menu',
                                            )
                                        );
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2>Contact Info</h2>
                                <div class="widget-content">
                                    <a href="tel:<?php echo $footer['phone'] ?>"
                                       class="contact-number"><?php echo $footer['phone'] ?></a>
                                    <ul>
                                        <li><?php echo $footer['address'] ?></li>
                                        <li>Email :<a href="mailto:<?php echo $footer['email'] ?>">
                                                <?php echo $footer['email'] ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h2>Newsletter</h2>
                                <div class="text">Get Special offers & Discounts</div>
                                <!-- Newsletter Form -->
                                <div class="newsletter-form">
                                    <form method="post" action="templateshub.net">
                                        <div class="form-group">
                                            <input type="email" name="email" value=""
                                                   placeholder="Enter your email address" required>
                                            <button type="submit" class="theme-btn btn-style-one"><span
                                                        class="txt">Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom clearfix">
            <div class="pull-left">
                <div class="copyright"><a href="templateshub.net">Templates Hub</a></div>
            </div>
            <div class="pull-right">
                <a href="templateshub.net">Templates Hub</a>
            </div>
        </div>

    </div>
</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="templateshub.net">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                               required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>

        </div>

    </div>
</div>

</body>

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->


<?php wp_footer(); ?>


</html>