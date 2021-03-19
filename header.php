<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/styles.scss">
  <title>youtube</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container inner">
      <h1><a href="<?php bloginfo('url'); ?>">タイトル</a></h1>
      <ul class="nav">
        <li><a href="<?php bloginfo('url'); ?>">トップ</a></li>
        <li><a href="<?php bloginfo('url'); ?>/service">サービス</a></li>
        <li><a href="<?php bloginfo('url'); ?>/price">料金案内</a></li>
        <li><a href="<?php bloginfo('url'); ?>/news">ニュース</a></li>
        <li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
        <li><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
      </ul>
    </div>
  </header>
  <main>
    <div class="mv">
      <img src="<?php echo get_template_directory_uri(); ?>/images/nick-fewings-DoDE5lWOj4Q-unsplash.jpg" alt="" style="width: 100%; height: 450px; object-fit: cover;">
    </div>