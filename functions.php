<?php
/* Add your custom functions here */
add_action( 'wp_enqueue_scripts', 'magikBrezza_child_theme_enqueue_styles', 1000 );
function magikBrezza_child_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'social_portfolio-style' ) );
}

function viz360_setup() {
    add_image_size('140x130', 137, 130, true);
}
add_action( 'after_setup_theme', 'viz360_setup' );


function magikBrezza_promoted_products() { ?>

    <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col3 products-grid block-content">
             
            <?php
                $args = array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'meta_key' => '_featured',
                    'meta_value' => 'yes',                   
                    'posts_per_page' => $brezza_Options['featured_per_page']
                  
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                        magikBrezza_promoted_products_template();
                    endwhile;
                } else {
                    esc_attr_e('No products found','brezza');
                }

                wp_reset_postdata();
            ?>

        </div>
    </div>
<?php } 


function magikBrezza_promoted_products_template() {
  
  $MagikBrezza = new MagikBrezza();
  global $product, $yith_wcwl,$post;
    $imageUrl = woocommerce_placeholder_img_src();
   if (has_post_thumbnail())
      $imageUrl =  wp_get_attachment_image_src(get_post_thumbnail_id(), '140x130', true);
   
   ?> 
           
	<div class="item">
        <div class="item-inner">
            <div class="item-img">
                <div class="item-img-info">
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_html($post->post_title); ?>" class="product-image">
                        <figure class="img-responsive">
							<img alt="<?php echo esc_html($post->post_title); ?>" src="<?php echo esc_url($imageUrl[0]); ?>">
                        </figure>
                    </a>
                        
                    <?php if ($product->is_on_sale()) : ?>

                        <?php echo apply_filters('woocommerce_sale_flash', ' <div class="new-label new-top-right">' . esc_html__('Sale', 'woocommerce') . '</div>', $post, $product); ?>

                    <?php endif; ?>
				</div>
			</div>

            <div class="item-info">
                <div class="info-inner">
					<div class="item-title">
                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_html($post->post_title); ?>"> <?php echo esc_html($post->post_title); ?> </a>
                    </div>
					<div class="item-content">
					<div class="rating">
						<div class="ratings">
							<div class="rating-box">
							   <?php $average = $product->get_average_rating(); ?>
							   <div style="width:<?php echo esc_html(($average / 5) * 100); ?>%" class="rating"> </div>
							</div>
						</div>
					</div>
					<div class="item-price">
						<div class="price-box">
							<?php echo htmlspecialchars_decode($product->get_price_html()); ?>
						</div>
					</div>
				  </div>
                </div>
            </div>
        </div>
    </div>  

<?php

}
