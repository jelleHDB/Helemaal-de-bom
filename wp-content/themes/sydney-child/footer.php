<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
$link1 = get_field('link_onder_afbeelding-1', 'option');
$link2 = get_field('link_onder_afbeelding-2', 'option');
$link3 = get_field('link_onder_afbeelding-3', 'option');
$link4 = get_field('link_onder_afbeelding-4', 'option');
$link5 = get_field('link_onderste_rij_1', 'option');
$link6 = get_field('link_onderste_rij_2', 'option');
$link7 = get_field('link_onderste_rij_3', 'option');
$link8 = get_field('link_onderste_rij_4', 'option');
$link9 = get_field('link_adres-footer', 'option');
$link10 = get_field('link_telefoonnummer-footer', 'option');
$link11 = get_field('link_mail-footer', 'option');
$link12 = get_field('link-instagram-footer', 'option');
$link13 = get_field('link_linkedin-footer', 'option');
$link14 = get_field('link_facebook-footer', 'option');
?>
			</div>
		</div>
	</div><!-- #content -->

	<div id="footer-hdb">
		<div id="content-footer">
			<div id="footer-c1">
				<div id="footer-c1-p1">
					<?php if( get_field('logo-footer', 'option') ): ?>
						<a href="/"><img src="<?php the_field('logo-footer', 'option'); ?>" /></a>
					<?php endif; ?>
					<?php if( $link1 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link1 ); ?>"><?php the_field('tekst_link_onder_afbeelding_1', 'option'); ?></a>
					<?php endif; ?>
					<?php if( $link2 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link2 ); ?>"><?php the_field('tekst_link_onder_afbeelding_2', 'option'); ?></a>
					<?php endif; ?>
					<?php if( $link3 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link3 ); ?>"><?php the_field('tekst_link_onder_afbeelding_3', 'option'); ?></a>
					<?php endif; ?>
					<?php if( $link4 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link4 ); ?>"><?php the_field('tekst_link_onder_afbeelding_4', 'option'); ?></a>
					<?php endif; ?>
				</div>
				<div id="footer-c1-p2">
					<?php if( $link5 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link5 ); ?>"><?php the_field('tekst_link_onderste_rij_1', 'option'); ?></a>
					<?php endif; ?>
					<?php if( $link6 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link6 ); ?>"><?php the_field('tekst_link_onderste_rij_2', 'option'); ?></a>
					<?php endif; ?>
					<?php if( $link7 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link7 ); ?>"><?php the_field('tekst_link_onderste_rij_3', 'option'); ?></a>
					<?php endif; ?>
					<?php if( $link8 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link8 ); ?>"><?php the_field('tekst_link_onderste_rij_4', 'option'); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div id="footer-c2">
				<div id="footer-adres">
					<?php if( get_field('icon_1-footer', 'option') ): ?>
						<img src="<?php the_field('icon_1-footer', 'option'); ?>" />
					<?php endif; ?>
					<?php if( $link9 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link9 ); ?>"><?php the_field('adres-footer', 'option'); ?></a>
					<?php endif; ?>
				</div>
				<div id="footer-phone">
					<?php if( get_field('icon_2-footer', 'option') ): ?>
						<img src="<?php the_field('icon_2-footer', 'option'); ?>" />
					<?php endif; ?>
					<?php if( $link10 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link10 ); ?>"><?php the_field('telefoonnummer-adres', 'option'); ?></a>
					<?php endif; ?>
				</div>
				<div id="footer-mail">
					<?php if( get_field('icon_3-footer', 'option') ): ?>
						<img src="<?php the_field('icon_3-footer', 'option'); ?>" />
					<?php endif; ?>
					<?php if( $link11 ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link11 ); ?>"><?php the_field('mail-footer', 'option'); ?></a>
					<?php endif; ?>
				</div>
				<div id="footer-socialicons">
					<?php if( get_field('icon_instagram-footer', 'option') ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link12 ); ?>"><?php the_field('icon_instagram-footer', 'option'); ?></a>
					<?php endif; ?>
					<?php if( get_field('icon_linkedin-footer', 'option') ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link13 ); ?>"><?php the_field('icon_linkedin-footer', 'option'); ?></a>
					<?php endif; ?>
					<?php if( get_field('icon_facebook-footer', 'option') ): ?>
						<a class="link-footer" href="<?php echo esc_url( $link14 ); ?>"><?php the_field('icon_facebook-footer', 'option'); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
