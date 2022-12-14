<?php

/**
 * Initialise the site and any requirements that are needed.
 * You can redact things here and make it inherit from a parent boilerplate
 * if you wish to streamline things/remove from repetition.
 *
 * @version 1.0.0
 */
class BaseSite extends Timber\Site
{
    public function __construct()
    {
        /* Set up initial theme, supports, commerce */
        add_action('after_setup_theme', [$this, 'theme_supports']);

        /* Register Menus */
        add_action('after_setup_theme', [$this, 'menus']);

        /* Register Sidebars */
        add_action('widgets_init', [$this, 'sidebars']);

        /* Add Context to Timber when loading */
        add_filter('timber/context', [$this, 'add_to_context']);

        /* Init parent construct from timber */
        parent::__construct();
    }

    /**
     * Add support for themes, menus, etc.
     *
     * @return void
     */
    public function theme_supports()
    {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        add_theme_support('menus');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('align-wide');
        add_theme_support('responsive-embeds');
        add_theme_support('html5', ['comment-form', 'comment-list', 'gallery', 'caption']);
    }

    /**
     * Add context to timber here - this is useful for anything shared between themes.
     *
     * @param  mixed $context
     * @return void
     */
    public function add_to_context($context)
    {
        $context['site'] = $this;
        $context['options'] = get_fields('option');
        $context['primaryMenu'] = new Timber\Menu('Primary Menu');
        // Check if the secondary nav menu location has a menu assigned to it
        if( has_nav_menu( 'secondary' ) ) {
            $context['secondaryMenu'] = new Timber\Menu('Secondary Menu');
        }
        $context['footerMenu'] = new Timber\Menu('Footer Menu');

        // Top Categories 
        $top_args = array(
            'hide_empty' => false,
            'parent' => 0,
        );
        $topProductCats = get_terms( 'product_cat', $top_args);
        
        $hidden = array();
        foreach($topProductCats as $term) {
            if(get_field('hidden_category',$term) == true) {
                array_push($hidden,$term->term_id);
            }
        }

        $top_args = array(
            'hide_empty' => false,
            'parent' => 0,
            'exclude'  => $hidden,
        );
        $topProductCats = get_terms( 'product_cat', $top_args);
        $context['topProductCats'] = $topProductCats;

        // Room Categories 
        $cat_args = array(
            'hide_empty' => false,
            'parent' => 758,
        );
        $roomProductCats = get_terms( 'product_cat', $cat_args);

        $hiddenRooms = array();
        foreach($roomProductCats as $term) {
            if(get_field('hidden_category',$term) == true) {
                array_push($hiddenRooms,$term->term_id);
            }
        }

        $cat_args = array(
            'hide_empty' => false,
            'parent' => 758,
            'exclude'  => $hiddenRooms,
        );
        $roomProductCats = get_terms( 'product_cat', $cat_args);
        $context['roomProductCats'] = $roomProductCats;
        
        // Stores
        $stores = array(
            'post_type'  => 'stores',
            'post_status' => array('publish', 'private'),
            'posts_per_page' => 6,
        );
        $context['stores'] = new Timber\PostQuery($stores);

        // Reviews
        $reviews = array(
            'post_type'           => 'reviews',
            'post_status'         => 'publish',
            'posts_per_page'      => 6,
        );
        $context['reviews'] = new Timber\PostQuery($reviews);

        return $context;
    }

    /**
     * Register the Menus
     *
     * @return void
     */
    public function menus()
    {
        register_nav_menus([
            'primary' => __('Primary Menu', 'adtrak'),
            'secondary' => __('Secondary Menu', 'adtrak'),
            'footer' => __('Footer Menu', 'adtrak')
        ]);
    }

    /**
     * Register the sidebars
     *
     * @return void
     */
    public function sidebars()
    {
        register_sidebar([
            'id' => 'sidebar',
            'name' => __('Sidebar', 'adtrak'),
            'description' => __('A short description of the sidebar.', 'adtrak'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ]);
    }
}


// Product video shortcode
function video($atts) {
    shortcode_atts(array(
        'url' => false,
    ), $atts);
    ob_start();
    $url = str_replace("watch?v=","embed/",$atts['url']);
    $a = '<iframe width="560" height="315" class="max-w-full" src=' . $url . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    ob_get_clean();
    return $a;
}
add_shortcode('ux_video', 'video');


// Basket with count
add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but($atts) {
    shortcode_atts(array(
        'classes' => false,
    ), $atts);
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>
        <a class="cart-contents <?php echo $atts['classes']; ?>" href="<?php echo $cart_url; ?>" title="My Basket">
        <svg class="icon icon-basket"><use href="/wp-content/themes/thanet-bedz/_resources/images/icons-sprite.svg#icon-basket"></use></svg>
	    <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?>
        <span class="sr-only">Basket</span>
        </a>
        <?php
	        
    return ob_get_clean();

}


// Is variable product?
function is_variable($id) {
    $product = wc_get_product($id);
    if( $product ) :
        if ( $product->is_type( 'variable' ) ) :
            return true;
        else:
            return false;
        endif;
    endif;
}