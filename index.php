Product Image Include in WooCommerce Email

// Adds image to WooCommerce order emails
function w3p_add_image_to_wc_emails( $args ) {
    $args['show_image'] = true;
    $args['image_size'] = array( 150, 150 );
    return $args;
}
add_filter( 'woocommerce_email_order_items_args', 'w3p_add_image_to_wc_emails' );