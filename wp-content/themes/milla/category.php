<?php get_header(); ?>

    <main>

        <section class="promo promo-blog" id="promo">

            <div class="container container-blog ">

                <div class="blog-entries">

					<?php if (have_posts() ) {while (have_posts()) {the_post(); ?>
						<?php get_template_part( 'post-templates/post', get_post_format()) ?>

                        <div class="horisontal-separator-category"></div>

					<?php }
					}?>

					<?php the_posts_pagination(); ?>
                </div>

            </div>
			<?php get_sidebar(right_sidebar) ?>
        </section>

    </main>

<?php get_footer(); ?>