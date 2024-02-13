<?php
/**
 * Plugin Name:     Boiron additional CSS
 * Plugin URI:      https://leefun.us/
 * Description:     CSS
 * Author:          Leefun
 * Author URI:      https://leefun.us/
 * Text Domain:     boiron-additional-css
 * Domain Path:     /languages
 * Version:         0.0.1
 *
 * @package         boiron-additional-css
 */

add_action( 'wp_footer','boiron_css' );
function boiron_css() {
?>

<style>

#post-18 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-b0ea057.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div > div > div > div > div > div.woocommerce-notices-wrapper {
	display: none;
}

li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--store-credit, li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--downloads, li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--my-coupons {
	display:none;
}

/* on sale badge */
span.onsale.circle {
	display: block;
	font-size: 20px;
	font-weight: 600;
	border-radius: 1px !important;
	min-height: 30px !important;
	line-height: 30px !important;
	/* width:80px; */
}

/* adjust overlay */
div.slick-list.draggable {
	z-index: 0;
}

section.elementor-section.elementor-top-section.elementor-element.elementor-element-a74be13.elementor-section-full_width.elementor-hidden-mobile.elementor-section-height-default.elementor-section-height-default.elementor-sticky {
	position:relative;
/* 	display:none; */
	z-index: 10;
}

button.slick-next.slick-arrow, button.slick-prev.slick-arrow {
/* 	position:relative; */
	z-index: 1;
}


section.elementor-section.elementor-top-section.elementor-element.elementor-element-79393e7.elementor-hidden-desktop.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default.elementor-sticky {
	z-index: 10;
	/* display:none; */
}

section.elementor-section.elementor-top-section.elementor-element.elementor-element-d40ad01.elementor-section-full_width.elementor-hidden-desktop.elementor-section-height-default.elementor-section-height-default {
	z-index: 5;
}

section.elementor-section.elementor-top-section.elementor-element.elementor-element-5fe84da.elementor-section-full_width.elementor-section-height-default.elementor-section-height-default.elementor-sticky.elementor-sticky--active.elementor-section--handles-inside.elementor-sticky--effects {
	z-index: 7;
}

/* hide store credit */
div#acfw-checkout-ui-block {
	display:none;
}

/* shrink the huge check mark in BV */
#BVRRContainer > div > div > div > div > ol > li > div.bv-content-item-author-profile-offset.bv-content-item-author-profile-offset-on > div.bv-content-container > div > div.bv-content-details-offset-on > div > div > div.bv-content-data > div.bv-content-data-recommend-yes > div.bv-content-data-value > span.bv-content-data-icon > img {
max-width: 1.5% !important;  
height: auto !important;
}

#BVRRContainer > div > div > div > div > ol > li.bv-content-item.bv-content-top-review.bv-content-review.bv-content-loaded > div.bv-content-item-author-profile-offset.bv-content-item-author-profile-offset-on > div.bv-content-container > div > div.bv-content-details-offset-on > div > div > div.bv-content-data > div.bv-content-data-recommend-yes > div.bv-content-data-value > span.bv-content-data-icon > img {
max-width: 1.5% !important;  
height: auto !important;  
}


/* unknown */
#post-184964 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-1a99d44.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-959de06 > div > div > div > div > ul > li > div.astra-shop-thumbnail-wrap {
	display:none;
}

#post-184964 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-1a99d44.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-371edc4 > div > div > div > div > ul > li > div.astra-shop-summary-wrap {
	display:none;
}

#post-184964 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-1a99d44.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-16a2504 > div > div > div > div > ul > li > div.astra-shop-thumbnail-wrap {
	display:none;
}

#post-184964 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-1a99d44.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-ba8c5ee > div > div > div > div > ul > li > div.astra-shop-summary-wrap {
	display:none;
}

#post-18233 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-a718cfe.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-a79a3b6 > div > div > div > div > ul > li > div.astra-shop-thumbnail-wrap {
	display:none;
}

#post-18233 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-a718cfe.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-6f5c258 > div > div > div > div > ul > li > div.astra-shop-summary-wrap {
	display:none;
}

#post-18233 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-a718cfe.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-28488ff > div > div > div > div > ul > li > div.astra-shop-thumbnail-wrap {
	display:none;
}

#post-18233 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-a718cfe.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-25.elementor-top-column.elementor-element.elementor-element-a5aafca > div > div > div > div > ul > li > div.astra-shop-summary-wrap {
	display:none;
}

/* center align text for arnicare products comparison table */
div.dataTables_scroll th {
    text-align: center;
}


