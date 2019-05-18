<!-- 5/18 fin -->
<!DOCTYPE html>
<html lang="ja">

	<head>
		<!-- 文字コードもutf-8ではなくbloginfoから -->
		<meta charset="<?php bloginfo('charset');?>">
		<!-- タイトルも管理画面からひっぱてくる -->
		<title><?php wp_title(); ?></title>
		<!-- stylesheetは自動的に使用されているものを読み込むように -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- WP管理画面から設定した内容が反映されるためのもの -->
		<?php wp_head(); ?>
	</head>

	<!-- wp専用クラスを付与 -->
	<body <?php body_class(); ?>>
