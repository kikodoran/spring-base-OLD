<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>