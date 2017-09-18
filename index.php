<?php
/*
Plugin Name: WPe-Social-Icons
Version: 1.0
Plugin URI: http://www.netmdp.com/
Description: An easily way to print social icons without javascript to share on more populars social networks.
Author: etruel
Author URI: http://www.netmdp.com/
*/

/**
 * @author Esteban Truelsegaard
 * @copyright Esteban Truelsegaard, 2014, All Rights Reserved
 * This code is released under the GPL licence version 3 or later, available here
 * http://www.gnu.org/licenses/gpl.txt
 */

function wpe_socialicons(){
	$SIuri = plugin_dir_url( __FILE__ );
	$SIdir = plugin_dir_path( __FILE__ );
?><style>
.wpeicons a {
	text-decoration: none;
}

.wpeicons a img {
	opacity:.6;  
	padding: 0px;width: 20px; 
    filter: url(filters.svg#grayscale); /* Firefox 3.5+ */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(1); /* Google Chrome & Safari 6+ */

}

.wpeicons a:hover img {
	opacity:1; 
	filter: none;
    -webkit-filter: grayscale(0);
}

.box .wpeicons {
	background: #FFF;
	text-align: center;
	padding: 10px;
	margin: 1px;
}

.box .wpeicons a img {
	width: 32px; 
	margin-left: 10px;
}
</style>
	<span class="wpeicons">
		<a title="Click para compartir en Facebook!" onclick="return fbs_click()" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank" rel="me">
			<img src="<?php echo $SIuri; ?>images/s-face.png" alt="Facebook">
		</a>
		<a title="Click para compartir en Twitter!" href="http://twitter.com/home?status=Comparto <?php the_permalink(); ?>" target="_blank" rel="me">
			<img src="<?php echo $SIuri; ?>images/s-twit.png" alt="Twitter">
		</a>
		<a title="Click para compartir en Google Plus!" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" rel="me">
			<img src="<?php echo $SIuri; ?>images/s-gplus.png" alt="Gplus">
		</a>
		<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(' Leer mas '); ?>" target="_blank" >
			<img src="<?php echo $SIuri; ?>images/s-in.png" alt="Gplus" />
		</a>
		<a title="Click para compartir en Pinterest!" href="//pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&media=<?php 
			if ( has_post_thumbnail() ) {
				echo urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) );
			}
			?>&description=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="me">
			<img src="<?php echo $SIuri; ?>images/s-pinit.png" alt="PinIt">
		</a>
	</span>
<?php	
}
?>