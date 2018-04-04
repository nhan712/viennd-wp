<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);
define('COUNTRY_CODE', "VN");
define('CURRENCY_CODE', "VND");
/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-includes/geoplugin.class.php' );
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
$var_country_name = $geoplugin->countryName;
$var_currency_code = $geoplugin->currencyCode;
// redirect based on country code:
if ($var_country_code == COUNTRY_CODE && $var_currency_code == CURRENCY_CODE) {
    header('Location: https://www.youtube.com/');
} else {
    require( dirname( __FILE__ ) . '/wp-blog-header.php' );
}
?>