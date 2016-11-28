<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta name='author' content="Maria Steblyanko" />
   <!--link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet" /-->
   <link rel='stylesheet' id='lovecraft-fonts-css' href='https://fonts.googleapis.com/css?family=Playfair+Display%3A400%2C700%2C400italic%7CLato%3A400%2C400italic%2C700%2C700italic%2C900%2C900italic&#038;subset=latin%2Clatin-ext&#038;ver=4.6.1-RC1-38499' type='text/css' media='all' />
   <link rel="profile" href="http://gmpg.org/xfn/11" />
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <!--[if gte IE 9]><!-->
      <!--link id="responsive-stylesheet" rel="stylesheet" title="default" href="<?php echo get_template_directory_uri();?>/style-responsive.css" type="text/css" media="screen" /-->
   <!--<![endif]-->
   <?php 
      if ( is_front_page() ) $title = get_bloginfo( 'name' );
      else $title = get_bloginfo ( 'name' ) . wp_title ( '|', false );
   ?>
   <title><?php echo $title; ?></title>
   <?php 
      $page_description = get_post_meta ( get_the_ID(), "page_description", true );
      if ( !empty ( $page_description ) ) {
         echo '<meta name="Description" content="' . $page_description . '" />';
      }
   ?>
   <?php 
      $page_keywords = get_post_meta ( get_the_ID(), "page_keywords", true );
      $page_keywords = "maria steblyanko, art, " . $page_keywords; 
      if ( !empty ( $page_keywords ) ) {
         echo  '<meta name="keywords" content="' . $page_keywords . '" />';
      }
   ?>

   <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
   <?php wp_head(); ?>
</head>

<body>
   <div id="footer-push-container">
      <header id="header-background">
         <div id="page-header" class="constrained-to-mid">
            <h1 id="blog-name">
               <a id="blog-name-link" href="<?php echo get_home_url();?>">
                  <?php bloginfo('name'); ?>
               </a>
            </h1>
            <?php $tagline = get_bloginfo( 'description' ); ?>
            <?php if ( ! empty ( $tagline ) ): ?> 
                  <h2 id="blog-tagline"><?php echo $tagline ?></h2>
            <?php endif ?>
         </div>
         <div id="header-banner" ></div>
      </header>

      <div id="content" class='constrained-to-mid'>
