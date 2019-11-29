<div class="outsider">
    <section id="main-content-normal-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-push-1">
                    <div class="title-container">
                        <h1 class="maintitle"><?php the_field('h1_van_pagina'); ?></h1>
                    </div>
                    <div class="entry-field content-container">
                        <?php the_field('intro'); ?>
                    </div>
                    <?php the_field('main_content'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/footer'); ?>
</div>
