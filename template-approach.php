<?php
/**
 * Template Name: Aanpak Template
 */
?>
<div class="outsider">

    <section id="title-hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <h1 class="maintitle"><?php the_field('main_titel'); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <div class="content-container">
                        <?php the_field('main_content'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-push-1">
                    <div class="image-box image-1">
                        <?php
                        $techimage = get_field('image_1');
                        if( !empty( $techimage ) ): ?>
                            <div class="image-box">
                                <img class="floating-image" src="<?php echo esc_url($techimage['url']); ?>" alt="<?php echo esc_attr($techimage['alt']); ?>" />
                                <div class="checker"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-md-push-2">
                    <div class="image-box image-2">
                        <?php
                        $techimage2 = get_field('image_2');
                        if( !empty( $techimage2 ) ): ?>
                            <div class="image-box image-box-second">
                                <img class="floating-image" src="<?php echo esc_url($techimage2['url']); ?>" alt="<?php echo esc_attr($techimage2['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-push-2">
                    <h2 class="big-title-text"><?php the_field('extra_content_titel'); ?></h2>
                    <?php the_field('extra_content_tekst'); ?>
                </div>
            </div>
        </div>
        <div class="checker"></div>
    </section>

    <?php get_template_part('templates/footer'); ?>

</div>
