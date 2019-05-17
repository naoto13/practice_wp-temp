
<!-- ヘッダー -->
<!-- get_header();でheaderと名前がつくファイルを自動で読み込む -->
<?php get_header(); ?>

		<!-- メニュー -->
        <?php get_template_part('content','menu');?>

		<!-- メインコンテンツ -->
		<div id="main">

            <!-- トップバナー -->
			<!-- <img src="img/top-baner.png" id="top-baner"> -->
			<img src="wp-content/themes/sample/img/top-baner.png" id="top-baner">

			<!-- ABOUT -->
			<section id="about" class="site-width">
				<h1 class="title">ABOUT</h1>
				<?php echo get_post_meta($post->ID, 'about' ,true)?>
			</section>

			<!-- MERIT -->
			<section id="merit" class="site-width">
				<h1 class="title">MERIT</h1>
				<?php dynamic_sidebar('メリットエリア'); ?>
			</section>

			<!-- RECRUIT -->
			<section id="recruit" class="site-width">
				<table>
					<thead>
						<tr><th class="color1">RECRUIT</th><th>ウェブカツ!!講師募集</th></tr>
					</thead>
					<tbody>
						<tr><th>業務内容</th><td>プログラミング教育動画の作成・ホームページの制作</td></tr>
						<tr><th>資格・経験</th><td>HTML,CSS,PHPを学んだ事がある人なら、業務経験がなくても構いません！</td></tr>
						<tr><th>お給料</th><td>お気持ちだけで</td></tr>
						<tr><th>勤務地</th><td>自宅で構いません</td></tr>
						<tr><th>選考方法</th><td>メールでお問合せ頂いた後にSkype電話にてお話させて頂きます。</td></tr>
						<tr><th>応募方法</th><td>メールでご応募ください。</td></tr>
						<tr><th>応募先</th><td>info@webukatu.com</td></tr>
					</tbody>
				</table>
			</section>

        </div>

<!-- footer -->
<?php get_footer(); ?>
