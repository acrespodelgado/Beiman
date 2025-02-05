<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper p-0" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?> p-0">

		<footer class="site-footer" id="colophon">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<a href="<?php echo get_site_url();?>/"><img src="<?php echo get_site_url();?>/img/beiman.png" alt="Beiman logo"></a>
						<p>Líderes en Andalucía en microinjerto Capilar</p>
					</div>
					<div class="col-12 col-md-3">
						<h3>INJERTO CAPILAR</h3>
						<ul>
							<li><a href="<?php echo get_site_url();?>/microinjerto-capilar">Microinjerto capilar</a></li>
							<li><a href="<?php echo get_site_url();?>/microinjerto-capilar#fue">Técnica FUE</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-3">
						<h3>CLÍNICAS BEIMAN</h3>
						<ul>
							<li><a href="<?php echo get_site_url();?>/nosotros">Nosotros</a></li>
							<li><a href="<?php echo get_site_url();?>/nuestras-clinicas">Nuestras clínicas</a></li>
							<li><a href="<?php echo get_site_url();?>/casos-destacados">Casos destacados</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-3">
						<h3>SÍGUENOS</h3>
						<ul>
							<li><a href="https://www.instagram.com/clinicasbeiman/?hl=es" target="_blank">Instagram</a></li>
							<li><a href="https://es-es.facebook.com/ClinicasBeiman/" target="_blank">Facebook</a></li>
						</ul>
					</div>
				</div><!-- row end -->
			</div><!-- container end -->
		</footer><!-- #colophon -->
		
		<div class="copy">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6">
						<p>Copyright Beiman Capilar 2022 - Agencia EnBloque </p>
					</div><!--col end -->
					<div class="col-12 col-md-2">
						<a href="/politica-de-privacidad">Política de privacidad</a>
					</div><!--col end -->
					<div class="col-12 col-md-2">
						<a href="/politica-de-cookies">Política de cookies</a>
					</div><!--col end -->
					<div class="col-12 col-md-2">
						<a href="/terminos-y-condiciones">Términos y condiciones</a>
					</div><!--col end -->

					<?php /*
					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->
					*/?>

				</div><!-- row end -->
			</div><!-- container end -->
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

