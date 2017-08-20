<?php
$options = get_option('demo_options');
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-left copyright">© 2017 <?php bloginfo('name') ?>. All rights reserved.</p>
                <ul class="list-inline social pull-right">
                    <?php if(!empty($options['Facebook'])) : ?>
                        <li>
                            <a href="https://facebook.com/<?php echo $options['Facebook']?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty($options['Twitter'])) : ?>
                        <li>
                            <a href="https://twitter.com/<?php echo $options['Twitter']?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(!empty($options['GitHub'])) : ?>
                        <li>
                            <a href="https://github.com/<?php echo $options['GitHub']?>">
                                <i class="fa fa-github" aria-hidden="true"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>