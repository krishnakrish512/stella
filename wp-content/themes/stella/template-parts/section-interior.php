<?php
$content = get_sub_field('section_setting'); ?>
<!-- Interior Section -->
<section class="interior-section style-three">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="<?php echo $content['image']; ?>" alt=""/>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><?php echo $content['title']; ?></h2>
                        <div class="text"><?php echo $content['description']; ?></div>
                        <div class="row clearfix">

                            <!-- Interior Block -->
                            <?php foreach ($content['interior_repeater'] as $interior): ?>
                                <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="block-inner">
                                        <div class="icon-box">
                                            <span class="icon <?php echo $interior['icon']; ?>"></span>
                                        </div>
                                        <h3><?php echo $interior['title']; ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <div class="bold-text"><?php echo $content['heading']; ?></div>
                        <div class="column-text"><?php echo $content['sub_heading']; ?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Interior Section -->

<!-- Counter Section -->
<section class="counter-section style-two">
    <div class="auto-container">

        <!-- Fact Counter -->
        <div class="fact-counter">
            <div class="row clearfix">

                <!--Column-->
                <?php foreach ($content['counter_repeater'] as $counter): ?>
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="<?php echo $counter['start_data']; ?>"
                             data-wow-duration="<?php echo $counter['end_data']; ?>">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <?php echo $counter['counter']; ?>

                                </div>
                                <h4 class="counter-title"><?php echo $counter['title']; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>
<!-- End Counter Section -->