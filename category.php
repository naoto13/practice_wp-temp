<!-- ヘッター -->
<?php get_header(); ?>

        <!-- メニュー -->
		<?php get_template_part(' content ',' menu ');?>
		
		<div id="main">

			<!-- blog_list -->
			<section id="blog_list" class="site-width">
				<h1 class="title">BLOG</h1>
				<div id="content" class="article">
				<?php get_template_part('loop');?>

				<?php if(function_exists("pagenation")) pagenation($addidional_loop->max_num_pages); ?>

				<?php get_sidebar();?>
			</section>


		</div>

<!-- footer -->
<?php get_footer(); ?>
