add_action( 'woocommerce_review_order_before_submit', 'codeithub_add_checkout_per_product_terms', 9 );
    
function codeithub_add_checkout_per_product_terms() {
  
$product_id_1 = 35;
$product_cart_id_1 = WC()->cart->generate_cart_id( $product_id_1 );
$in_cart_1 = WC()->cart->find_product_in_cart( $product_cart_id_1 );
  
if ( $in_cart_1 ) {
       
?>
   
<p class="form-row terms wc-terms-and-conditions">
<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms-1" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms-1'] ) ), true ); ?> id="terms-1"> <span>I agree to <a href="___" target="_blank">terms-1</a></span> <span class="required">*</span>
</label>
<input type="hidden" name="terms-1-field" value="true">
</p>
   
<?php
  
}
  

$product_id_2 = 35;
$product_cart_id_2 = WC()->cart->generate_cart_id( $product_id_2 );
$in_cart_2 = WC()->cart->find_product_in_cart( $product_cart_id_2 );
  
if ( $in_cart_2 ) {
       
?>
  
<p class="form-row terms wc-terms-and-conditions">
<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms-2" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms-2'] ) ), true ); ?> id="terms-2"> <span>I agree to <a href="____" target="_blank">terms-2</a></span> <span class="required">*</span>
</label>
<input type="hidden" name="terms-2-field" value="true">
</p>
   
<?php
  
}
  
}

  
add_action( 'woocommerce_checkout_process', 'codeithub_not_approved_terms_1' );
add_action( 'woocommerce_checkout_process', 'codeithub_not_approved_terms_2' );
   
function codeithub_not_approved_terms_1() {
    if ( $_POST['terms-1-field'] == true ) {
      if ( empty( $_POST['terms-1'] ) ) {
           wc_add_notice( __( 'Please agree to terms-1' ), 'error' );         
      }
   }
}
  
function codeithub_not_approved_terms_2() {
   if ( $_POST['terms-2-field'] == true ) {
      if ( empty( $_POST['terms-2'] ) ) {
         wc_add_notice( __( 'Please agree to terms-2' ), 'error' );         
      }
   }
}
