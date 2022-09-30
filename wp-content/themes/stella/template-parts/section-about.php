<?php
$content = get_sub_field('section_setting'); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $content['about_banner']; ?>)">
    <div class="auto-container">
        <h2>About us</h2>
        <ul class="page-breadcrumb">
            <li><a href="<?= get_home_url(); ?>">home</a></li>
            <li>About us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Story Section -->
<section class="story-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2><?php echo $content['title']; ?></h2>
                    <div class="bold-text"><?php echo $content['sub_title']; ?></div>
                    <div class="text">
                        <?php echo $content['description']; ?>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="<?php echo $content['image']; ?>" alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Story Section -->