<!-- firstly we want our scrolling banner that says related items -->
<h1 class="woocommerce-products-header__title page-title">
				<span class="marquee">
					Related items
				</span>
			</h1>
		

<!-- secoundly we want to show similar items from the same category -->
<?php global $post;
    $terms = wp_get_post_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ) $cats_array[] = $term->term_id;
    $query_args = array( 
    'post__not_in' => array( $post->ID ), 
    'posts_per_page' => 3, 
    'no_found_rows' => 1, 
    'post_status' => 'publish', 
    'post_type' => 'product', 
    'tax_query' => array( 
        array(
        'taxonomy' => 'product_cat',
        'field' => 'id',
        'terms' => $cats_array
        )
    )
    );
    $loop = new WP_Query($query_args);
    if ($loop->have_posts()) : ?>
    <ul class="products">
        <?php while ($loop->have_posts()) : $loop->the_post(); global $product; ?>
        <?php wc_get_template_part( 'content', 'product' ); ?>
        <?php endwhile; ?>
    </ul>
<?php wp_reset_query(); endif; ?>
