<?php
/**
 * Site title
 * Displays the gravatar, site title and description
 * Hooked into highwind_header()
 * @since 1.0
 */
function highwind_site_title() {
	?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="site-intro">
			<h1 class="site-title"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/spikeopaths-logo.png" alt="<?php bloginfo('name'); ?>" width="300" /></h1>
			<h2 class="site-description"><?php esc_attr( bloginfo( 'description' ) ); ?></h2>
		</a>
	<?php
}

/**
 * Sidebar
 * Displays the sidebar
 * Hooked into highwind_content_after()
 * @since 1.0
 */
function highwind_sidebar() {
	if (is_single()) {
		get_sidebar('post');
	}
}


/* Create custom post types */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'team',
		array(
			'has_archive' => true,
			'labels' => array(
				'name' => __( 'Drills' ),
				'singular_name' => __( 'Drill' )
			),
			'menu_position' => 5,
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'revisions')
			//'taxonomies' => array('category'),
		)
	);
}

?>
