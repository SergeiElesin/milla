<?php get_header(); ?>

<main>
	<section class="promo" id="promo">
		<div class="container">
			<div class="problem">
				<div class="problem__logo"><img src="<?php echo esc_url(get_template_directory_uri());?> /assets/img/problem.png" alt="Проблема" width="101"></div>
				<h2 class="problem__h">Проблема</h2>
				<div class="problem__text"><?php the_field('problem-field') ?>
<!--					<h3>Ваш сайт не приносит клиентов?</h3>-->
<!--					<p>Так бывает.<br>Деньги на разработку потрачены, а от сайта нет никакого толку.<br>Почему?<br>-->
<!--					</p>-->
<!--					<h3>Просто на нем нет трафика!</h3>-->
<!--					<p> Реальный случай: в интернет магазине совсем нет продаж. Смотрим статистику и... на сайте 3-->
<!--						посетителя в месяц(!). Если бы в ваш реальный магазин приходило только три человека в месяц,-->
<!--						вы-->
<!--						бы рассчитывали, что он хотя бы окупится? Конечно, нет! В интернете то же самое!-->
<!--					</p>-->
				</div>
			</div>
			<div class="decision">
				<div class="decision__text"><?php the_field('decision-field') ?>
<!--					<h3>Очевидное решение: нужно, чтобы сайт посещали!</h3>-->
<!--					<ol class="decision__ol">Как это сделать?-->
<!--						<li>Решить технические проблемы, исправить ошибки</li>-->
<!--						<li>Провести SEO оптимизацию</li>-->
<!--						<li>Запустить контекстную рекламу</li>-->
<!--						<li>Это и есть моя работа!</li>-->
<!--						<li>Что нужно сделать вам?</li>-->
<!--						<li>Первый шаг - получить бесплатную консультацию. Я объясню, что с вашим сайтом не так.-->
<!--						</li>-->
<!--					</ol>-->
				</div>
				<h2 class="decision__h">Решение</h2>
				<div class="decision__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/decision.png" alt="Решение" width="101"></div>

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
				<p class="seo__description"><?php the_field('seo-description-field') ?> <!--Что вы делаете, когда хотите найти что-то в интернете? <br>Вы идете в
					"поисковик" - Яндекс или Google - и вводите там то, что вы ищете.<br>НО задумывались ли вы:
					почему
					какие-то сайты находятся на первой странице в Яндексе, а другие - вовсе не присутствуют в
					выдаче? А
					где
					показывается ваш сайт?.. <br>Чаще всего люди не ищут дальше первой-второй страницы, поэтому,
					если
					вам
					нужно, чтобы вас нашли - вы должны быть там. Как это делается? Я знаю, как это сделать.-->
				</p>
			</div>
			<div class="seo__price--flex">
				<ol class="seo__price"><?php the_field('seo-price-field') ?><!--Примерные цены на оптимизацию сайта:
					<li>Постоянная оптимизация - 10.000 рублей/месяц.</li>
					<li>"Пакетная" оптимизация (разовая работа - первичная, базовая, вывод из-под фильтров)
						от 30.000 р в зависимости от сложности и объема работ.
					</li>
					<li>Оплата производится частями (50/50 или по месяцам работы).</li>
				</ol>-->
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
				<p class="contextual-advertising__description"><?php the_field('contextual-advertising-field') ?><!--Минус поисковой оптимизации в том, что приходится
					ждать
					(иногда несколько месяцев!), прежде чем получить результат. К тому же поисковая выдача постоянно
					изменяется.<br>Но ведь клиенты нужны вам сейчас? Тогда можно купить у Яндекса места в
					выдаче.<br>Это
					и
					есть контекстная реклама. Вы платите поисковику за то, чтобы он показывал ваш сайт по
					определенным
					запросам. Я знаю, как это сделать выгодно. Создание новой рекламной кампании - это большой объем
					работы,
					поэтому я не всегда могу взять нового клиента.-->
				</p>
			</div>
			<div class="contextual-advertising__price--flex">
				<ol class="contextual-advertising__price"><?php the_field('contextual-advertising-price') ?><!--Цены на контекстную рекламу в Яндекс Директ:
					<li>Сайт визитка и корпоративный сайт: 15.000р. 10.000р* за первый месяц и 5.000р все
						последующие
						месяцы (за ведение рекламной кампании).
					</li>
					<li>Интернет-магазин 20.000р. 15.000р* первый месяц и 7.000р все последующие месяцы (ведение
						рекламной
						кампании).
					</li>-->
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
					<p class="website-development__description"><?php the_field('development-1') ?><!--Я делаю сайты-визитки и небольшие корпоративные сайты. Я использую лицензионную платную CMS (движок). Что входит в базовую стоимость: Самые главные
						"плюсы":
						На сайте уже будет сделана базовая SEO оптимизация, вы сэкономите немалые деньги на этом.
						Всегда
						лучше сделать сразу хорошо, чем потом переделывать, не так ли? Адаптивный дизайн (сайт будет
						удобен
						для просмотра с мобильных устройств).-->
					</p>
					<ol class="website-development__description-more"><?php the_field('development-2') ?><!--А также:
						<li>тексты статей! (3 для визитки и 5 для корпоративного сайта).</li>
						<li>Использование стандартного шаблона дизайна (предоставлю на выбор)</li>
						<li>Сайт будет выложен на хостинг, им можно будет пользоваться сразу (домен и хостинг
							оформляются на
							вас, то есть сайт будет принадлежать вам)
						</li>
						<li>Всевозможные галереи, карусели, слайд-шоу, встроенные видео, кнопки соцсетей, формы
							обратной
							связи и другие стандартные объекты
						</li>-->
					</ol>
				</div>
				<div class="website-development__pricing"><?php the_field('development-3') ?>
					<!--<ol class="website-development__price">Цены на создание сайтов
						<li>Сайт-визитка от 10.000р</li>
						<li>Корпоративный сайт - от 15.000-20.000р
					</ol>
					<p class="website-development__price-explain">(сайт-визитка - это до 5 страниц. Все, что больше
						- это корпоративный сайт)
						Это очень выгодно! Но вы еще и можете получить дополнительную скидку!</p>-->
					<p class="website-development__price-more"><?php the_field('development-4') ?><!--В стоимость не входит разработка дизайна. Поэтому
						можно
						или
						использовать готовый шаблон (неплохой эконом вариант) или обратиться к дизайнеру (могу
						посоветовать
						тех,
						с кем я работаю).
						<br>Стоимость дизайна начинается<br>от 15.000 руб.-->
					</p>
				</div>
			</div>
			<a href="<?php bloginfo('url') ?>/#discount" class="website-development__want-discount">Я хочу скидку</a>

		</div>
	</section>
	<section class="about-me" id="about-me">
		<div class="container">
			<div class="about-me__description-flex">
				<p class="about-me__description"><?php the_field('about-me-field') ?><!--Занимаюсь продвижением сайтов с 2012 года.<br>Только белые методы.
					Люблю
					свою
					работу! Мой девиз: "Только белое СЕО!".<br>Это значит, никакой черной оптимизации, никаких
					попыток
					обмана
					поисковых систем, никаких покупных ссылок, никаких "серых" схем. Горе-сеошники предлагают вам
					покупать
					ссылки? А вы знаете , что такое "Минусинск" Это фильтр от Яндекса, наказание за такое
					"продвижение"
					покупными ссылками. СЕО - это не ссылки, это комплекс работ по улучшению сайта.--></p>
				<h2 class="about-me__h">Как я работаю</h2>
			</div>
			<div class="about-me_infographics">
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/technical-audit.png" alt="Технический аудит"
				                                     width="149px">
					<figcaption>Технический аудит</figcaption>
					<p>Соответствует ли ваш сайт требованиям поисковых систем?</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/site-indexing.png" alt="Индексация сайта"
				                                     width="114px">
					<figcaption>Индексация сайта</figcaption>
					<p> Все ли страницы участвуют в поиске?</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/semantic-core.png" alt="Семантическое ядро"
				                                     width="139px">
					<figcaption>Семантическое ядро</figcaption>
					<p>Все фразы, по которым вас ищут потенциальные покупатели</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/landing-pages.png" alt="Посадочные страницы"
				                                     width="135px">
					<figcaption>Посадочные страницы</figcaption>
					<p>Исправим старые страницы и создадим новые</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/competitor-analysis.png" alt="Анализ конкурентов"
				                                     width="145px">
					<figcaption>Анализ конкурентов</figcaption>
					<p>Посмотрим, как продвигаются конкуренты и сделаем лучше!</p>
				</figure>
				<figure class="about-me_figure"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/detailed-report.png" alt="Подробный отчет"
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

			<!--form class="user-form" id="user-form" method="post" action="?php echo admin_url('admin-ajax.php?action=send_mail') ?>" -->



