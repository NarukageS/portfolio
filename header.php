<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>naru's portfolio</title>
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/icon/favicon.png' ); ?>">
  <?php wp_head(); ?>
</head>

<body class="js_body">
  <header class="l_header js_header">
    <div class="l_header_inner">
      <h1 class="l_header_logo"><a href="<?php echo esc_url(home_url()); ?>"><i>SHUNYA<br>NARUKAGE</i></a></h1>

    <?php 
    if (is_front_page()):
    ?>
      <nav class="l_header_nav js_navigation">
        <ul class="l_header_list">
          <li class="l_header_item">
            <a href="#1" class="l_header_link">
              <span>A</span><span>B</span><span>O</span><span>U</span><span>T</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="#2" class="l_header_link">
              <span>P</span><span>O</span><span>L</span><span>I</span><span>C</span><span>Y</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="#3" class="l_header_link">
              <span>S</span><span>K</span><span>I</span><span>L</span><span>L</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="#4" class="l_header_link">
              <span>W</span><span>O</span><span>R</span><span>K</span><span>S</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l_header_link">
              <span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span>
            </a>
          </li>
        </ul>
      </nav>
    <?php else: ?>
      <nav class="l_header_nav js_navigation">
        <ul class="l_header_list">
          <li class="l_header_item">
            <a href="<?php echo esc_url(home_url()); ?>/#1" class="l_header_link">
              <span>A</span><span>B</span><span>O</span><span>U</span><span>T</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="<?php echo esc_url(home_url()); ?>/#2" class="l_header_link">
              <span>P</span><span>O</span><span>L</span><span>I</span><span>C</span><span>Y</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="<?php echo esc_url(home_url()); ?>/#3" class="l_header_link">
              <span>S</span><span>K</span><span>I</span><span>L</span><span>L</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="<?php echo esc_url(home_url()); ?>/#4" class="l_header_link">
              <span>W</span><span>O</span><span>R</span><span>K</span><span>S</span>
            </a>
          </li>
          <li class="l_header_item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l_header_link">
              <span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span>
            </a>
          </li>
        </ul>
      </nav>
    <?php endif; ?>

      <button class="m_hamburger js_hamburger">
        <div class="m_hamburger-bar"></div>
        <div class="m_hamburger-bar"></div>
        <div class="m_hamburger-bar"></div>
      </button>

      </div>
  </header>