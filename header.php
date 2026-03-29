<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />

  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.ico" type="image/x-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="container">
    <!-- header -->
    <header id="header">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col col-md-auto">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.jpeg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            </a>
          </div>
          <div class="col-auto">
            <button class="d-md-none" id="menuToggle" aria-label="Toggle menu">
              <span></span><span></span><span></span>
            </button>
            <nav id="main-navigation">
              <div class="scrollabel-content">
                <ul class="menu">
                  <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                  <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                  <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Services</a></li>
                  <li><a href="<?php echo esc_url(home_url('/#projects')); ?>">Projects</a></li>
                  <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact</a></li>
                  <li><a href="<?php echo esc_url(home_url('/user-registration')); ?>" class="user-registration-btn">User Registration</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- /header -->
