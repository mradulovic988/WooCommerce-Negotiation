<?php
/**
 *
 * @package     WooCommerce Negotiation
 * @author      Marko <upss070288@gmail.com>
 * @version     1.0
 * @license     GPL-3.0-or-later
 * @copyright   © 2020 M Lab Studio
 *
 * This small app is used for every single product, where the user
 * want to contact the administrator and to negotiate about the price.
 *
 * Include get_template_part('/woocommerce_negotiation/content', 'woocommerce-negotiation')
 * on every place where you want this action in WooCommerce.
 *
 * If you want to extend this application all you need to do
 * is to instantiate ProductContact class in classes/content-class.php
 *
 */

get_template_part('/woocommerce-negotiation/classes/content', 'class');                 // All methods
get_template_part('/woocommerce-negotiation/templates/content', 'popup');               // Popup form
get_template_part('/woocommerce-negotiation/templates/content', 'popup-controller');    // Form controller