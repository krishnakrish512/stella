<?php
$content = get_sub_field('section_setting'); ?>
<!-- Fluid Section One -->

<section class="fluid-section-one">
    <div class="outer-container clearfix">

        <!--Content Column-->
        <div class="content-column">
            <div class="content-box">
                <h2><?php echo $content['title']; ?></h2>
                <div class="text">T<?php echo $content['description']; ?></div>
                <ul class="list-style-one">
                    <?php echo $content['listing']; ?>
                </ul>
                <div class="bold-text">Design your home, right here at Stella Orr'e <br> <a
                            href="http://localhost/stella/contact/">Talk to
                        a designer</a></div>
            </div>
        </div>

        <!--Image Column-->
        <div class="image-column" style="background-image: url(<?php echo $content['image']; ?>)">
            <div class="inner-column">
                <div class="image">
                    <img src="<?php echo $content['image']; ?>" alt="">
                </div>
                <a href="<?php echo $content['video_url']; ?>" class="overlay-link lightbox-image">
                    <div class="icon-box">
                        <span class="icon flaticon-play-button"></span>
                        <i class="ripple"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--End Image Column-->

    </div>
</section>