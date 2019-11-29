<?php
/**
 * Template Name: Cases Template
 */
?>

<div class="outsider">

    <section id="case-intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-push-2">
                    <div class="title-container">
                        <h1 class="maintitle"><?php the_field('titel'); ?></h1>
                    </div>
                    <div class="content-container">
                        <?php the_field('case_intro'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cases">
        <div class="container">
            <div class="row">
                <ul>
                    <?php $count = 0 ?>
                    <?php
                        $query_args = array(
                            'post_type' => 'cases',
                            'posts_per_page' => 100,
                        );
                        // create a new instance of WP_Query
                        $the_query = new WP_Query( $query_args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
                    <li class="col-xs-12 col-md-6
                        <?php if( $count === 0 ): ?> col-md-12 first <?php endif; ?> <?php if( $count === 3 ): ?> col-md-12 <?php endif; ?> <?php if( $count === 6 ): ?> col-md-12 <?php endif; ?>
                        <?php if( $count === 9 ): ?> col-md-12 <?php endif; ?> <?php if( $count === 12 ): ?> col-md-12 <?php endif; ?> <?php if( $count === 15 ): ?> col-md-12 <?php endif; ?>
                        <?php if( $count === 18 ): ?> col-md-12 <?php endif; ?> <?php if( $count === 21 ): ?> col-md-12 <?php endif; ?> <?php if( $count === 24 ): ?> col-md-12 <?php endif; ?>
                    ">
                        <div class="outer-container" style="background-color:<?php the_field('achtergrondkleur'); ?>">
                            <div class="outer">
                                <?php
                                $imagehero = get_field('uitgelichte_foto');
                                if( !empty( $imagehero ) ): ?>
                                    <div class="image-box hidden-xs hidden-sm">
                                        <img class="floating-image" src="<?php echo esc_url($imagehero['url']); ?>" alt="<?php echo esc_attr($imagehero['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <?php
                                $imageheromobile = get_field('uitgelichte_foto_mobile');
                                if( !empty( $imageheromobile ) ): ?>
                                    <div class="image-box hidden-md hidden-lg">
                                        <img class="floating-image" src="<?php echo esc_url($imageheromobile['url']); ?>" alt="<?php echo esc_attr($imageheromobile['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="text-box">
                                    <h6 class="subtitle"><?php the_title(); ?></h6>
                                    <h4 class="casetitle"><?php the_field('titel'); ?></h4>
                                    <a href="<?php the_permalink(); ?>"><span>Bekijk case</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $count++; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/footer'); ?>

</div>



