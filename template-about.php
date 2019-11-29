<?php
/**
 * Template Name: About Template
 */
?>
<div class="outsider">

    <section id="title-hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-push-1">
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
        </div>
    </section>

    <section id="more-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <div class="row row-equal">
                        <div class="col-xs-12 col-md-6 col-md-push-5">
                            <div class="outer">
                                <div class="text-container">
                                    <h4 class="title"><?php the_field('extra_info_titel'); ?></h4>
                                    <?php the_field('extra_info_tekst'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 col-md-pull-7">
                            <?php
                            $techimage = get_field('extra_info_afbeelding');
                            if( !empty( $techimage ) ): ?>
                                <div class="image-box">
                                    <img class="floating-image" src="<?php echo esc_url($techimage['url']); ?>" alt="<?php echo esc_attr($techimage['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-push-1">
                    <h2 class="title">Een team van 20 developers &amp; designers</h2>
                    <a href="https://weave.homerun.co/" target="_blank">Bekijk vacatures</a>
                </div>
            </div>
            <div class="row">
                <ul>
                    <?php $random_cars = get_field( 'teamleden' );  ?>
                    <?php if ( is_array( $random_cars ) )  { ?>
                        <?php foreach ($random_cars as $random_car ) { ?>
                            <?php $test = $random_car['teamlid_afbeelding']; ?>
                            <?php print_r($fields); ?>
                            <li class="teammember col-xs-12 col-sm-6 col-md-4">
                                <img src="<?php echo $test['url']; ?>" alt="<?php echo $test['alt'] ?>" />
                                <div class="details">
                                    <h4 class="teammember-title"><?php echo $random_car['teamlid_naam']; ?></h4>
                                    <h5 class="teammember-subtitle"><?php echo $random_car['teamlid_functie']; ?></h5>
                                </div>
                            </li>
                        <?php } ?>
                        <li class="col-xs-12 col-sm-6 col-md-4 full">
                            <div class="outer">
                                <a href="https://weave.homerun.co/" target="_blank"><span>Bekijk vacatures</span></a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/footer'); ?>

</div>











