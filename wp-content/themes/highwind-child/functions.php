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

/*
function map($atts, $content=null, $code="") {
	if ($atts["x"] != "" && $atts["y"] != "") {

		$width = isset($atts['width']) ? $atts['width'] : "100%";
		$height = isset($atts['height']) ? $atts['height'] : "400";
		$x = isset($atts['x']) ? $atts['x'] : "";
		$y = isset($atts['y']) ? $atts['y'] : "";


		$map = '<iframe src="http://player.vimeo.com/video/'.$content.'?byline='.$byline.'&portrait='.$portrait.'&autoplay='.$auto_play.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen class="'.$class.'"></iframe>';
		wp_enqueue_script('google-maps', '//maps.google.com/maps/api/js?sensor=false');
		add_action('wp_enqueue_scripts', 'google-maps');

		return $list;

		<script type="text/javascript"> 
		    $(document).ready(function() { initialize(); });

		    function initialize() {
		        var map_options = {
		            center: new google.maps.LatLng(51.4463448,-1.2849168),
		            zoom: 10,
		            mapTypeId: google.maps.MapTypeId.ROADMAP
		        };

		        var google_map = new google.maps.Map(document.getElementById("map_canvas"), map_options);

		        var info_window = new google.maps.InfoWindow({
		            content: 'loading'
		        });

		        var t = [];
		        var x = [];
		        var y = [];
		        var h = [];

		        t.push('Spikeopaths');
		        x.push(33.84659);
		        y.push(-84.35686);
		        h.push('<p><strong>Spikeopaths</strong><br/>Maiden Erlegh School<br />Silverdale Road<br />Lower Earley<br />Reading<br /></p>');

		        var i = 0;
		        for ( item in t ) {
		            var m = new google.maps.Marker({
		                map:       google_map,
		                animation: google.maps.Animation.DROP,
		                title:     t[i],
		                position:  new google.maps.LatLng(x[i],y[i]),
		                html:      h[i]
		            });

		            google.maps.event.addListener(m, 'click', function() {
		                info_window.setContent(this.html);
		                info_window.open(google_map, this);
		            });
		            i++;
		        }
		    }
		</script> 
	} else {
		return "Co-ordinates not set";
	}
}

add_shortcode('row', 'structure_row');
*/
?>
