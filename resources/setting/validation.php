<?php
// start:  validate kategorie
add_filter('acf/validate_value/name=kategorie_tworczosci', 'my_validate_value', 10, 4);
function my_validate_value($valid, $value, $field, $input) {
    if(!$valid) {
        return $valid;
    }
    if(sizeof($value) > 3) {
        $valid = 'Możesz wybrać tylko max 3 kategorie';
    } else {
        $valid = true;
    }
    return $valid;
}
// end: validate kategorie
// if (!is_admin()) {
// 	add_filter('clean_url', function($url) {
// 		if (strpos($url, '.js') === false || strpos($url, 'jquery.min.js') != false || strpos($url, 'acf') != false) {
// 			return $url;
// 		}

// 		return "$url' defer='defer";

// 	}, 11, 1);
// }



// start  validate social media links only one
// function my_acf_validate_value( $valid, $value, $field, $input ){

// 	// bail early if value is already invalid
// 	if( !$valid ) {
// 		return $valid;
// 	}
//         // get two values
//         // you need to change these based on your field keys

//       //  ddd($_POST['acf']);
// 	    $value_1 = $_POST['acf']['field_5f9c4d1df8eeb']['field_5e386986d60d3']; // facebook
//         $value_2 = $_POST['acf']['field_5f9c522b25a7d']['field_5e38721b0b596']; //instagram
//         $value_3 = $_POST['acf']['field_5f9c54501f3ca']['field_5e3872320b597'];//youtube
//         $value_4 = $_POST['acf']['field_5f9c54cb447f6']['field_5e3872430b598']; // snapchat
//         $value_5 = $_POST['acf']['field_5f9c5516447f7']['field_5e38725c0b599']; //twitter
//         $value_6 = $_POST['acf']['field_5f9c554c447f8']['field_5e38726a0b59a']; // linkedIn

// 	if (empty($value_1) && empty($value_2) &&  empty($value_3) &&  empty($value_4) &&  empty($value_5)  &&  empty($value_6))   {
//             $valid = 'Musisz wypełnić przynajmniej jedno pole.';
//         }

// 	// return
// 	return $valid;
// }
// add_filter('acf/validate_value/name=facebook-acf', 'my_acf_validate_value', 10, 4);
// add_filter('acf/validate_value/name=instagram-acf', 'my_acf_validate_value', 10, 4);
// add_filter('acf/validate_value/name=youtube-acf', 'my_acf_validate_value', 10, 4);
// add_filter('acf/validate_value/name=snapchat-acf', 'my_acf_validate_value', 10, 4);
// add_filter('acf/validate_value/name=twitter-acf', 'my_acf_validate_value', 10, 4);
// add_filter('acf/validate_value/name=linkedin-acf', 'my_acf_validate_value', 10, 4);
// end  validate social media links only one


// //youtube validate fiels
// add_filter('acf/validate_value/name=youtube-acf', 'acf_validate_facebook', 10, 4);
// function acf_validate_facebook($valid, $value, $field, $input){
//     $value_3 = $_POST['acf']['field_5f9c54501f3ca']['field_5e3872320b597'];//youtube
//     // ddd(strpos($value_3, "youtube.com/channel"));
//     if (false === strstr($value_3, "youtube.com/channel") ) {
//         $valid ="Musisz podać Kanał , niedozwolone jest konto użytkownika";
//     }
// 	// return
// 	return $valid;
// }

// if (!is_admin()) {
// 	add_filter('clean_url', function($url) {
// 		if (strpos($url, '.js') === false || strpos($url, 'jquery.min.js') != false || strpos($url, 'acf') != false) {
// 			return $url;
// 		}

// 		return "$url' defer='defer";

// 	}, 11, 1);
// }



// // enable ajax on form
// add_action('wp', array(&$this, 'acf_form_handler'));
//     add_action('acf/submit_form', array(&$this, 'acf_checkout_prevent_pet_redirect'), 10, 2);