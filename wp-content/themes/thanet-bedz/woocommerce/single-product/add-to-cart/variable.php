<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

// use Timber\BaseSite\WooCommerceShipping;

defined( 'ABSPATH' ) || exit;

// $from = mysql_real_escape_string($_POST['from']);
// $to = mysql_real_escape_string($_POST['to']);
// $message = mysql_real_escape_string($_POST['message']);

// $query  = "SELECT location_code FROM adtrakwp_woocommerce_shipping_zone_locations";
// $result = mysql_query($query) or die(mysql_error());


// while($row = mysql_fetch_assoc($result)) {
//     echo $row['location_code'] . "<br>";
// }

global $product;

if (!$product->is_purchasable()) {
	return;
}

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<?php include locate_template('/woocommerce/single-product/add-to-cart/postcode-form.php'); ?>

<div class="hidden" id="cartWrapper">
    <form class="mb-6 variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
        <?php do_action( 'woocommerce_before_variations_form' ); ?>

        <?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
            <p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
        <?php else : ?>
            <table class="w-full variations" cellspacing="0">
                <tbody>
                    <?php foreach ( $attributes as $attribute_name => $options ) : ?>
                        <tr class="flex my-1.5">
                            <th class="sr-only label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label></th>
                            <td class="w-full value">
                                <?php
                                    $name = ucwords(str_replace(["pa_","-"],[""," "],$attribute_name));
                                    wc_dropdown_variation_attribute_options(
                                        array(
                                            'options'   => $options,
                                            'attribute' => $attribute_name,
                                            'product'   => $product,
                                            'show_option_none' => __( ('Select ' . $name), 'woocommerce' ),
                                        )
                                    );
                                    echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php do_action( 'woocommerce_after_variations_table' ); ?>
            
                <div class="single_variation_wrap">
                    <?php
                        /**
                         * Hook: woocommerce_before_single_variation.
                         */
                        do_action( 'woocommerce_before_single_variation' );

                        /**
                         * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
                         *
                         * @since 2.4.0
                         * @hooked woocommerce_single_variation - 10 Empty div for variation data.
                         * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
                         */
                        do_action( 'woocommerce_single_variation' );

                        /**
                         * Hook: woocommerce_after_single_variation.
                         */
                        do_action( 'woocommerce_after_single_variation' );
                    ?>
                </div>

        <?php endif; ?>

        <?php do_action( 'woocommerce_after_variations_form' ); ?>
    </form>
</div>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );

