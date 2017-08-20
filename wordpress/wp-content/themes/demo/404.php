<?php get_header(); ?>
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        404
                    </h1>
                    <h2 class="text-center">
                        <?php _e('Page not found!', 'demo') ?>
                    </h2>

                    <a href="<?php echo home_url('/') ?>" class="btn btn-primary">
                        <?php _e('Back to homepage', 'demo') ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>