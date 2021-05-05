<?php
/**
 * This snippets are made to be used on the functions.php file on your wordpress site child theme.
 */

/**
 * Change the content in the product loop title, in this example, I added the SKU below the title
 * You don't need to use a filter or hook in this case, just override the default function
 */
function woocommerce_template_loop_product_title() {
    global $product;
    echo '<h2 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo '<h3 class="'. esc_attr( apply_filters( 'woocommerce_product_loop_sku_classes', 'woocommerce-loop-product__sku' ) ) .'">'. $product->get_sku() .'</h3>';
}

/**
 * Change the default size for a given product image type
 * In this example, I changed the default width for the thumbnail from 100px to 400px
 */
function woocommerce_enlarge_picture_thumb($size) {
    $size['width']  = absint( wc_get_theme_support( 'gallery_thumbnail_image_width', 400 ) );
    $size['height'] = $size['width'];
    $size['crop']   = 1;
    return $size;
}
add_filter('woocommerce_get_image_size_gallery_thumbnail', 'woocommerce_enlarge_picture_thumb');