<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="wp-content/themes/test/fontello/css/fontello.css" type="text/css">
  <meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php the_title();?>" />
  <meta property="og:description" content="" />
  <?php
      $test=get_post_thumbnail_id($post->ID);
      $test=wp_get_attachment_url($test);
   ?>
  <meta property="og:image" content="<?php echo $test ?>" />


  <title><?php bloginfo(); ?></title>

  <?php wp_head(); ?>
</head>

<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.5&appId=471200443068853";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="main-box">
  <div class="panell">

      <div class="titlee">
          Facebook
      </div>

      <div class="contentt">
<div class="fb-page" data-href="https://www.facebook.com/Gimnazjum-im-Zofii-Kossak-w-Pier%C5%9B%C4%87cu-300254070046081/?fref=ts" data-tabs="timeline"
 data-width="250px" data-height="270px"
 data-small-header="true"
data-adapt-container-width="true" data-hide-cover="true"
data-show-facepile="true"></div>
      </div>

  </div>
  <div class="top-baner"></div>
<nav>
      <a href="#" class="menu-toggle"><i class="icon-th-list"></i></a>
      <?php
      $args = array(
        'menu' => 'menu_glowne',
        'container' => false,
      );
      wp_nav_menu( $args );
      ?>
      </nav>
