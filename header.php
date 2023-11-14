<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themeByMax
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="/styles/css/main.css" />




	<!-- Librarys -->

		<!-- Bootstrap -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->



		<!-- GSAP -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" defer></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<i class="fas fa-shopping-home"></i>
	<a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
    <div class="cart-info">
		<i class="fas fa-shopping-cart"></i>
        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
            Panier 
            <?php
            $cart_count = WC()->cart->get_cart_contents_count();
            if ( $cart_count > 0 ) {
                echo '<span class="cart-count">' . esc_html( $cart_count ) . '</span>';
            }
            ?>
        </a>
		<div class="woocommerce-pages">
			<a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">Mon compte</a>
			<a href="<?php echo esc_url(wc_get_page_permalink('cart')); ?>">Panier</a>
			<a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">Boutique</a>
		</div>
    </div>

</header>