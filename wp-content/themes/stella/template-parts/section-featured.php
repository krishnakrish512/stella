<!-- Featured Section -->
<?php
$content = get_sub_field('section_setting'); ?>
<section class="featured-section" style="background-image: url(<?php echo $content['background_image']; ?>)">
    <div class="auto-container">
        <!-- Title Box -->
        <div class="title-box">
            <h2><?php echo $content['title']; ?></h2>
        </div>

        <div class="row clearfix">

            <!-- Feature Block -->
            <?php foreach ($content['feature_reapater'] as $Feature): ?>
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="<?php echo $Feature['data_delay']; ?>"
                         data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon-box">
                                <span class="icon <?php echo $Feature['icon']; ?>"></span>
                            </div>
                            <div class="feature-number"><?php echo $Feature['feature_number']; ?>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="<?php echo $Feature['link']; ?>"><?php echo $Feature['title']; ?></a></h3>
                            <div class="text"><?php echo $Feature['description']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- End Featured Section -->