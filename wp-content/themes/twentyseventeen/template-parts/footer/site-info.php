<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'http://raulmarkuskivisalu.ikt.khk.ee/wordpress/' ) ); ?>" class="imprint">
		<?php printf( __( 'Nimi: Raul<br>mail: raul-markus.kivisalu@khk.ee<br> aadress: ' ), 'WordPress' ); ?>
	</a>
</div><!-- .site-info -->
