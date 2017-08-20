<?php
$args = array(
    'category_name' => 'portfolio',
    'post_type'   => 'post',
    'post_status' => 'publish',
    'numberposts' => 3
);
$posts = get_posts($args);
?>

<?php get_header(); ?>
    <section class="featured jumbotron">
        <div class="featured-container">
            <div class="container">
                <h1 class="featured-title">Welcome!</h1>
                <p class="featured-summary">Explore my work</p>
                <a class="btn btn-default" href="<?php echo home_url('/#portfolio') ?>">Learn more</a>
            </div>
        </div>
    </section>

    <?php if(!empty($post)) : ?>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row title-container">
                <div class="col-md-12">
                    <h2 class="text-center title-accent">Portfolio</h2>
                    <h3 class="text-center">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <?php foreach ($posts as $post) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <?php the_post_thumbnail('full', ['class' => 'card-img-top img-responsive']) ?>
                            <div class="card-block">
                                <div class="card-content">
                                    <span class="badge-box">
                                        <i class="fa fa-check fa-2x"></i>
                                    </span>
                                    <h3 class="card-title text-center"><?php echo $post->post_title ?></h3>
                                    <p class="card-text">
                                        <?php echo $post->post_content ?>
                                    </p>
                                </div>
                                <a class="btn" href="<?php echo $post->guid ?>">Learn more</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section id="about" class="about">
        <div class="container">
            <div class="row title-container">
                <div class="col-md-12">
                    <h2 class="text-center title-accent">About</h2>
                    <h3 class="text-center">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive img-circle" src="<?php bloginfo('template_directory'); ?>/images/pexels-photo-140945.jpg" alt="me">
                    <p class="about-me-summary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet, quam vel dapibus suscipit, nibh velit rhoncus ipsum, at ultricies arcu diam nec tortor. Duis vitae tellus ultrices, porttitor mi non, maximus odio. Sed blandit nunc ut lacinia efficitur. Morbi mollis risus quis tellus bibendum sollicitudin. Cras quis dui vel ipsum rutrum tincidunt suscipit ac lacus. Fusce ultricies, velit quis efficitur lobortis, quam libero commodo orci, eu mollis nibh justo id mauris. Aliquam porttitor accumsan eros, ac convallis magna tempus quis. In vitae tellus facilisis, fermentum odio vel, sollicitudin ipsum. In lobortis elementum magna, vitae dapibus arcu blandit ac. Integer blandit id nunc et varius. Sed fermentum dui erat, commodo scelerisque nunc imperdiet non.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row title-container">
                <div class="col-md-12">
                    <h2 class="text-center title-accent">Contact</h2>
                    <h3 class="text-center">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="email" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" placeholder="Email" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>