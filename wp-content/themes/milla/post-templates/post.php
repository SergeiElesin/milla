<article class="ml-post">
	<div class="entry-title">
		<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
		<p class="post-meta">
			<time class="date" datetime="2019-1-1T12:25"><?php the_time('j F Y') ?></time>
			<span class="tags">
                                <?php the_tags( ' ', ' / ') ?>
                            </span>

			<span class="categories">
                                <?php the_category( ' / ', ' ') ?>
                            </span>

		<div>
			<?php the_post_thumbnail( 'thumbnail') ?>
		</div>

		<div class="read-more">
			<?php the_content() ?>
			<!--                            <a href="">Читать далее</a>-->
		</div>

		</p>
	</div>

</article>