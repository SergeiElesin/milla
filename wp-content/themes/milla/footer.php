<footer class="page-footer">
	<!--<div class="container">-->
	<div class="footer-nav">
		<!--ul>
			<li><a href="#promo">Главная</a></li>
			<li><a href="#seo"><span class="separator">&nbsp;|&nbsp;</span>Оптимизация</a></li>
			<li><a href="#contextual-advertising"><span class="separator">&nbsp;|&nbsp;</span>Контекстная реклама</a></li>
			<li><a href="#website-development"><span class="separator">&nbsp;|&nbsp;</span>Создание сайтов</a></li>
			<li><a href="#discount"><span class="separator">&nbsp;|&nbsp;</span>Получить скидку</a></li>
			<li><a href="#submit-application"><span class="separator">&nbsp;|&nbsp;</span>Оставить заявку</a></li>
			<li><a href="#"><span class="separator">&nbsp;|&nbsp;</span>Карта сайта</a></li>
		</ul-->

		<?php wp_nav_menu(array(
			'theme_location'  => 'bottom',
			'container'       => null,
			'menu_class'      => 'footer-nav',
		)); ?>

	</div>

	<p class="copyright">Все права защищены. &copy; ML 2018 - <?php echo wp_date( 'Y'); ?></p>
	<!--</div>-->
</footer>
</div>

<!--<script src="--><?php //echo esc_url (get_template_directory_uri()); ?><!-- /assets/js/script.js"></script>-->

<?php wp_footer() ?>



</body>
</html>