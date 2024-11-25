<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$aria_describedby = isset( $args['aria-describedby_text'] ) ? sprintf( 'aria-describedby="woocommerce_loop_add_to_cart_link_describedby_%s"', esc_attr( $product->get_id() ) ) : '';

echo apply_filters(
	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
	sprintf(
		'<a href="%s" %s data-quantity="%s" class="%s catalog-block__item-cart btn" %s>%s</a>',
		esc_url( $product->add_to_cart_url() ),
		$aria_describedby,
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		esc_html( $product->add_to_cart_text() )
	),
	$product,
	$args
);
?>
<?php if ( isset( $args['aria-describedby_text'] ) ) : ?>
	<span id="woocommerce_loop_add_to_cart_link_describedby_<?php echo esc_attr( $product->get_id() ); ?>" class="screen-reader-text">
		<?php echo esc_html( $args['aria-describedby_text'] ); ?>
	</span>
<?php endif; ?>
