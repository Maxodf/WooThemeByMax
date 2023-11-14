<?php get_header(); ?>


<h1> Theme by Max for WooCommerce</h1>
<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="">


<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <p>Bootstrap</p>
        </div>
        <div class="col-6">
            <p>for the grid & Column</p>
        </div>
        <div class="col-6 animation">
            GSAP animation
        </div>
        <div class="col-12">
            and FontAwesome Icons :
            <i class="fas fa-heart"></i>
            <i class="fas fa-home"></i>
            <i class="fas fa-user"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-snapchat"></i>
        </div>
        <br><br>
        <div class="col-12">
            <h2>Optimiser Woocommerce :</h2>
            <h3>Produits :</h3>
        </div>
        <br><br>
        <div class="container">
            <div class="row">

            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1, 
            );

            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
                    ?>
                    <div class="col-4">
                        <h2><?php the_title(); ?></h2>
                        <div>
                            <?php the_post_thumbnail('medium');?>
                            <p><?php echo $product->get_short_description(); ?></p>
                        </div>
                        <p>Prix : <?php echo $product->get_price_html(); ?></p>
                        <a href="<?php echo $product->get_permalink(); ?>">Voir le produit</a>
                        <br>
                        <?php woocommerce_template_loop_add_to_cart();?>
                    </div>
                <?php endwhile;
            else :
                echo 'Pas de produits X';
            endif;

            wp_reset_query();
            ?>


            </div>
        </div>


    </div>
</div>


<?php get_footer(); ?>
