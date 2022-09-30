<!-- Call To Action Section -->
<?php
$content = get_sub_field('section_setting'); ?>
<section class="call-to-action-section" style="background-image: url(<?php echo $content['image']; ?>)">
    <div class="auto-container">
        <h2><?php echo $content['title']; ?></h2>
        <div class="text"><?php echo $content['description']; ?></div>
        <a href="http://localhost/stella/contact/" class="theme-btn btn-style-two"><span class="txt">contact
                us</span></a>
    </div>
</section>
<!-- End Call To Action Section -->