div.dataTables_scroll td {
    text-align: center;
	
}

/* hide "Edit" under the arnicare products comparison table */
div.dataTables_scrollFoot {
	display:none;
}

.ht-products .ht-product .ht-product-inner .ht-product-image-wrap .ht-product-label {
	font-size: 20px;
}

/* Make table header background white */
/* .tablepress {
	--head-bg-color: #FFFFFF;
} */

/* promo page free-shipping green box adjustment */
#post-18233 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-442f3fe.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-d800210 > div {
height: 225px;
margin-top: 11px;
}

#post-18233 > div.entry-content.clear > div > section.elementor-section.elementor-top-section.elementor-element.elementor-element-c1cc4e9.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default > div > div.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-edeba45 > div > div > div > div {
  height: 66px;
}

/* adjust news letter subscription input box margin for French version */
input[id=fieldEmail][placeholder="Votre courriel"] {
	margin-right:20px;
}

/* newsletter signup input styling */
input#fieldEmail.js-cm-email-input.o-input {
	margin-left:20px;
	margin-bottom:20px;
}

/* add padding for "Action Button" in product slider */
.ht-product-action ul li.woolentor-cart a.button {

	padding: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
	border-radius: 10px;
}

/* shrink A-Z listing letters */
.az-letters > ul.az-links > li, .a-z-listing-widget .az-letters > ul.az-links > li, .a-z-listing-widget.widget .az-letters > ul.az-links > li {
    list-style: none;
    width: 1.6em;
    height: 1.4em;
    box-sizing: border-box;
    margin: 0 0.1em 0.6em;
    border: 2px solid #ffff;
    background: #ffff;
    color: #adadad;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* adjustment for mobile */
@media screen and (max-width: 600px) {

/* switch banner image */
/* section.elementor-section.elementor-top-section.elementor-element.elementor-element-5c82900.elementor-section-full_width.elementor-section-height-default.elementor-section-height-default > div > div > div > div > div > img {
	content:url("https://boiron-ca.s3.amazonaws.com/prod/misc/10.23-B2C-BANNIERE-ARNICARE_ROLLON_414X500px_ENG.webp");
}

section.elementor-section.elementor-top-section.elementor-element.elementor-element-589dad5.elementor-section-full_width.elementor-section-height-default.elementor-section-height-default > div > div > div > div > div > img {
	content:url("https://boiron-ca.s3.amazonaws.com/prod/misc/10.23-B2C-BANNIERE-ARNICARE_ROLLON_414X500px_FR.webp");
} */

/* hide 2nd and 3rd blog posts */
.uael-post-grid__inner.uael-post__columns-3.uael-post__columns-tablet-2.uael-post__columns-mobile-1 > div:nth-child(2) {
	display: none;	
}
.uael-post-grid__inner.uael-post__columns-3.uael-post__columns-tablet-2.uael-post__columns-mobile-1 > div:nth-child(3) {
	display: none;	
}

li.wpml-ls-slot-shortcode_actions.wpml-ls-item.wpml-ls-item-en.wpml-ls-first-item.wpml-ls-item-legacy-list-horizontal a.wpml-ls-link {
	  border-style: solid;
	border-width: 1px;
	border-color:#ffffff;
  border-right-color: #075fab;
	
		padding-top: 0px;
  padding-right: 4px;
  padding-bottom: 0px;
  padding-left: 0px;
}
	
li.wpml-ls-slot-shortcode_actions.wpml-ls-item.wpml-ls-item-fr.wpml-ls-last-item.wpml-ls-item-legacy-list-horizontal a.wpml-ls-link {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 4px;
}
	
	li.wpml-ls-slot-shortcode_actions.wpml-ls-item.wpml-ls-item-en.wpml-ls-current-language.wpml-ls-first-item.wpml-ls-item-legacy-list-horizontal a.wpml-ls-link {
	  border-style: solid;
	border-width: 1px;
	border-color:#ffffff;
  border-right-color: #075fab;
		
	padding-top: 0px;
  padding-right: 4px;
  padding-bottom: 0px;
  padding-left: 0px;
}
	
	#dgwt-wcas-search-input-2 {
/* 		display:none; */
		width:100% !important;
	}
	
	a.elementor-toggle-title {
	font-size: 15px !important;
	}
	div.uael-post__content-wrap > h3 > a {
	font-size: 15px !important;
/* 		display:none; */
	}
	
h2.elementor-heading-title {
	font-size: 25px !important;
}
	h2.woocommerce-loop-category__title {
	font-size: 9px !important;
	}
	
	a.customize-unpreviewable {
	font-size: 11px !important;
	}
	
	h4.c-careers-header__text {
	font-size: 15px !important;
	}
}

