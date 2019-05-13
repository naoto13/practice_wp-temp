<!-- ヘッター -->
<?php get_header(); ?>

        <!-- メニュー -->
		<?php get_template_part(' content ',' menu ');?>

		<div id="main">

			<!-- blog_list -->
			<section id="blog_list" class="site-width">
				<h1 class="title">BLOG｜category</h1>
				<div id="content" class="article">

					<!-- 記事のループ -->
					<?php get_template_part('loop');?>
					<!-- ページネーション ページの最大数はwpが自動的に計算（max_num_pages）し、引数として渡す-->
					<?php if(function_exists("pagenation")) pagenation($wp_query->max_num_pages); ?>
				</div>

				<!-- サイドバー -->
				<?php get_sidebar();?>

			</section>

		</div>

<!-- footer -->
<?php get_footer(); ?>
