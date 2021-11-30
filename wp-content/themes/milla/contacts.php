<?php
/*
Template Name: Get in touch
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

	<main>

		<section class="submit-application" id="submit-application">
			<div class="container">
				<h2 class="submit-application__h">Оставить заявку</h2>
				<form class="user-form" action="#" method="post">
					<label class="user-form__name-label" for="name">Имя*:&nbsp;&nbsp;
						<input class="user-form__name" type="text" id="name" placeholder="Ваше имя"></label>
					<label class="user-form__email-label" for="email">E-mail*:&nbsp;&nbsp;
						<input class="user-form__email" type="email" id="email" placeholder="Ваш e-mail"></label><br>
					<label for="url">Адрес вашего сайта*:&nbsp;&nbsp; </label>
					<input class="user-form__url" type="url" id="url" placeholder="Адрес сайта"><br>

					<label class="seo-checkbox" for="ch1">
						<input type="checkbox" id="ch1" value="1" class="visually-hidden ch1">
						<span class="checkbox-indicator"></span>
						&nbsp;Хочу заказать SEO
					</label>
					<br>
					<label class="advertising-checkbox" for="ch2">
						<input type="checkbox" id="ch2" value="2" class="visually-hidden ch2">
						<span class="checkbox-indicator"></span>
						&nbsp;Хочу заказать контекстную рекламу
					</label>
					<br>
					<label class="consult-checkbox" for="ch3">
						<input type="checkbox" id="ch3" value="3" class="visually-hidden ch3">
						<span class="checkbox-indicator"></span>
						&nbsp;Хочу просто консультацию
					</label>
					<br>
					<label for="letter">Текст письма, опишите проблему*: &nbsp;&nbsp;</label>
					<textarea class="user-form__letter" id="letter" cols=42
					          rows="6" placeholder="Опишите вашу проблему"></textarea><br>
					<label for="promocode">Промокод: &nbsp;&nbsp;</label>
					<input class="user-form__promocode" type="text" id="promocode" placeholder="введите промокод"><br>
					<div class="form-button--flex">
						<button class="form-button" formaction="submit">Оставить заявку</button>
					</div>
				</form>
			</div>
		</section>

	</main>

<?php get_footer(); ?>