/* adjustment for desktop view */
@media screen and (min-width: 601px) {

/* modify on sale badge */
.woocommerce span.onsale {
	/* font-size: 15px; */
}

/*  */
li.wpml-ls-slot-shortcode_actions.wpml-ls-item.wpml-ls-item-en.wpml-ls-first-item.wpml-ls-item-legacy-list-horizontal a.wpml-ls-link {
	  border-style: solid;
	border-width: 1px;
	border-color:#ffffff;
  border-right-color: #075fab;
	  padding-top: 0px;
  padding-right: px;
  padding-bottom: 0px;
  padding-left: px;
}
	
li.wpml-ls-slot-shortcode_actions.wpml-ls-item.wpml-ls-item-en.wpml-ls-current-language.wpml-ls-first-item.wpml-ls-item-legacy-list-horizontal a.wpml-ls-link {
	  border-style: solid;
	border-width: 1px;
	border-color:#ffffff;
  border-right-color: #075fab;
	  padding-top: 0px;
  padding-right: px;
  padding-bottom: 0px;
  padding-left: px;
}
	
h2.elementor-heading-title {
	font-size: 50px !important;
}
}

/* adjust "add to cart" font size for mobile */
@media screen and (max-width: 600px) {
a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, a.button.product_type_variable.add_to_cart_button {
	font-size: 12px;
}
	
}

#content > div > div > section > div > div > div > div.elementor-element.elementor-element-02b6470.elementor-widget.elementor-widget-theme-archive-title.elementor-page-title.elementor-widget-heading > div > h1 {
	font-size:5vw;
}

/* adjust breadcrum margin-top */
div.ast-breadcrumbs-wrapper {
	margin-top: 25px;
}

/* hide "uncategory" in blog index page */
#block-7 > ul > li.cat-item.cat-item-2:lang(fr-FR) {
	display:none;
}

#block-7 > ul > li.cat-item.cat-item-1:lang(en-US) {
	display:none;
}

.woocommerce .up-sells h2, .woocommerce .related.products h2, .woocommerce .woocommerce-tabs h2 {
    font-size: 2rem;
}


/* hide mobile site title */

div.ast-site-title-wrap .site-title a {
	display:none;
}

.data_points img {
    max-width:5%;
    height:auto;
}

.data_points li {
	list-style-type:none
}

.woocommerce ul.products li.product .woocommerce-loop-category__title .count, .woocommerce-page ul.products li.product .woocommerce-loop-category__title .count {
    display: none;
    background: 0 0;
    opacity: .5;
    font-size: .75em;
}

.woocommerce ul.products, .woocommerce-page ul.products {
    column-gap: 50px;
}

button.js-cm-submit-button.o-button.no-barba, button#wpforms-submit-182946.wpforms-submit, button#wpforms-submit-183086.wpforms-submit, button#wpforms-submit-182962.wpforms-submit {
	    box-sizing: border-box;
border-style: solid;
    border-top-width: 0;
    border-right-width: 0;
    border-left-width: 0;
    border-bottom-width: 0;
    color: #ffffff;
    border-color: var(--ast-global-color-0);
    background-color: var(--ast-global-color-0);
    border-radius: 3px;
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    font-family: inherit;
    font-weight: inherit;
    line-height: 1em;

}

h1.entry-title {
	font-weight: 700;
	text-align: left;
	margin-bottom: 15px;
	padding: 0;
	font-size: 4.25rem;
	color: #075fab;
  line-height: 1.2;	
}

h2.woocommerce-loop-product__title {
	font-weight: 700;
	text-align: left;
	margin-bottom: 15px;
	padding: 0;
	font-size: 1.4375rem;
	color: #075fab;
  line-height: 1.2;

}

h1.woocommerce-products-header__title.page-title {
	margin-bottom: 2.5rem;
	color: #075fab;
	font-size: 4.25rem;
	line-height: 1!important;
  font-weight: 700;
}


.site-header .ast-inline-search.ast-search-menu-icon .search-field {
    width: 500px;
}

/* Stretch main search bar */
#dgwt-wcas-search-input-2 {
    width: 500px;
}

/* MDT search bar styling */
#searchTerm {
  border-radius: 15px !important;
	width:50%;
	border: solid 0.3px #075fab;
	outline : none;
}

</style>

<?php
}
