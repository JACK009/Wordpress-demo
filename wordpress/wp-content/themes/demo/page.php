<?php get_header(); ?>
    <section class="page-content">
        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while (have_posts()) {
                    the_post();
                } ?>
                <div class="row title-container">
                    <div class="col-md-12">
                        <h2 class="text-center title-accent"><?php the_title() ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <?php the_content() ?>
                    </div>
                </div>
            <?php else : ?>
                <p><?php _e('No content has been added yet!', 'demo') ?></p>
            <?php endif ?>
        </div>
    </section>
<?php get_footer(); ?>