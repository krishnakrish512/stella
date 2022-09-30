<?php
$content = get_sub_field('section_setting');
// var_dump($content);
?>

<!-- Main Slider -->
<section class="main-slider">
    <div class="slider-box">

        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">

            <!-- Slide -->
            <?php foreach ($content['banner_repeater'] as $banner): ?>
                <div class="slide">
                    <div class="image-layer"
                         style="background-image:url(<?php echo $banner['image_url']; ?>)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <h2><?php echo $banner['heading']; ?></h2>
                            <div class="text"><?php echo $banner['description']; ?></div>
                            <div class="btns-box">
                                <a href="<?php echo $banner['button_url']; ?>" class="theme-btn btn-style-one"><span
                                            class="txt">Know more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
<!-- End Banner Section -->
 