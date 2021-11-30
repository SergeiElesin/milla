<!DOCTYPE html>
<!--<html lang="en">-->
<html <?php language_attributes(); ?> class="no-js">
<head>
<!--	<meta charset="UTF-8">-->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta
		name="viewport"
		content="width=device-width,initial-scale=1">

<!--	<title>Ml</title>-->

<!--	<link rel="stylesheet" href="fonts/montserratalternates/stylesheet.css">-->
	<link rel="stylesheet" href=" <?php echo esc_url(get_template_directory_uri()); ?> /assets/fonts/montserratalternates/stylesheet.css">


<!--	<link rel="stylesheet" href="fonts/montserrat/stylesheet.css">-->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>  /assets/fonts/montserrat/stylesheet.css">

<!--	<link rel="stylesheet" href="style.css">-->

<!--	<link rel="stylesheet" href="--><?php //echo esc_url(get_template_directory_uri()); ?><!-- /assets/css/style.css">-->

	<!-- ?php wp_enqueue_scripts(); ?-->
    <?php wp_head() ?>

</head>
<body>

<div class="wrapper">
	<header class="page-header">
		<div class="container">
			<div class="logo-wrapper">
				<div class="logo-arrows"></div>
<!--				<a href="index.html" class="logo"></a>-->
				<a href="<?php bloginfo('url') ?>" class="logo"></a>
				<a href="<?php bloginfo('url') ?>/#contextual-advertising" class="logo-context">Контекстная<br>реклама</a>
				<a href="<?php bloginfo('url') ?>/#seo" class="logo-seo">SEO<br>оптимизация</a>
				<a href="<?php bloginfo('url') ?>/#website-development" class="logo-developing">Создание<br>сайтов</a>
				<div class="header__submit-app__wrapper">
					<a href="<?php bloginfo('url') ?>#submit-application" class="header__submit-app">Оставить заявку</a>
				</div>
			</div>


			<nav class="nav">

                <ul class="nav1-list" id="myNav1-list">
                    <!--li><a href="#promo" >Главная</a></li>
					<li><a href="#promo" class="services">Услуги</a>
						<ul>
							<li><a href="#seo">Оптимизация</a></li>
							<li><a href="#contextual-advertising">Контекстная реклама</a></li>
							<li><a href="#website-development">Создание сайтов</a></li>
						</ul>
					</li>
					<li><a href="#about-me">Обо мне</a></li-->
                    <li  class="toggle" id="menu">&#9776;</li>
                </ul>

				<?php wp_nav_menu(array(
					'theme_location'  => 'top',
					'container'       => null,
					'menu_class'      => 'nav-list',
					'menu_id'         => 'myNav-list'
				)); ?>

			</nav>

		</div>
	</header>