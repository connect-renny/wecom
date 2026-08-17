<?php
/**
 * Document head and the opening of <body>, up to and including the preloader.
 *
 * Expects (all optional):
 *   $pageTitle  string  browser title; falls back to the site name
 *   $metaDesc   string  meta description
 */
?>
<!doctype html>
<html lang="en" class="is-preloading">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="<?= htmlspecialchars($metaDesc ?? '') ?>" />
    <meta name="author" content="" />
    <title><?= htmlspecialchars($pageTitle ?? 'Wecom') ?></title>
    <link rel="icon" href="favicon.ico" />

    <!-- Bootstrap Icon -->
    <link href="assets/css/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/swiper-bundle.css" rel="stylesheet" />
    <link href="assets/css/aos.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- ═══ Preloader (curved sheet peels up off the page) ═══ -->
    <div class="loader-overlay">
      <div class="loader-logo">
        <!-- Inline so each dot can be animated out of the mark and back -->
        <svg
          class="loader-mark"
          viewBox="0 0 77.7 55.8"
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
        >
          <!-- Right slash -->
          <path
            fill="#46bcec"
            fill-rule="evenodd"
            d="M45.9,45.7c-1.7,3.5-.2,7.7,3.3,9.3,3.5,1.7,7.7.2,9.3-3.3.4-.9.6-1.8.7-2.7h0c.3-6.2,1.9-12.4,4.7-18.3,2.8-5.9,6.7-11,11.3-15.1.7-.6,1.3-1.4,1.7-2.2,1.7-3.5.2-7.7-3.3-9.3-3.5-1.7-7.7-.2-9.3,3.3-.4.9-.6,1.8-.7,2.7-.3,6.2-1.9,12.4-4.7,18.3-2.8,5.8-6.6,10.9-11.1,14.9-.2.1-.3.3-.5.4-.6.6-1,1.2-1.4,2h0Z"
          />
          <!-- Right dot -->
          <path
            class="loader-dot loader-dot-1"
            fill="#46bcec"
            d="M48.1,35c0,3.9-3.1,7-7,7s-7-3.1-7-7,3.1-7,7-7,7,3.1,7,7Z"
          />
          <!-- Left slash -->
          <path
            fill="#46bcec"
            fill-rule="evenodd"
            d="M14.6,42.6c-1.7,3.5-.2,7.7,3.3,9.3,3.5,1.7,7.7.2,9.3-3.3.4-.9.6-1.8.7-2.7h0c.3-6.2,1.9-12.4,4.7-18.3,2.8-5.9,6.7-11,11.3-15.1.7-.6,1.3-1.4,1.7-2.2,1.7-3.5.2-7.7-3.3-9.3-3.5-1.7-7.7-.2-9.3,3.3-.4.9-.6,1.8-.7,2.7-.3,6.2-1.9,12.4-4.7,18.3-2.8,5.8-6.6,10.8-11.1,14.9-.2.1-.3.3-.5.4-.6.6-1,1.2-1.4,2h0Z"
          />
          <!-- Left dot -->
          <path
            class="loader-dot loader-dot-2"
            fill="#46bcec"
            d="M14.3,35c0,3.9-3.1,7-7,7S.3,38.9.3,35s3.1-7,7-7,7,3.1,7,7Z"
          />
        </svg>
      </div>

      <!-- Sits directly under the sheet, so the bow trails behind it on the way out -->
      <svg
        class="loader-curve"
        viewBox="0 0 1000 180"
        preserveAspectRatio="none"
        aria-hidden="true"
      >
        <path d="M0,0 Q500,180 1000,0 Z" />
      </svg>
    </div>
