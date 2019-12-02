
<div class="outsider">

    <section id="case-detail-hero" style="background-color:<?php the_field('achtergrondkleur'); ?>">
        <div class="checker"></div>
        <div class="container">
            <div class="row row-equal">
                <div class="col-xs-12 col-md-5 col-md-push-1">
                    <div class="outer">
                        <div class="text-box">
                            <div class="content-container">
                                <div class="breadcrumb">
                                    <span xmlns:v="https://rdf.data-vocabulary.org/#">
                                        <span typeof="v:Breadcrumb">
                                            <a href="<?php bloginfo('url'); ?>/cases/" rel="v:url" property="v:title">Cases</a> <div>/</div>
                                            <span class="breadcrumb_last">
                                                <?php
                                                   the_title();
                                                ?>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <h1 class="maintitle"><?php the_field('titel'); ?></h1>
                            </div>
                        </div>
                        <?php
                        $imageheromobile = get_field('hero_afbeelding_mobile');
                        if( !empty( $imageheromobile ) ): ?>
                            <div class="image-box-mobile hidden-md hidden-lg">
                                <img class="floating-image" src="<?php echo esc_url($imageheromobile['url']); ?>" alt="<?php echo esc_attr($imageheromobile['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $imagehero = get_field('hero_afbeelding');
        if( !empty( $imagehero ) ): ?>
            <div class="image-box hidden-xs hidden-sm">
                <img class="floating-image" src="<?php echo esc_url($imagehero['url']); ?>" alt="<?php echo esc_attr($imagehero['alt']); ?>" />
            </div>
        <?php endif; ?>
    </section>

    <section id="intro-case-detail">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <div class="text-box">
                        <?php the_field('intro_tekst'); ?>
                        <div class="checker"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php

    // Check value exists.
    if( have_rows('flexible') ):

        // Loop through rows.
        while ( have_rows('flexible') ) : the_row();

            // Case: Paragraph layout.
            if( get_row_layout() == 'beeldtekst' ): ?>
                <section id="content-image-left">
                    <div class="container">
                        <div class="row row-equal">
                            <div class="col-xs-12 col-md-4 col-md-push-1">
                                <?php
                                $imageleft = get_sub_field('beeld_links');
                                if( !empty( $imageleft ) ): ?>
                                    <div class="image-box">
                                        <img class="floating-image" src="<?php echo esc_url($imageleft['url']); ?>" alt="<?php echo esc_attr($imageleft['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-md-5 col-md-push-2">
                                <div class="outer">
                                    <div class="text-box">
                                        <?php the_sub_field('tekst_rechts'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checker"></div>
                </section>

            <?php elseif( get_row_layout() == 'full_width' ): ?>

                <section id="full-width-image">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php
                                $fullwidthimage = get_sub_field('full_width_afbeelding');
                                if( !empty( $fullwidthimage ) ): ?>
                                    <div class="image-box">
                                        <img class="floating-image" src="<?php echo esc_url($fullwidthimage['url']); ?>" alt="<?php echo esc_attr($fullwidthimage['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php elseif( get_row_layout() == 'tekstbeeld' ): ?>

                <section id="content-image-right">
                    <div class="container">
                        <div class="row row-equal">
                            <div class="col-xs-12 col-md-5 col-md-push-1">
                                <div class="outer">
                                    <div class="text-box">
                                        <?php the_sub_field('tekst_links'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-md-push-2">
                                <?php
                                $image = get_sub_field('beeld_rechts');
                                if( !empty( $image ) ): ?>
                                    <div class="image-box">
                                        <img class="floating-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="checker"></div>
                </section>

            <?php elseif( get_row_layout() == 'slider' ): ?>

                <section id="slider" style="background-color:<?php the_field('achtergrondkleur'); ?>">
                    <div class="checker"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="slider">
                                      <?php while( have_rows('slider') ): the_row(); ?>
                                          <div class="slide">
                                              <?php $focus_image = get_sub_field('slider_afbeelding'); ?>
                                              <div class="fill-img">
                                                  <?php echo '<img src="'.$focus_image['url'].'" alt="'.$focus_image['alt'].'" title="'.$focus_image['title'].'">'; ?>
                                              </div>
                                          </div>
                                      <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php elseif( get_row_layout() == 'full_width_tekst' ): ?>

                <section id="content-full-width">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-push-2">
                                <div class="text-box">
                                    <?php the_sub_field('full_width_tekst'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php elseif( get_row_layout() == 'video' ): ?>

                    <section id="video">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="embed-container">
                                        <?php
                                        // Load value.
                                        $iframe = get_sub_field('video');
                                        // Use preg_match to find iframe src.
                                        preg_match('/src="(.+?)"/', $iframe, $matches);
                                        $src = $matches[1];

                                        // Add extra parameters to src and replcae HTML.
                                        $params = array(
                                            'controls'  => 0,
                                            'hd'        => 1,
                                            'autohide'  => 1,
                                            'modestbranding' => 0,
                                            'autoplay' => 0,
                                            'showinfo' => 1,
                                            'enablejsapi' => 1,
                                            'html5' => 1,
                                        );
                                        $new_src = add_query_arg($params, $src);
                                        $iframe = str_replace($src, $new_src, $iframe);

                                        // Add extra attributes to iframe HTML.
                                        $attributes = 'frameborder="0" id="video-player"';
                                        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                                        // Display customized HTML.
                                        echo $iframe;
                                        ?>
                                        <button id="play-button"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        // https://developers.google.com/youtube/iframe_api_reference
                        // global variable for the player
                        var player;

                        // this function gets called when API is ready to use
                        function onYouTubePlayerAPIReady() {
                            // create the global player from the specific iframe (#video)
                            player = new YT.Player('video-player', {
                                events: {
                                  // call this function when player is ready to use
                                  'onReady': onPlayerReady
                                }
                            });
                        }

                        function onPlayerReady(event) {

                            // bind events
                            var playButton = document.getElementById("play-button");
                            playButton.addEventListener("click", function() {
                                player.playVideo();
                                var element = document.getElementById("play-button");
                                element.classList.add("gone");
                            });

                        }

                        // Inject YouTube API script
                        var tag = document.createElement('script');
                        tag.src = "//www.youtube.com/player_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                    </script>

            <?php endif;

        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;

    ?>

    <section id="related">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <h3 class="title">Ook trots op.</h3>
                </div>
                <div class="col-xs-12">
                    <?php if( get_field('uitgelichte_case') ): ?>
                        <?php $post_object = get_field('uitgelichte_case'); ?>
                        <?php if( $post_object ):

                            // override $post
                            $post = $post_object;
                            setup_postdata( $post );

                            ?>
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
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    <?php else: ?>
                    <?php
                        $query_args = array(
                            'post_type' => 'cases',
                            'posts_per_page' => 1,
                            'orderby' => 'rand',
                            'post__not_in' => array( $post->ID ),
                        );
                        // create a new instance of WP_Query
                        $the_query = new WP_Query( $query_args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
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
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/footer'); ?>

</div>
