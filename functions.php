<?php

// カスタムヘッダー画像の設置
$custom_header_defaults = array(
	//key =>valueの形
	//get_bloginfoでhpまでのurlを取得し、続いて画像のパスまでを追加する
	'default-image' => get_bloginfo('template_url').'/img/logo.png',
	'header-text' => false,//ヘッダー画像上にテキストをかぶせる
);
// カスタムヘッダー機能を有効にする（管理画面に「ヘッダー」が現れる）
// add_theme_supportはwp独自の関数 第一引数にはなんの機能か（ここではcustom-header）,第2引数にはその設定を入れる（ここでは上で設定した内容）
add_theme_support( 'custom-header', $custom_header_defaults );

// カスタムメニューの設置
// ここのmainmenuはwp_nav_menu>'theme_location' =>'mainmenu',で指定したもの
register_nav_menu( 'mainmenu', 'メインメニュー' );

?>