<!--			<form class="user-form" id="user-form" method="post" action="" >-->
<!---->
<!--                ?php echo do_shortcode('[ninja_form id=3]')?-->
<!--                -->
<!---->
<!--				<label class="user-form__name-label" for="name">Имя*:&nbsp;&nbsp;-->
<!--					<input name="user-form__name" class="user-form__name" type="text" id="name" placeholder="Ваше имя" required></label>-->
<!--				<label class="user-form__email-label" for="email">E-mail*:&nbsp;&nbsp;-->
<!--					<input name="user-form__email" class="user-form__email" type="email" id="email" placeholder="Ваш e-mail" required></label><br>-->
<!--				<label for="url">Адрес вашего сайта*:&nbsp;&nbsp; </label>-->
<!--				<input name="user-form__url" class="user-form__url" type="url" id="url" placeholder="Адрес сайта"><br>-->
<!---->
<!--				<label class="seo-checkbox" for="ch1">-->
<!--					<input name="seo-checkbox" type="checkbox" id="ch1" value="1" class="visually-hidden ch1">-->
<!--					<span class="checkbox-indicator"></span>-->
<!--					&nbsp;Хочу заказать SEO-->
<!--				</label>-->
<!--				<br>-->
<!--				<label class="advertising-checkbox" for="ch2">-->
<!--					<input name="advertising-checkbox" type="checkbox" id="ch2" value="2" class="visually-hidden ch2">-->
<!--					<span class="checkbox-indicator"></span>-->
<!--					&nbsp;Хочу заказать контекстную рекламу-->
<!--				</label>-->
<!--				<br>-->
<!--				<label class="consult-checkbox" for="ch3">-->
<!--					<input name="consult-checkbox" type="checkbox" id="ch3" value="3" class="visually-hidden ch3">-->
<!--					<span class="checkbox-indicator"></span>-->
<!--					&nbsp;Хочу просто консультацию-->
<!--				</label>-->
<!--				<br>-->
<!--				<label for="letter">Текст письма, опишите проблему*: &nbsp;&nbsp;</label>-->
<!--				<textarea name="user-form__letter" class="user-form__letter" id="letter" cols=42-->
<!--				          rows="6" placeholder="Опишите вашу проблему" required></textarea><br>-->
<!--				<label for="promocode">Промокод: &nbsp;&nbsp;</label>-->
<!--				<input name="user-form__promocode" class="user-form__promocode" type="text" id="promocode" placeholder="введите промокод"><br>-->
<!--				<div class="form-button--flex">-->
<!--					<button class="form-button" id="form-button" formaction="submit">Оставить заявку</button>-->
<!--				</div>-->
<!--			</form>-->
		</div>
	</section>

	<section class="discount" id="discount">
		<div class="container">
			<div class="discount-flex">
				<h2 class="discount__h">Как получить скидку?</h2><?php the_field('sale') ?>
				<!--<div>
					<p>Получить скидку <span>&nbsp; 10%&nbsp;</span>&nbsp;очень легко</p>
					<p>1. Установите &nbsp;<a href="#">приложение для Android или IOS</a></p>
					<p>2. Подпишитесь на мои обновления &nbsp;<a href="#">по этой ссылке,</a>&nbsp;получите
						промокод 10% на оптимизацию!
					</p>
				</div>
				<p>На контекстную рекламу сейчас действует скидка для всех без промокода</p>
			</div>-->
		</div>
		<a href="#promo"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /assets/img/arrow-up.png" width="60" alt="наверх"  class="arrow-up"></a>
	</section>
</main>

<?php get_footer(); ?>