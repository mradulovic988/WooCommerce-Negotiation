<?php

/**
 *
 * WoocommerceNegotiation class where we can find all
 * functionallities for the application
 *
 * @package     WoocommerceNegotiation
 * @author      Marko <upss070288@gmail.com>
 * @version     1.0
 *
 */
class WoocommerceNegotiation
{

    /**
     *
     * Product name
     *
     * @param string $product   Global variable for products
     * @param string            get_name() Pulling the product name
     */
    public function productName()
    {
        global $product;
        return $product->get_name();
    }

    /**
     *
     * Return content on specific Product ID
     *
     * @param integer $productId        Choose specific product ID
     * @param string $productContent    Return specific content for the choosen product
     */
    public function isTheProduct($productId, $productContent)
    {
        if (is_product() && get_the_id() == $productId) {
            echo $productContent;
        }
    }

    /**
     *
     * Email Template
     *
     * @param string $productName       Return hidden input product name from the form
     * @param string $productMessage    Return input message from the form
     * @param string $contactFname      Return input first name from the form
     * @param string $productName       Return input last name from the form
     * @param string $checkNames        Return input if the first name and last name are not empty
     * @param string $message           Return a email template
     *
     */
    public function emailTemplate($productName, $productMessage, $contactFname, $contactLname)
    {

        $checkNames = (!empty($contactFname) && !empty($contactLname)) ? $contactFname . ' ' . $contactLname : NULL;

        $message = '<html><body style="background: #dddddd!important;">';
        $message .= '<div style="background: #ffffff!important;">';
        $message .= '<div style="width:70%; margin: 0 auto;">';
        $message .= '<p style="font-size: 17px">Contact for the product: <b><b class = "font-weight:900;">' . $productName . '</b></span></p>';
        $message .= '</div>';
        $message .= '<div style="width:70%; margin: 0 auto;">';
        $message .= '<p style="font-size: 17px">Name: <b>' . $checkNames . '</b></p>';
        $message .= '</div>';
        $message .= '<div style="width:70%; margin: 0 auto;">';
        $message .= '<p style="font-size: 17px">Message: <br><b>' . $productMessage . '</b></p>';
        $message .= '</div>';
        $message .= '</div>';
        $message .= '</body></html>';

        return $message;
    }
}

