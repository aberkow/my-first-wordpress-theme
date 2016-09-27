<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device.width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <title>My First Theme</title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <div id="header">
      <h1><?php bloginfo('title') ?></h1>
    </div>

    <div id="site-content">
      Here is some text!
    </div>
