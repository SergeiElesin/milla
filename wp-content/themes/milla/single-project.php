
<?php get_header(); ?>

    <main>

    <section class="promo promo-blog" id="promo">
        <div class="container container-project">

        <article class="ml-post">
            <div class="entry-title">
                <h3><?php the_title() ?></h3>
                <p class="post-meta">

                <div>
					<?php the_post_thumbnail( 'thumbnail' ) ?>
                </div>
                <span class="skills">Навыки:&nbsp;<?php the_terms( get_the_ID(), 'skills', ' ', '&nbsp;/&nbsp;', ' ' ); ?></span>

                <div class="read-more">
					<?php the_content() ?>
                </div>

                </p>
            </div>

        </article>

            <ul class="post-nav cf">
                <li class="prev"><?php previous_post_link( $format = '%link', $link = '<strong>Предыдущий пост:</strong> %title')?></li>
                <li class="next"><?php next_post_link( $format = '%link', $link = '<strong>Следуюущий пост:</strong> %title')?></li>
            </ul>

        </div>
	    <?php get_sidebar() ?>

    </section>



<?php get_footer(); ?>