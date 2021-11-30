<?php get_header(); ?>

<main>

    <section class="promo promo-blog" id="promo">

        <div class="container container-blog">

            <div class="blog-entries">

            <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
	            <?php get_template_part( 'post-templates/post', get_post_format()) ?>

            <ul class="post-nav cf">
                <li class="prev"><?php previous_post_link( $format = '%link', $link = '<strong>Предыдущий пост</strong> %title')?></li>
                <li class="next"><?php next_post_link( $format = '%link', $link = '<strong>Следуюущий пост</strong> %title')?></li>
            </ul>

            </div>

        </div>
	    <?php get_sidebar() ?>
<!--	    --><?php //dynamic_sidebar('right_sidebar') ?>

    </section>
	<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>