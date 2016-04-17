<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <meta property="og:url" content="<?=get_permalink( $post->ID ); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php the_title();?>" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="<?php wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" />

  <title><?php bloginfo(); ?></title>

  <?php wp_head(); ?>
</head>
<body>
  <div class="main-box">
    <a href="<?=site_url(); ?>"><div class="top-baner"></div></a>
    <nav>
      <a href="#" class="menu-toggle"><i class="icon-th-list"></i></a>
      <?php
      $args = [
        'menu' => 'menu_glowne',
        'container' => false,
      ];
      wp_nav_menu( $args );
      ?>
    </nav>
