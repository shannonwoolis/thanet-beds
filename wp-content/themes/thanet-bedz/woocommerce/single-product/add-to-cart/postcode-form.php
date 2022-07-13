<form class="hidden mb-4" id="postcode-checker">
    <p class="mb-2">Please enter your postcode to begin your order:</p>
    <input type="text" id="postcode">
    <input class="cursor-pointer btn btn-primary" type="submit" value="Check" id="postcodeSubmit">
</form>
<div id="formError" class="hidden mb-4">
    <span class="text-secondary">Please enter a valid UK postcode.</span>
</div>
<div id="success" class="hidden mb-4">
    <span class="">Great news, we deliver to your area! Add the product to your basket to checkout. <span class="underline cursor-pointer text-primary changePostcode hover:no-underline">Change my postcode</span></span>
</div>
<div id="error" class="hidden mb-4">
    <span class="block px-4 py-3 mb-2 font-medium text-white bg-primary-dark">To order this product please call us on <?php echo do_shortcode('[ld_default calltag="false"]'); ?></span>
    <span class="underline cursor-pointer changePostcode text-primary hover:no-underline">Change my postcode</span>
</div>