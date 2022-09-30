<?php
$content = get_sub_field('section_setting'); ?>
<!-- Mission Section -->
<section class="mission-section style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="<?php echo $content['image']; ?>" alt=""/>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2><?php echo $content['title']; ?></h2>
                    <div class="bold-text"><?php echo $content['heading']; ?></div>
                    <div class="text"><?php echo $content['description']; ?></div>
                    <h3><?php echo $content['sub_title']; ?></h3>
                    <div class="row clearfix">
                        <?php foreach ($content['content_repeater'] as $mission): ?>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="list-style-two">
                                    <?php echo $mission['listing']; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Mission Section -->

