<?php
/**
 * Social Share Vertical Module.
 *
 * @package wmfoundation
 */

$share_text = get_theme_mod( 'wmf_social_share_text', __( 'Share', 'wmfoundation' ) );

$template_data = wmf_get_template_data();
$services      = ! empty( $template_data['services'] ) ? $template_data['services'] : array( 'facebook', 'twitter' );

$args = wp_parse_args(
	array(
		'uri' => wmf_get_current_url(),
	), wmf_get_template_data()
);
?>

<div class="social-share social-share-home">
	<span class="h5 bold uppercase color-black"><?php echo esc_html( $share_text ); ?></span>
	<span class="inline-social-list">
		<?php if ( in_array( 'twitter', $services, true ) ) : ?>
			<a href="<?php echo esc_url( wmf_get_share_url( 'twitter', $args ) ); ?>" class="color-blue">
				<?php wmf_show_icon( 'social-twitter' ); ?>
			</a>
		<?php endif; ?>

		<?php if ( in_array( 'facebook', $services, true ) ) : ?>
			<a href="<?php echo esc_url( wmf_get_share_url( 'facebook', $args ) ); ?>" class="color-blue">
				<?php wmf_show_icon( 'social-facebook' ); ?>
			</a>
		<?php endif; ?>
	</span>
</div>
