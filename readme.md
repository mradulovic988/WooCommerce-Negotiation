<!-- PROJECT LOGO -->
<br />
<p align="center">

  <h1 align="center">WooCommerce Negotiation</h1>

  <p align="center">
    This small app is used for every single product, where the user want to contact the administrator and to negotiate about the price.
    <br />
  </p>
  <img src="/img/popup.png" alt="popup" width="100%">
</p>


<!-- Including -->
## Including

Add below code on every place where you want to include this app into your project:

`<?php get_template_part('/woocommerce-negotiation/content', 'woocommerce-negotiation') ?>`

<img src="/img/single-product.png" alt="popup" width="100%">

<!-- How to use -->
## How To Use

- You need to add ***Product ID*** from excluded place for the description in: `/templates/content-popup.php` on line: `10`
- You need to add a ***e-mail*** address on which you want to receive an emails in: `/templates/content-popup-controller.php` on line `28`
- You need to add a `CSS` code which you need to add in your `style.css` in the ***child theme***. You can find it below:
```
.contentAboveButton {
    font-size: 21px;
    font-weight: 900;
    line-height: 1.2;
}

.contactWrapper {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7);
}

.contactContent {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
}

.contactClose {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.contactClose:hover,
.contactClose:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

p.productName {
    text-align: center;
    font-size: 21px;
    font-weight: 400;
}

span.productNameSpan {
    font-weight: 900;
}

.contactRow {
    margin-bottom: 20px;
}

button.contactSubmit {
    background: #EC7A5C;
    color: #fff;
    padding: 15px 30px;
    border: 1px solid #ec7a5c;
    transition: all .3s ease;
}

button.contactSubmit:hover {
    background: #fff;
    padding: 15px 30px;
    color: #ec7a5c;
    cursor: pointer;
}

.contactSuccess {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    margin-top: 20px;
}

.contactFailed {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    margin-top: 20px;
}
```

If you want to extend this app all you need to do is to instantiate `WoocommerceNegotiation` class in `classes/content-class.php`

<!-- CONTACT -->
## Contact

<p>Author: Marko Radulovic </p>
<p>Find me on: <a href="https://www.linkedin.com/in/marko-radulovic/" target="_blank">LinkedIn</a></p>
<p>Email: <a href="mailto:upss070288@gmail.com">upss070288@gmail.com</a></p>