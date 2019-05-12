
<!-- メニュー -->
<header class="site-width">
	<h1>
		<!-- サイトのurlはhome_urlで -->
		<a href="<?php echo home_url();?>">
			<!-- 管理画面から登録したヘッダーイメージはheader_image -->
			<img src="<?php header_image();?>" class="img-responsive" alt="<?php bloginfo('name') ?>">
		</a>
	</h1>
	<nav id="top-nav">
		<!-- 管理画面のメニューを表示させるにはwp_nav_menu -->
		<!-- containerでメニューを囲むタグ（div等を指定可能、ベタがきしている場合はいらない） -->
		<?php wp_nav_menu( array(
			'theme_location' =>'mainmenu',
			'container' =>'',
			'menu_class' =>'',
			'item_wrap' =>'<ul>%3$s</ul>',));
		?>
	</nav>
</header>
