<?php
$content = get_sub_field('section_setting'); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $content['banner_image']; ?>)">
    <div class="auto-container">
        <h2>Contact Us</h2>
        <ul class="page-breadcrumb">
            <li><a href="<?= get_home_url(); ?>">home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Form Section -->
<section class="contact-form-section" style="background-image:url(<?php echo $content['contact_banner']; ?>)">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2>Get In Touch</h2>
            <div class="text"><?php echo $content['form_description']; ?></div>
        </div>

        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Contact Form -->
                    <div class="contact-form">


                        <?php echo do_shortcode("[contact-form-7 id='" . $content['contact_form'] . "']") ?>

                    </div>

                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Contact Info List -->
                    <ul class="contact-info-list">
                        <li><strong>Address :</strong><?php echo $content['address']; ?></li>
                    </ul>
                    <!-- Contact Info List -->
                    <ul class="contact-info-list">
                        <li><strong>Phone : </strong><a
                                    href="tel:<?php echo $content['phone']; ?>"><?php echo $content['phone']; ?></a>
                        </li>
                        <li><strong>Email : </strong><a
                                    href="mailto:<?php echo $content['email']; ?>"><?php echo $content['email']; ?></a>
                        </li>
                    </ul>
                    <!-- Contact Info List -->
                    <ul class="contact-info-list">
                        <li><strong>Opening Hours :</strong><?php echo $content['opening_hours']; ?></li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Form Section -->

<!-- Map Section -->
<section class="map-section">
    <div class="outer-container">
        <div class="map-outer">
            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                 data-hue="#ffc400" data-title="Melbourne Australia"
                 data-icon-path="<?php echo get_template_directory_uri(); ?>/images/icons/map-marker.png"
                 data-content="(1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm">
            </div>
        </div>
    </div>
</section>
<!-- End Map Section -->