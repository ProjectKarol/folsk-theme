<?php
/*
 * This is the page users will see logged in.
 * You can edit this, but for upgrade safety you should copy and modify this file into your template folder.
 * The location from within your template folder is plugins/login-with-ajax/ (create these directories if they don't exist)
*/
?>
<div class="lwa">
    <?php
        $user = wp_get_current_user();
        $imagepath = (get_user_meta(  $user -> ID , 'slim_image_gf' ))[0];
	?>

    <span class="lwa-title-sub"
        style="display:none"><?php echo __( 'Hi', 'login-with-ajax' ) . " " . $user->display_name  ?></span>
    <table>
        <tr>
            <td class="avatar lwa-avatar" style="width:25%;">
                <img src="<?php echo $imagepath ?>" alt="User image" whidth='40px' height='auto' />


            </td>
            <td class="lwa-info">
                <?php
					//Admin URL
					if ( $lwa_data['profile_link'] == '1' ) {
						if( function_exists('bp_loggedin_user_link') ){
							?>
                <a href="<?php bp_loggedin_user_link(); ?>"><?php esc_html_e('Profile','login-with-ajax') ?></a><br />
                <?php
						}else{
							?>
                <a
                    href="<?php echo trailingslashit(get_admin_url()); ?>profile.php"><?php esc_html_e('Profile','login-with-ajax') ?></a><br />
                <?php
						}
					}
					//Logout URL
					?>

                <?php
					//Blog Admin
					if( current_user_can('list_users') ) {
						?>
                <a href="<?php echo get_admin_url(); ?>"><?php esc_html_e("blog admin", 'login-with-ajax'); ?></a>
                <?php
                    }

                ?>

                <a href="/dolacz/">Edytuj Profil</a><br>
                <a href="/author/'<?php echo $user -> data -> user_login ?>'">Podejrzyj profil</a> <br>
                <a href="/ustwienia/">Ustawienia</a>
            </td>
        </tr>
    </table>
</div>