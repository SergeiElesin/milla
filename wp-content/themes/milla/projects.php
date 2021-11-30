<?php
/*Template Name: Проекты
*/
?>

<?php get_header(); ?>

    <main>
        <section class="promo promo-blog" id="promo">

            <div class="container container-blog">
				<?php
				$posts = get_posts( array(
					'numberposts'      => 0,
					'post_type'        => 'project',
					'suppress_filters' => true
				) );

				foreach ( $posts as $post ) {
					setup_postdata( $post ); ?>

                    <div class="problem">

                        <h2 class="problem__h"><?php the_title() ?></h2>
                        <a href="<?php the_permalink() ?>"
                           class="project__preview"><?php the_post_thumbnail( 'project-thumb' ) ?></a>
                        <div class="problem__text project__text"><?php the_excerpt() ?></div>
                    </div>

                    <div class="horisontal-separator"></div>

				<?php }

				wp_reset_postdata() ?>
            </div>
	        <?php get_sidebar() ?>

        </section>
    </main>


<?php get_footer(); ?>