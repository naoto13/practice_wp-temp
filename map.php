
<?php
/*
Template Name: INFO ~お問い合わせページ~
*/
?>
<!-- ヘッダー -->
<!-- get_header();でheaderと名前がつくファイルを自動で読み込む -->
<?php get_header(); ?>

        <!-- メニュー -->
        <?php get_template_part(' content ',' menu ');?>

		<div id="main">

			<!-- blog_list -->
			<section id="map">
				<!-- タイトルを動的に生成 -->
				<h1 class="title"><?php echo get_the_title(); ?></h1>
				<div id="content">
					<!-- カスタムフィールドでGooglemapを読み込む get_post_meta()を使用-->
					<?php echo get_post_meta($post->ID, 'map' ,true); ?>
				</div>
			</section>
			
			<section id="shop_info" class="site-width">
				<!-- 以下、固定ページでよくある流れ。（お決まり） -->
				<?php if(have_posts()) : //WordPressループ
					while (have_posts()) : the_post();  //繰り返し処理開始 ?>
					<!-- 大事なのはここで固定ページごとのID属性をid=post-idという形で付与していること -->
					<!-- post_class()やthe_content()もWP専用。クラスや本文を指定している-->
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
						</div>
					<?php endwhile; //繰り返し処理終了
					else :	//ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>記事はありません</h2>
							<p>お探しの記事は見つかりませんでした</p>
						</div>
					<?php endif; //WPのループ終了?>
				<!-- <p>
					〒150-0034<br>
					東京都渋谷区代官山町０−０−０<br>
					ウェブカツ株式会社<br>
					TEL：03-000-00000<br>
					EMAIL：info@webukatu.com<br>
					営業時間：OPEN 9:00 - CLOSE 18:00
				</p> こういう本文を固定ページとして動的に作りたい-->
			</section>


		</div>

<!-- footer -->
<?php get_footer(); ?>

