<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description') ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>

  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WWWWJTC');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWWWJTC" height="0" width="0"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="sticky-top border-bottom">
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php bloginfo('template_url') ?>/assets/img/brastelha-logo.png" class="navbar-brand d-md-none" width="90" height="auto" alt="...">
          <img src="<?php bloginfo('template_url') ?>/assets/img/brastelha-logo.png" class="navbar-brand d-none d-md-block" width="120" height="auto" alt="...">
          <span class="visually-hidden"><?php bloginfo('name'); ?></span>
        </a>
        <p class="mb-0 d-md-none">
          <small><i class="bi bi-telephone me-1"></i><a href="tel:1147502413" class="link-secondary text-decoration-none" target="_blank" rel="noopener norefer">(11) 4750-2413</a></small>
          <br>
          <small><i class="bi bi-whatsapp me-1"></i><a href="https://wa.me/5511987173378" class="link-secondary text-decoration-none" target="_blank" rel="noopener norefer">(11) 98717-3378</a></small>
        </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-menu">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav mx-md-auto mb-2 mb-md-0 text-center %2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>
          <div class="d-grid d-md-flex">
            <a href="tel:1147502413" class="btn btn-outline-dark px-4 py-3 fw-bold me-md-3 mb-2 mb-md-0"><i class="bi bi-telephone-fill me-2"></i>11 4750-2413</a>
            <a href="https://wa.me/5511987173378" class="btn btn-success px-4 py-3 fw-bold me-md-3 mb-2 mb-md-0"><i class="bi bi-whatsapp me-2"></i></i>11 98717-3378</a>
            <button type="button" data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-dark px-4 py-3 fw-bold">SOLICITAR ORÇAMENTO</button>
          </div>
        </div>
        <!-- <div class="d-grid d-md-none fixed-bottom m-2">
          <button type="button" data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-success px-4 py-3 fw-bold">SOLICITAR ORÇAMENTO</button>
        </div> -->
      </div>
    </nav>
  </header>