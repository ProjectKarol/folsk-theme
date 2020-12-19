<?php
/*
 * This is the page users will see logged out.
 * You can edit this, but for upgrade safety you should copy and modify this file into your template folder.
 * The location from within your template folder is plugins/login-with-ajax/ (create these directories if they don't exist)
*/
?>
<div class="lwa lwa-default">
    <?php //class must be here, and if this is a template, class name should be that of template directory ?>
    <div class="login-form">
        <div id="gform_4" style="margin: 0 auto;">
            <div id="password-reset-form" class="widecolumn custom-login custom-login-popup">
                <?php echo do_shortcode('[custom-login-form]'); ?>
            </div>
        </div>
    </div>
    <?php if( !empty($lwa_data['remember']) && $lwa_data['remember'] == 1 ): ?>
    <?php endif; ?>
    <?php if( get_option('users_can_register') && !empty($lwa_data['registration']) && $lwa_data['registration'] == 1 ): ?>
    <div class="lwa-register lwa-register-default lwa-modal" style="display:none;">
        <h4><?php esc_html_e('Register For This Site','login-with-ajax') ?></h4>
        <p><em
                class="lwa-register-tip"><?php esc_html_e('A password will be e-mailed to you.','login-with-ajax') ?></em>
        </p>
        <form class="lwa-register-form" action="<?php echo esc_attr(LoginWithAjax::$url_register); ?>" method="post">
            <div>
                <span class="lwa-status"></span>
                <p class="lwa-username">
                    <label><?php esc_html_e('Username','login-with-ajax') ?><br />
                        <input type="text" name="user_login" id="user_login" class="input" size="20"
                            tabindex="10" /></label>
                </p>
                <p class="lwa-email">
                    <label><?php esc_html_e('E-mail','login-with-ajax') ?><br />
                        <input type="text" name="user_email" id="user_email" class="input" size="25"
                            tabindex="20" /></label>
                </p>
                <?php do_action('register_form'); ?>
                <?php do_action('lwa_register_form'); ?>
                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="button-primary"
                        value="<?php esc_attr_e('Register', 'login-with-ajax'); ?>" tabindex="100" />
                </p>
                <input type="hidden" name="login-with-ajax" value="register" />
            </div>
        </form>
    </div>
    <?php endif; ?>
</div>
