<!-- ヘッター -->
<?php get_header(); ?>

        <!-- メニュー -->
		<?php get_template_part(' content ',' menu ');?>
		
		<div id="main">
			<!-- blog_list -->
			<section id="blog" class="site-width">
				<h1 class="title">BLOG</h1>
				<div id="content" class="article">

				<!-- have_postで投稿があるかどうか -->
				<?php if(have_posts()) : ?>

						<article class="article-item">
							<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<h3 style="font-size:80%;"><?php the_author_nickname(); ?> <?php the_time("Y年m月j日"); ?> <?php single_cat_title('カテゴリー： '); ?></h3>

							<p class="article-body">
								<?php the_content(); ?>
							</p>
						</article>

					<!-- 前の記事のリンクはprevious_post_link,次の記事のリンクはnext_post_linkを使用する -->
					<div class="pagenation">
						<ul>
							<li class="prev"><?php previous_post_link('%link', 'PREV'); ?></li>
							<li class="next"><?php next_post_link('%link', 'NEXT'); ?></li>
						</ul>
					</div>

					<!-- comments -->
					<!-- 記事の詳細ページにはコメント機能があるため、それを自動的に生成する -->
					<?php comments_template();?>

				<!-- 記事の投稿がない場合 -->
				<?php else : ?>
						<h2 class="title">記事が見つかりませんでした。</h2>
						<p>もしかすると検索で見つかるかもしれません。検索バーで試してみてください</p>
						<?php get_search_form();?>
				<?php endif; ?>
				</div>

				<!-- サイドバー -->
				<?php get_sidebar(); ?>
			</section>
		</div>

<!-- フッター -->
<?php get_footer(); ?>