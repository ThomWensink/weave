<?php
/**
 * Template Name: Home Template
 */
?>

<div class="outsider">
    <section id="hero" class="full-height">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-md-push-1">
                    <h1>
                        <span class="static">We verweven</span>
                        <span class="text-absolute first"><i>We verweven</i> de beste techspecialisten, tot een sterk team.</span>
                        <span class="text-absolute second"><i>We verweven</i> jouw expertise met die van ons, tot een sterke samenwerking.</span>
                        <span class="text-absolute third"><i>We verweven</i> technologieën van nu, tot de sterkste oplossing.</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="full-height">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Weave ontwikkelt innovatieve technologie, waarmee opdrachtgevers impact maken in hun vakgebied. We zijn een energiek team van developers en designers. Een nieuwe generatie softwareontwikkelaars die bewijst dat je met een rebelse spirit écht verschil kan maken.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php if( have_rows('logos') ): ?>
        <div class="logos">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                        <?php while( have_rows('logos') ): the_row();
                            $image = get_sub_field('afbeelding');
                            ?>
                            <li>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>

    <section id="info" class="full-height">
        <div class="container">
            <div class="row">
                <?php
                $techimage = get_field('afbeelding_wij_geloven_in_tech');
                if( !empty( $techimage ) ): ?>
                    <div class="image-box">
                        <img class="floating-image" src="<?php echo esc_url($techimage['url']); ?>" alt="<?php echo esc_attr($techimage['alt']); ?>" />
                    </div>
                <?php endif; ?>
                <div class="col-xs-12 col-md-9 col-md-push-3">
                    <div class="text-box">
                        <h2><?php the_field('titel_wij_geloven_in_tech'); ?></h2>
                        <div class="intern-text-box">
                            <p><?php the_field('tekst_wij_geloven_in_tech'); ?></p>
                            <a href="<?php bloginfo('url'); ?>/over-ons/">Leer ons kennen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="case-overview" class="full-height">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="text-box">
                        <h6>Niki Sie, Juuve</h6>
                        <div class="intern-text-box">
                            <p>Morbi condimentum magna eget risus sollicitudin, sit consectetur sapien aus. Aenean nec massa dapibus tortor.</p>
                            <a href="">Bekijk case</a>
                        </div>
                    </div>
                </div>
                <?php
                $techimage = get_field('afbeelding_wij_geloven_in_tech');
                if( !empty( $image ) ): ?>
                    <div class="image-box">
                        <img class="floating-image" src="<?php echo esc_url($techimage['url']); ?>" alt="<?php echo esc_attr($techimage['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="cta" class="full-height">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="text-box">
                        <h2 class="big">Doen.<br />Doorpakken.<br />Sprinten.</h2>
                    </div>
                </div>
            </div>
        </div>
        <a href="">Zo doen we dat</a>
    </section>

    <?php get_template_part('templates/footer'); ?>

</div>



