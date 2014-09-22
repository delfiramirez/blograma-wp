<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="primary">
 *
 * @package nowell
 * @subpackage BlogramaFM
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <base href="https://blograma.fm" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="robots" content="all,index,follow" />
        <meta name="msnbot" content="all,index,follow" />
        <meta itemprop="url" content="https://blograma.fm" />
        <meta name="HandheldFriendly" content="True"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="googlebot" content="index,noarchive,follow,noodp" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@blogramafm">
        <meta name="twitter:title" content="Blograma FM">
        <meta name="twitter:description" content="Blograma FM">
        <meta name="twitter:creator" content="@blogramafm">
        <meta name="twitter:image:src" content="https://www.blograma.fm/src/images/blograma.png">
        <meta name="meta-apple-mobile-web-app-status-bar-style" content="black"/>
        <link rel="shortcut icon" href="https://www.blograma.fm/favicon.ico"/>
        <link rel="icon" type="image/gif" href="animated_favicon1.gif">
        <link rel="apple-touch-icon" sizes="76x76" href="https://blograma.fm/public/icons/ipad76x76.png"/>
        <link rel="apple-touch-icon" sizes="120x120" href="https://blograma.fm/public/icons/ipad120x120.png"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">
        <div id="page" class="hfeed site container">
            <div id="page-fence" class="site-fence row row-offcanvas row-offcanvas-right">
                <header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
                    <button class="trigger-offcanvas" type="button" data-toggle="offcanvas" title="<?php _e('Menu', 'nowell'); ?>">
                        <?php nowell_icon('menu'); ?>
                    </button>
                    <div class="site-branding">
                        <?php if ($header_image=get_header_image()) : ?>
                         <a class="site-image" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                             <img src="<?php echo esc_url($header_image); ?>" alt="">
                         </a>
                        <?php endif; ?>
                        <?php
                        if (!display_header_text()){
                         $site_info_display=' hidden';
                        }
                        else{
                         $site_info_display=' display';
                        }
                        ?>
                        <div class="site-title-description <?php echo esc_attr($site_info_display); ?>">
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                            <div class="site-description">
                                <?php bloginfo('description'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-offcanvas">
                        <?php if (has_nav_menu('primary')) : ?>
                         <nav class="site-navigation" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                             <?php
                             wp_nav_menu(array(
                                 'theme_location'=>'primary',
                                 'container'     =>false,
                                 'menu_class'    =>'menu menu--header',
                                 'depth'         =>1,
                             ));
                             ?>
                         </nav>
                        <?php endif; ?>
                        <?php get_sidebar('header'); ?>
                    </div>
                </header>
                <div id="content" class="site-content">