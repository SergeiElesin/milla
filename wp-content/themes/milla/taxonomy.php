<?php get_header(); ?>

    <main>

        <section class="promo promo-blog" id="promo">

            <div class="container container-blog">

                <div class="blog-entries">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
					<?php endwhile; ?>
					<?php endif; ?>

                </div>

            </div>
			<?php get_sidebar( right_sidebar ) ?>

        </section>


    </main>

<?php get_footer(); ?>