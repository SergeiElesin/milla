<?php
/*Template Name: Шаблон главной страницы
*/
?>

<?php get_header(); ?>

<main>
	<section class="promo" id="promo">
		<div class="container">
			<div class="problem">
				<div class="problem__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>./assets/img/problem.png" alt="Проблема" width="101"></div>
				<h2 class="problem__h">Проблема</h2>
				<div class="problem__text"><?php the_field('problem-field') ?>

				</div>
			</div>
			<div class="decision">
				<div class="decision__text"><?php the_field('decision-field') ?>

				</div>
				<h2 class="decision__h">Решение</h2>
				<div class="decision__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>./assets/img/decision.png" alt="Решение" width="101"></div>

			</div>
			<a href="#submit-application" class="get-consult">Получить консультацию</a>
		</div>
	</section>
	<section class="seo" id="seo">
		<div class="container">
			<div class="seo__h--flex">
				<h2 class="seo__h">SEO оптимизация сайтa</h2>
			</div>
			<div class="seo__description--flex">
				<p class="seo__description"><?php the_field('seo-description-field') ?>
				</p>
			</div>
			<div class="seo__price--flex">
				<ol class="seo__price"><?php the_field('seo-price-field') ?>
			</div>
			<a href="<?php bloginfo('url') ?>/#discount" class="seo__want-discount">Я хочу скидку</a>
		</div>
	</section>
	<section class="contextual-advertising" id="contextual-advertising">
		<div class="container">
			<div class="contextual-advertising__h--flex">
				<h2 class="contextual-advertising__h">Контекстная реклама</h2>
			</div>
			<div class="contextual-advertising__description--flex">
				<p class="contextual-advertising__description"><?php the_field('contextual-advertising-field') ?>
				</p>
			</div>
			<div class="contextual-advertising__price--flex">
				<ol class="contextual-advertising__price"><?php the_field('contextual-advertising-price') ?>
				</ol>
				<p class="red-price"><?php the_field('contextual-advertising-sale') ?><!--*акция - красная цена до конца июля! (при наличии свободных мест)--></p>
			</div>
			<a href="<?php bloginfo('url') ?>/#submit-application" class="contextual-advertising__submit-app">Оставить заявку</a>
		</div>
	</section>
	<section class="website-development" id="website-development">
		<div class="container">
			<div class="website-development__h--flex">
				<h2 class="website-development__h">Создание сайтов</h2>
			</div>
			<div class="website-development__flex-container">
				<div class="website-development__full-description">
					<p class="website-development__description"><?php the_field('development-1') ?>
					</p>
					<ol class="website-development__description-more"><?php the_field('development-2') ?>
					</ol>
				</div>
				<div class="website-development__pricing"><?php the_field('development-3') ?>

					<p class="website-development__price-more"><?php the_field('development-4') ?>
					</p>
				</div>
			</div>
			<a href="<?php bloginfo('url') ?>/#discount" class="website-development__want-discount">Я хочу скидку</a>

		</div>
	</section>
	<section class="about-me" id="about-me">
		<div class="container">
			<div class="about-me__description-flex">
				<p class="about-me__description"><?php the_field('about-me-field') ?></p>
				<h2 class="about-me__h">Как я работаю</h2>
			</div>
			<div class="about-me_infographics">
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/technical-audit.png" alt="Технический аудит"
				                                     width="149px">
					<figcaption>Технический аудит</figcaption>
					<p>Соответствует ли ваш сайт требованиям поисковых систем?</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/site-indexing.png" alt="Индексация сайта"
				                                     width="114px">
					<figcaption>Индексация сайта</figcaption>
					<p> Все ли страницы участвуют в поиске?</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/semantic-core.png" alt="Семантическое ядро"
				                                     width="139px">
					<figcaption>Семантическое ядро</figcaption>
					<p>Все фразы, по которым вас ищут потенциальные покупатели</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/landing-pages.png" alt="Посадочные страницы"
				                                     width="135px">
					<figcaption>Посадочные страницы</figcaption>
					<p>Исправим старые страницы и создадим новые</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/competitor-analysis.png" alt="Анализ конкурентов"
				                                     width="145px">
					<figcaption>Анализ конкурентов</figcaption>
					<p>Посмотрим, как продвигаются конкуренты и сделаем лучше!</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/detailed-report.png" alt="Подробный отчет"
				                                     width="140px">
					<figcaption>Подробный отчет</figcaption>
					<p>Каждый месяц подробный отчет по позициям, трафику и проделанной работе</p>
				</figure>
			</div>
		</div>

	</section>
	<section class="submit-application" id="submit-application">
		<div class="container">
			<h2 class="submit-application__h">Оставить заявку</h2>

			<?php echo do_shortcode('[contact-form-7 id="260" title="Форма ML"]')?>


		</div>
	</section>

	<section class="discount" id="discount">
		<div class="container">
			<div class="discount-flex">
				<h2 class="discount__h">Как получить скидку?</h2><?php the_field('sale') ?>

			</div>
			<a href="#promo"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/arrow-up.png" width="60" alt="наверх"  class="arrow-up"></a>
	</section>
</main>

<?php get_footer(); ?>
