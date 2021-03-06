<?php get_header(); ?>
<?php
$shop_sidebar_id = stm_option( 'shop_sidebar' );
$shop_sidebar_position = stm_option( 'shop_sidebar_position', 'none' );
$content_before = $content_after =  $sidebar_before = $sidebar_after = $shop_class = '';

if( $shop_sidebar_id ) {
	$shop_sidebar = get_post( $shop_sidebar_id );
}

if( $shop_sidebar_position == 'right' && isset( $shop_sidebar ) ) {
	add_filter( 'loop_shop_columns', 'loop_columns' );
	$shop_class = ' col_3';
	$content_before .= '<div class="row">';
	$content_before .= '<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">';
	$content_before .= '<div class="col_in __padd-right __three-cols">';
	// .products
	$content_after .= '</div>'; // col_in
	$content_after .= '</div>'; // col
	$sidebar_before .= '<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">';
	// .sidebar-area
	$sidebar_after .= '</div>'; // col
	$sidebar_after .= '</div>'; // row
}

if( $shop_sidebar_position == 'left' && isset( $shop_sidebar ) ) {
	add_filter( 'loop_shop_columns', 'loop_columns' );
	$shop_class = ' col_3';
	$content_before .= '<div class="row">';
	$content_before .= '<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">';
	$content_before .= '<div class="col_in __padd-left __three-cols">';
	// .products
	$content_after .= '</div>'; // col_in
	$content_after .= '</div>'; // col
	$sidebar_before .= '<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 hidden-sm hidden-xs">';
	// .sidebar-area
	$sidebar_after .= '</div>'; // col
	$sidebar_after .= '</div>'; // row
}

?>
	<div class="content-area<?php echo esc_attr( $shop_class ); ?>">
		<?php get_template_part( 'partials/title_box' ); ?>
		<?php echo stm_sanitize_text_field($content_before); ?>
		<?php
		if( have_posts() ){
			woocommerce_content();
		}
		?>
		<?php echo stm_sanitize_text_field($content_after); ?>

		<?php echo stm_sanitize_text_field($sidebar_before); ?>
		<div class="sidebar-area">
			<?php
			if( isset( $shop_sidebar ) && $shop_sidebar_position != 'none' ) {
				echo apply_filters( 'the_content' , $shop_sidebar->post_content);;
			}
			?>
		</div>
		<?php echo stm_sanitize_text_field($sidebar_after); ?>
	</div>

<?php get_footer(); ?>