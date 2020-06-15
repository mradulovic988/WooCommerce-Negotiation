<?php
/**
 * Form
 *
 * @package     Form
 * @author      Marko <upss070288@gmail.com>
 * @version     1.0
 * @license     GPL-3.0-or-later
 * @copyright   © 2020 M Lab Studio
 *
 */

$woocommerce_negotiation = new WoocommerceNegotiation();

$content = '<p class="contentAboveButton">Prices range from $19.95 to $29.95 depending on selection of wood and size.</p>';
$content .= '<p class="contentAboveButton">Wood types include Mahogany, Oak, Wenge.</p>';
$content .= '<p class="contentAboveButton">Choose between 6 or 10 mouthpiece capacity.</p>';
$content .= '<p class="contentAboveButton">Larger holders, (holding up to 16) also available.</p>';
$content .= '<p class="contentAboveButton">Click below to submit questions and request pricing.</p>';

$woocommerce_negotiation->isTheProduct('17861', $content);
?>

<button type="button" name="contactProduct" id="contactProductBtn" class="single_add_to_cart_button button alt">Contact</button>
<div id="contactWrapper" class="contactWrapper">

    <div class="contactContent">
        <span class="contactClose">&times;</span>

        <form method="POST" enctype="multipart/form-data">
            <p class="productName">Contact me for product: <span class="productNameSpan"><?= $woocommerce_negotiation->productName(); ?></span></p>
            <div class="contactRow">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
                </div>
            </div>

            <div class="contactRow">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
                </div>
            </div>

            <div class="contactRow">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="<?= $woocommerce_negotiation->productName(); ?>" disabled>
                </div>
            </div>

            <div class="contactRow">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
            </div>

            <div class="contactRow">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="3" placeholder="Send me a detail message" required></textarea>
                </div>
            </div>

            <input type="hidden" name="productName" value="<?= $woocommerce_negotiation->productName() ?>">
            <button type="submit" class="contactSubmit" name="contactSubmit" value="Send">Send</button>

        </form>
    </div>
</div>

<script type="text/javascript">
    let contactWrapper = document.getElementById("contactWrapper");
    let contactProductBtn = document.getElementById("contactProductBtn");
    let contactClose = document.getElementsByClassName("contactClose")[0];
    contactProductBtn.onclick = function() {
        contactWrapper.style.display = "block";
    }
    contactClose.onclick = function() {
        contactWrapper.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == contactWrapper) {
            contactWrapper.style.display = "none";
        }
    }
</script>