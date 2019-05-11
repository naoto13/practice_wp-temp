<!-- 記事のループ -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article class="article-item">
			<!-- リンクはthepermalink()、記事タイトルはthe_title();、著者はthe_author_nickname()、
							投稿日はthe_time("Y年m月j日")、カテゴリーはsingle_cat_title() -->
			<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<h3 style="font-size:80%;"><?php the_author_nickname(); ?> <?php the_time("Y年m月j日"); ?> <?php single_cat_title('カテゴリー： '); ?></h3>
			<!-- 投稿の本文内の画像も含めてthe_contentの中にあるためこれだけで良い -->
			<p class="article-body">
				<?php the_content(); ?>
			</p>
		</article>
	<?php endwhile; ?>
<?php endif; ?>