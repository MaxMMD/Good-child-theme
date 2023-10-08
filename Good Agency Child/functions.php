<?php
/**
 * Theme functions and definitions
 *
 * Child Theme for Elementor built by Good Agency.
 *
 * @package GoodAgencyElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function good_agency_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'good-agency-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'good_agency_elementor_child_enqueue_scripts', 20 );


function custom_login_logo_and_background() {
    ?>
    <style type="text/css">
        body.login {
            background-color: #06435A; /* Change this to your desired background color */
        }
        body.login a,
        body.login #backtoblog a,
        body.login #nav a {
            color: #ffffff; /* Set the text color outside of the login container to white */
            text-decoration: none;
        }
        body.login a:hover,
        body.login #backtoblog a:hover,
        body.login #nav a:hover {
            color: #ffffff; /* Set the hover color to white */
            text-decoration: underline;
        }
        body.login #login h1 a {
            background-image: url('https://goodagency.nyc/wp-content/uploads/2020/05/Good_agenct_logo_light.svg'); /* External logo URL */
            background-size: 100%; /* Adjust this value to scale your logo */
            width: 120px; /* Adjust this value according to your logo width */
            height: 120px; /* Adjust this value according to your logo height */
        }
        body.login #login form {
            border-radius: 10px; /* Increase the border radius of the login container */
            box-shadow: 0 4px 6px rgba(6, 67, 90, 0.2); /* Add a subtle box shadow to the login container */
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo_and_background');


function custom_login_logo_url() {
    return 'https://goodagency.nyc/';
}
add_filter('login_headerurl', 'custom_login_logo_url');
