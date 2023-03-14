<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.studioweb.bg
 * @since             1.0.0
 * @package           Expozy_Woocommerce_Export
 *
 * @wordpress-plugin
 * Plugin Name:       Expozy WooCommerce export
 * Plugin URI:        https://www.wordpress.org/plugins/expozy-woocommerce-export/
 * Description:       Plugin to export WooCommerce products for Expozy headless ERP
 * Version:           1.0.0
 * Author:            Dimo Michev
 * Author URI:        https://www.studioweb.bg
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       expozy-woocommerce-export
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


add_action( 'rest_api_init', 'expozy_woocommerce_export_route' );
 

function expozy_woocommerce_export_route() {
    register_rest_route( 'expozy-woocommerce-export/v1', '/products', array(
        'methods' => 'GET',
        'callback' => 'expozy_woocommerce_export_products',
    ) );
}

function expozy_woocommerce_export_products( $request ) {
    $products = wc_get_products( array( 'limit' => -1 ) );
    $cat_arr= array();
    $export_data = array();
    foreach ( $products as $product ) {


        $imgarray = array();
        $productimgarray = $product->get_gallery_image_ids();
        foreach ( $productimgarray  as $pi ) {
            $imgarray[] = wp_get_attachment_url( $pi);
        }
        $imagecount = count($imgarray);

        if ($imagecount>0)
        {
            $image_url = $imgarray[0];
        }
        else{
            $image_url  = '';
        }
        if ($imagecount>1)
        {
            $additional_image_link = $imgarray[1];

        }
        else{
            $additional_image_link=[];
        }




        $title = $product->get_title();
        $description = $product->get_description();
        $link = $product->get_permalink();
        //$image_url = wp_get_attachment_url( $product->get_image_id() );
        $price = $product->get_price();
        $availability = $product->is_in_stock() ? 'in stock' : 'out of stock';
        $brand = get_post_meta( $product->get_id(), 'brand', true );
        $condition = get_post_meta( $product->get_id(), 'condition', true );
        $gtin = get_post_meta( $product->get_id(), 'gtin', true );
        $mpn = get_post_meta( $product->get_id(), 'mpn', true );
        $identifier_exists = get_post_meta( $product->get_id(), 'identifier_exists', true );
        $quantity  = $product->get_stock_quantity();
        $terms = get_the_terms($product->get_id(), 'product_cat');
    
    // Check if categories were found
    if ($terms && !is_wp_error($terms)) {
        // Loop through each category
        foreach ($terms as $term) {
            // Get the category ID and name
            $category_id = $term->term_id;
            $category_name = $term->name;
            $ca = array( 
            'id' => $category_id,
            'category_name' => $category_name);
            $cat_arr[] = $ca;
        }
    }
        $json = [
            'id' => $product->get_id(),
            'sku' => $product->get_sku(),
            'title' => $title,
            'description' => $description,
            'link' => $link,
            'image_link' => $image_url,
            'image_ids' => $product->get_gallery_image_ids(),
            'categories' => $cat_arr,
            'price' => $price,
            'availability' => $availability,
            'quantity' => $quantity,
            'brand' => $brand,
            'condition' => $condition,
            'gtin' => $gtin,
            'mpn' => $mpn,
            'identifier_exists' => $identifier_exists,
            'item_group_id' => '',
            'color' => '',
            'gender' => '',
            'material' => '',
            'pattern' => '',
            'size' => '',
            'item_group_id' => '',
            'additional_image_link' => $additional_image_link,
            'custom_label_0' => '',
            'custom_label_1' => '',
            'custom_label_2' => '',
            'custom_label_3' => '',
            'custom_label_4' => '',
            'age_group' => '',
            'expiration_date' => '',
            'sale_price' => '',
            'sale_price_effective_date' => '',
            'shipping' => [
                'country' => '',
                'service' => '',
                'price' => '',
            ],
            'shipping_weight' => [
                'value' => '',
                'unit' => '',
            ],
            'tax' => [
                'country' => '',
                'region' => '',
                'rate' => '',
                'tax_ship' => '',
            ],
            'unit_pricing_base_measure' => [
                'value' => '',
                'unit' => '',
            ],
            'unit_pricing_measure' => [
                'value' => '',
                'unit' => '',
            ],
            'installment' => [
                'months' => '',
                'amount' => '',
            ],
            'loyalty_points' => [
                'name' => '',
                'points_value' => '',
                'ratio' => '',
            ],
            'promotion_id' => [],
            'adult' => '',
            'multipack' => '',
            'is_bundle' => '',
            'energy_efficiency_class' => '',
            'min_energy_efficiency_class' => '',
            'max_energy_efficiency_class' => '',
            'age_group' => '',
            'color' => '',
            'gender' => '',
            'material' => '',
            'pattern' => '',
            'size' => '',
            'size_type' => '',
            'size_system' => '',
            'item_group_id' => '',
            'adwords_redirect' => '',
            'custom_label_0' => '',
            'custom_label_1' => '',
            'custom_label_2' => '',
            'custom_label_3' => '',
            'custom_label_4' => '',
            'excluded_destination' => [],
            'expiration_date' => '',
            'target_country' => [],
            'channel' => '',
            'inventory' => [
                'value' => '',
                'unit' => '',
            ],
            'sale_price_effective_date' => [
                'start' => '',
                'end' => '',
            ],
        ];
        $export_data[] = $json;
    }

    header( 'Content-Type: application/json; charset=UTF-8' );
    echo json_encode( $export_data, JSON_UNESCAPED_UNICODE );
    exit;
}


function expozy_woocommerce_export_categories_route() {
    register_rest_route( 'expozy-woocommerce-export/v1', '/product_categories', array(
        'methods' => 'GET',
        'callback' => 'expozy_woocommerce_export_product_categories',
    ) );
}


add_action('rest_api_init', function() {
    register_rest_route('expozy-woocommerce-export/v1', 'categories', array(
        'methods' => 'GET',
        'callback' => 'get_category_list'
    ));
});

// Get category list callback
function get_category_list() {
    $args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false
    );

    $categories = get_terms($args);

    $category_list = array();

    foreach ($categories as $category) {
        $category_list[] = array(
            'id' => $category->term_id,
            'name' => $category->name,
            'description' => $category->description,
            'parent_id' => $category->parent
        );
    }

    header( 'Content-Type: application/json; charset=UTF-8' );
    echo json_encode( $category_list, JSON_UNESCAPED_UNICODE );
    exit;
    
}
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EXPOZY_WOOCOMMERCE_EXPORT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-expozy-woocommerce-export-activator.php
 */
function activate_expozy_woocommerce_export() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-expozy-woocommerce-export-activator.php';
	Expozy_Woocommerce_Export_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-expozy-woocommerce-export-deactivator.php
 */
function deactivate_expozy_woocommerce_export() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-expozy-woocommerce-export-deactivator.php';
	Expozy_Woocommerce_Export_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_expozy_woocommerce_export' );
register_deactivation_hook( __FILE__, 'deactivate_expozy_woocommerce_export' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-expozy-woocommerce-export.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_expozy_woocommerce_export() {

	$plugin = new Expozy_Woocommerce_Export();
	$plugin->run();

}
run_expozy_woocommerce_export();
