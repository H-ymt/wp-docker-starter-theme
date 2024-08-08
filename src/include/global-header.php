<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?= vite_src_static("favicon.ico") ?>">
  <link rel="apple-touch-icon" href="<?= vite_src_static("apple-touch-icon.png") ?>">
  <link rel="stylesheet" href="<?= vite_src_css("app.scss") ?>">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" fetchpriority="high" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" media="print" onload='this.media="all"' />
  <?php wp_head(); ?>
</head>

<body id="top" data-type="<?= IS_TYPE ?>" <?php body_class(); ?>>
  <header class="global-header">
    <nav aria-label="Global navigation">

    </nav>

  </header>