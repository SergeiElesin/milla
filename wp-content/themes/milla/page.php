<?php get_header(); ?>

<main>

	<section class="promo promo-blog" id="promo">

		<div class="container container-blog problem">

            <div class="blog-entries">

	            <?php
	            $args = array(
		            'paged'         => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
		            'post_type'   => 'post',
		            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	            );
	            query_posts( $args );
	            while ( have_posts() ) {
		            the_post();
		            ?>

                    <article class="ml-post">
                        <div class="permalink">
                            <a href="<?php the_permalink() ?>"></a>
                        </div>

                        <div class="entry-title">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        </div>

                        <div class="post-meta">
                            <p>
                                <time><?php the_time('j F Y'); ?></time>
                                <span class="post-metadata"> Опубликовал: <?php the_author(); ?></span>
                                <span class="tags">
                                <?php the_tags( ' ', ' / ') ?>
                            </span>

                                <span class="categories">
                                <?php the_category( ' / ', ' ') ?>
                            </span>
                            </p>
                        </div>

                        <div>
                            <a href="<?php the_permalink() ?>" title=""><?php the_post_thumbnail( '500') ?></a>
                        </div>

                        <div class="read-more">
							<?php the_excerpt() ?>
							<!--?php the_content('Перейти к полной статье...') ?-->
                            <a href="<?php the_permalink() ?>">Читать далее</a>
                        </div>
                    </article>

                    <div class="horisontal-separator"></div>

					<?php
				}
				 ?>

	            <?php the_posts_pagination(); ?>
            </div>

        </div>

		<?php get_sidebar() ?>
<!--		--><?php //dynamic_sidebar('right_sidebar') ?>


	</section>

	<?php wp_reset_query(); ?>
</main>

<?php get_footer(); ?>