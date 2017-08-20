<?php
function demo_theme_options_page(){
    $options = get_option('demo_options');
    ?>

    <div class="wrap">
        <h1><?php _e('Theme settings', 'demo') ?></h1>

        <?php if(isset($_GET['status']) && $_GET['status'] === 'success') : ?>
            <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
                <p><strong><?php _e('Settings saved!') ?></strong></p>
                <button type="button" class="notice-dismiss">
                    <span class="screen-reader-text"><?php _e('Hide message') ?></span>
                </button>
            </div>
        <?php endif;?>
        <form method="post" action="admin-post.php">
            <input type="hidden" name="action" value="demo_save_options">
            <?php wp_nonce_field('demo_options_verify') ?>
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row"><label for="facebook">Facebook</label></th>
                        <td>
                            <input name="facebook" type="text" id="facebook" aria-describedby="facebook"
                                   value="<?php echo $options['Facebook'] ?>" class="regular-text">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="twitter">Twitter</label></th>
                        <td>
                            <input name="twitter" type="text" id="twitter" aria-describedby="twitter"
                                   value="<?php echo $options['Twitter'] ?>" class="regular-text">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="github">GitHub</label></th>
                        <td>
                            <input name="github" type="text" id="github" aria-describedby="github"
                                   value="<?php echo $options['GitHub'] ?>" class="regular-text">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit"
                       name="submit"
                       id="submit"
                       class="button button-primary"
                       value="<?php _e('Save changes', 'demo') ?>">
            </p>
        </form>
    </div>

<?php }