<!-- ヘッター -->
<?php get_header(); ?>

        <!-- メニュー -->
		<?php get_template_part(' content ',' menu ');?>
		
		<div id="main">

			<!-- blog_list -->
			<section id="blog" class="site-width">
				<h1 class="title">BLOG</h1>
				<div id="content" class="article">

					<?php get_template_part('loop');?>

					<!-- function_existsで引数にした関数が存在するかを確認（ここではpagenation） -->
					<!-- WPですでに決められている変数$addidional_loopとmax_num_pagesを引数に指定して関数実行 -->
					<?php if(function_exists("pagenation")) pagenation($addidional_loop->max_num_pages); ?>
					<!-- paginationかも？ -->

				</div>
				<!-- サイドバー -->
				<?php get_sidebar(); ?>

		</div>

<!-- フッター -->
<?php get_footer(); ?>