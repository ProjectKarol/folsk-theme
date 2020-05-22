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

                <?php  if($imagepath === '') {
                   echo '          <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve"  version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                   viewBox="0 0 4504 4504"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                     <style type="text/css">
                      <![CDATA[
                       .fil0 {fill:#2A304D}
                      ]]>
                     </style>
                    </defs>
                    <g id="Warstwa_x0020_1">
                     <metadata id="CorelCorpID_0Corel-Layer"/>
                     <path  d="M2226 1082c316,0 516,268 544,547 21,216 -29,444 -168,594 -52,56 -86,76 -148,117 2,97 23,110 69,142 132,89 263,113 420,231 165,124 277,311 277,594l-1936 0c0,-199 55,-351 162,-488 59,-76 161,-141 243,-189 84,-48 192,-80 292,-148 73,-51 56,-48 77,-142 -88,-24 -212,-172 -255,-264 -143,-307 -87,-730 222,-931 42,-27 134,-63 201,-63zm-2226 1082c0,344 17,527 129,848 52,150 100,236 173,372 17,31 33,52 50,81 72,121 209,285 306,381 91,92 187,170 292,244 132,94 196,130 343,203 208,102 570,211 880,211 256,0 375,-2 630,-65 75,-19 138,-39 209,-64 288,-100 465,-225 691,-399 452,-348 801,-1053 801,-1645 0,-340 -19,-524 -129,-839 -107,-307 -302,-608 -529,-834 -383,-384 -964,-658 -1515,-658 -339,0 -524,19 -839,129 -445,155 -797,442 -1076,815 -227,302 -416,802 -416,1220z"/>
                    </g>
                   </svg>';

                    } else {
                      //  echo '<img src="'.$imagepath.' alt="User imagex" whidth="40px" height="auto" />';
                        echo get_avatar( get_the_author_meta( 'ID' ), 55 );
                    } ?>


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
                <?php if(get_user_last_influecer_slug()){?>
                <a href="/influencerzy/<?php echo get_user_last_influecer_slug()  ?>">Podejrzyj profil</a> <br>
                <?php } ?>
                <a href="/ustwienia/">Ustawienia</a>
            </td>
        </tr>
    </table>
</div>