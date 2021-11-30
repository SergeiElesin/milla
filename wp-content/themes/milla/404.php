<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Milla
 */
 ?>


<?php get_header(); ?>

    <main>

    <section class="promo promo-blog" id="promo">
        <div class="container container-project">

        <article class="ml-post">
		<p style="color: #0a5f76; font-size: 26px; font-style;"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try another page?', 'milla' ); ?></p>


        </article>
        </div>
    </section>

<?php get_footer(); ?>
