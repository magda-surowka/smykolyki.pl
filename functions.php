<?php

/**
* Change the test for "In Stock / Quantity Left / Out of Stock".
*/

add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {
   global $product;
   	// Change In Stock Text
    if ( $_product->is_in_stock() ) {
        $availability['availability'] = __('', 'woocommerce');
    }
    // Change in Stock Text to only 1 or 2 left
    if ( $_product->is_in_stock() && $product->get_stock_quantity() <= 5 ) {
      $availability['availability'] = sprintf( __('Ze względu na dużą ilość zamówień, czas realizacji zamówienia z tym produktem może zostać wydłużony do 7 dni roboczych.', 'woocommerce'), $product->get_stock_quantity());
  }
      // Change Out of Stock Text
    if ( ! $_product->is_in_stock() ) {
    	$availability['availability'] = __('', 'woocommerce');
    }

    return $availability;
}

// Vendors
require_once(get_template_directory()	. '/functions/admin-setup.php');

// Vendors
require_once(get_template_directory()	. '/inc/_vendor/kirki/kirki.php');

// Helpers
require_once(get_template_directory() 	. '/functions/helpers.php');

// Body Classes
require_once(get_template_directory() 	. '/functions/body-classes.php');

// Menus
require_once(get_template_directory() 	. '/inc/menus/menus.php');

// Theme Setup
require_once(get_template_directory() 	. '/functions/menu-walkers.php');
require_once(get_template_directory() 	. '/functions/mega-menu.php');
require_once(get_template_directory() 	. '/functions/mega-dropdown.php');
require_once(get_template_directory() 	. '/functions/theme-setup.php');
require_once(get_template_directory() 	. '/functions/ajax-search.php');

// Enqueue Styles & Scripts
require_once(get_template_directory() 	. '/functions/enqueue/default-fonts.php');
require_once(get_template_directory() 	. '/functions/enqueue/google-fonts.php');
require_once(get_template_directory() 	. '/functions/enqueue/theme-icon-fonts.php');
require_once(get_template_directory() 	. '/functions/enqueue/styles.php');
require_once(get_template_directory() 	. '/functions/enqueue/scripts.php');
require_once(get_template_directory() 	. '/functions/enqueue/admin-styles.php');
require_once(get_template_directory() 	. '/functions/enqueue/admin-scripts.php');

// Customiser
require_once(get_template_directory() 	. '/inc/customizer/read_options.php');
require_once(get_template_directory() 	. '/inc/customizer/backend.php');
require_once(get_template_directory() 	. '/inc/customizer/frontend.php');

// WP
require_once(get_template_directory() 	. '/functions/wp/filters.php');
require_once(get_template_directory() 	. '/functions/wp/archive-title.php');
require_once(get_template_directory() 	. '/functions/wp/archive-meta.php');
require_once(get_template_directory() 	. '/functions/wp/popular-posts.php');
require_once(get_template_directory() 	. '/functions/wp/related-posts.php');

// WC
require_once(get_template_directory() 	. '/functions/wc/actions.php');
require_once(get_template_directory() 	. '/functions/wc/filters.php');
require_once(get_template_directory() 	. '/functions/wc/custom.php');

// Widgets
require_once(get_template_directory() 	. '/inc/widgets/widget-areas.php');

// Meta Boxes
require_once(get_template_directory() 	. '/inc/metaboxes/page.php');
require_once(get_template_directory() 	. '/inc/metaboxes/product.php');