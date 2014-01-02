<?php
/**
 * The page template.
 * @package highwind
 * @since 1.0
 *
 * Template name: Season
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly
get_header();

?>

<?php highwind_content_before(); ?>

<section class="content" role="main">

	<?php highwind_content_top(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<section class="article-content">

				<h1><?php the_title(); ?><small><?php the_field("season_dates"); ?></small></h1>

				<?php the_content(); ?>


				<div id="map_canvas" style="width:100%;height:800px;">Google Map</div> 

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script> 
				<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 
				<script type="text/javascript"> 
				    $(document).ready(function() { initialize(); });

				    function initialize() {
				        var map_options = {
				            center: new google.maps.LatLng(51.43753063050014, -0.9249114990234375),
				            zoom: 13,
				            zoomControl: false,
				            scaleControl: false,
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
				        x.push(51.43753063050014);
				        y.push(-0.9249114990234375);
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


			</section>

			<?php highwind_entry_bottom(); ?>

		</article>

	<?php endwhile; ?>

</section>

<?php highwind_content_after(); ?>

<?php get_footer(); ?>