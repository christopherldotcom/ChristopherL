<?php
/**
 * Global Config - Knobs and switches to make different things happen.
 *
 * @package ChristopherL.com
 * @copyright 2016-2018 ChristopherL (https://github.com/christopherldotcom)
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */


$config = array(
    // not really that important, make it anything you want (used in generator meta)
    'site_version' => '0.6',


    // Some resources (canonical url, social sharing images) require a complete URL
    // complete your site domain to accomodate this.
    'site_domain' => 'http://christopherl.com',


    // Upload the /img directory to your cdn maintaining the path structure, set this as the root
    'cdn_domain' => '',


    // Site root, this should be blank if you're working from the literal root,
    // however, if you need to work in a subdirectory this setting allows you
    // to do that without globaly hunting for, and changing, hrefs/srcs.
    //
    // NOTE: If you change this make sure you update the .htaccess 404 file path as well
    //
    // Ex) To host from http://mycoolsite.com/christopherl use a site_root value of '/christopherl'
    'site_root' => '',


    // 0 = output markup as-is
    // 1 = removes excess whitespace and compresses page output to single line
    'compress' => 0,


    // 0 = old timey email
    // 1 = slack webhook
    'contact_method' => '0',


    // Email address that should recieve contact form submissions, can be left blank if using slack
    'send_to_address' => 'chris@christopherl.com',


    // slack webhook settings
    'slack_channel' => '#',
    'slack_icon' => ':memo:',
    'slack_url' => '',


    // Optimizely Project ID, if blank JavaScript test code will not be enabled.
    // A/B testing - 0 = disable Optimizely, 1 = enable Optimizely
    // Free signup at: https://www.optimizely.com/
    'optimizely_id' => '',
    'a_b_testing' => 0,


    // Google Analytics Property ID, if blank GA JavaScript code will not be enabled.
    // Free sign-up at: https://www.google.com/analytics
    'google_analytics_id' => '',


    // AddThis Publisher ID, if blank JavaScript sharing code will not be enabled.
    // Free sign-up at: http://www.addthis.com/
    'addthis_id' => '',


    // ID for Hotjar, if blank JavaScript tracking code will not be enabled.
    // Free sign-up at: https://www.hotjar.com/
    'hotjar_id' => '',


    // reCAPTCHA settings & keys (contact form spam prevention)
    // Free sign-up at: https://www.google.com/recaptcha/
    'recaptcha_active' => 0,
    'recaptcha_site_key' => '',
    'recaptcha_secret_key' => '',


    // Webmaster Tools Verification Codes (Google & Bing)
    'google_verification' => '',
    'bing_verification' => '',


    // Google+ URL, used for publisher relationship link tag
    'google_plus_url' => '',


    // Google Maps API Key
    'google_maps_key' => '',
);


// Schema Linked Data Details
$config['schema'] = array(
    // 0 = Organization (For a business site)
    // 1 = Person (For a personal site)
    'type' => 1,


    // Shared properties for both schemas
    'name' => '',
    'telephone' => '',


    // Physical Location / Postal Address
    'street' => '',
    'city' => '',
    'region' => '',
    'postal_code' => '',
    'country' => '',


    // Social profile URLs (used for "same as" references, add additional entries as needed)
    'same_as' => array(
        '',
    ),

    // Person only schemas (leave blank if using Organization)
    'job_title' => '',
    'employer' => '',
    'also_known_as' => '',
);


// Smarty config settings
$config['smarty'] = array(
    'cache' => 0,
    'cache_lifetime' => 604800,
    'debug' => 0,


    // Use path from this file to templates directory
    // Make sure you create these directories if they don't exist
    'template_dir' => __DIR__ . '/templates',
    'compile_dir' => __DIR__ . '/templates/compile',
    'cache_dir' => __DIR__ . '/templates/cache',
);


// Some PHP installs demand a timezone, this avoids issues
ini_set('date.timezone', 'America/Detroit');
