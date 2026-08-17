<?php
/**
 * Home page.
 *
 * The shell (head, navbar, FAQ, CTA, footer) comes from includes/; what stays
 * here is the run of sections unique to the home page.
 */
$pageTitle = 'Wecom';
$metaDesc  = "Wecom is Oman's AI-powered cloud communications platform for business calling, customer engagement, contact centre operations, collaboration, reporting and enterprise integration.";
$navActive = 'home';

include 'includes/head.php';
include 'includes/header.php';
?>
    <!-- ═══ Hero ═══ -->
    <section class="hero">
      <div class="container">
        <div class="hero-inner">
          <!-- Left: text slider -->
          <div class="hero-slider-col">
            <div class="swiper swiper-banner">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero-content">
                    <h1 class="hero-title">
                      Modern Business Communication, Built for Oman.
                    </h1>
                    <p class="hero-text">
                      Unify calls, customer conversations, video meetings,
                      recording, billing, analytics, and integrations on one
                      scalable cloud platform.
                    </p>
                    <div class="hero-actions">
                      <a href="#" class="btn-navy">Book a Demo</a>
                      <a href="#" class="btn-ghost">Contact Sales</a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="hero-content">
                    <h1 class="hero-title">
                      AI-Powered Contact Center & Cloud Telephony for Growing
                      Teams.
                    </h1>
                    <p class="hero-text">
                      Help support, sales, and operations teams respond faster
                      with omnichannel engagement, intelligent workflows, and
                      real-time visibility.
                    </p>
                    <div class="hero-actions">
                      <a href="#" class="btn-navy">Book a Demo</a>
                      <a href="#" class="btn-ghost">Contact Sales</a>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="hero-content">
                    <h1 class="hero-title">
                      From Business Calls to AI Contact Center — All in One
                      Platform
                    </h1>
                    <p class="hero-text">
                      Enable better customer experience, simpler management, and
                      scalable communication across branches, agents, and
                      business functions.
                    </p>
                    <div class="hero-actions">
                      <a href="#" class="btn-navy">Book a Demo</a>
                      <a href="#" class="btn-ghost">Contact Sales</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right: static visual -->
          <div class="hero-visual-col">
            <div class="hero-visual">
              <!-- Ring is inline so it stays crisp at any size; the conic mask
                   in the stylesheet still draws it in from --arc -->
              <svg
                class="hero-circle"
                viewBox="0 0 506 506"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <defs>
                  <linearGradient
                    id="heroCircleFill"
                    gradientUnits="userSpaceOnUse"
                    x1="170.6"
                    y1="13.8"
                    x2="335.4"
                    y2="492.2"
                  >
                    <stop offset="0" stop-color="#17639d" />
                    <stop offset="0.08" stop-color="#125692" />
                    <stop offset="0.16" stop-color="#0d4886" />
                    <stop offset="0.24" stop-color="#093a7b" />
                    <stop offset="0.36" stop-color="#072b6d" />
                    <stop offset="0.52" stop-color="#052163" />
                    <stop offset="0.72" stop-color="#041957" />
                    <stop offset="1" stop-color="#041850" />
                  </linearGradient>
                </defs>
                <circle
                  cx="253"
                  cy="253"
                  r="211.5"
                  fill="none"
                  stroke="url(#heroCircleFill)"
                  stroke-width="83"
                  stroke-opacity="0.52"
                />
              </svg>
              <!-- Same treatment as the ring above — a stroked arc, with the
                   fade carried in the gradient's opacity rather than its colour -->
              <svg
                class="hero-half-circle"
                viewBox="0 0 228 224"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <defs>
                  <linearGradient
                    id="heroHalfCircleFill"
                    gradientUnits="userSpaceOnUse"
                    x1="40.44"
                    y1="14.47"
                    x2="235.55"
                    y2="178.53"
                    gradientTransform="rotate(0 131.75 91.25)"
                  >
                    <stop offset="0" stop-color="#18bffe" stop-opacity="1" />
                    <stop offset="1" stop-color="#18bffe" stop-opacity="0" />
                    <!-- Turning the axis about the arc's own centre walks the
                         bright end around the shape without changing how much
                         of it is lit overall -->
                    <animateTransform
                      attributeName="gradientTransform"
                      type="rotate"
                      from="0 131.75 91.25"
                      to="360 131.75 91.25"
                      dur="14s"
                      repeatCount="indefinite"
                    />
                  </linearGradient>
                </defs>
                <!-- Exactly half a turn: centre (131.75, 91.25), 43.75° round to 223.75° -->
                <path
                  d="M199.86,156.45 A94.29,94.29 0 0 1 63.64,26.05"
                  fill="none"
                  stroke="url(#heroHalfCircleFill)"
                  stroke-width="77"
                />
              </svg>
              <div class="hero-sound-wave" aria-hidden="true"></div>
              <span class="hero-glitter-card">
                <!-- Inline SVG so each star can animate with its own delay -->
                <svg
                  width="76"
                  height="76"
                  viewBox="0 0 101.9 96.7"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true"
                >
                  <path
                    class="glitter-star"
                    fill="#2cb6fe"
                    d="M23.5,7.3L20.9.2l-2.6,7.1c-1.8,5-5.8,8.9-10.8,10.8L.4,20.7l7.1,2.6c5,1.8,8.9,5.8,10.8,10.8l2.6,7.1,2.6-7.1c1.8-5,5.8-8.9,10.8-10.8l7.1-2.6-7.1-2.6c-5-1.8-8.9-5.8-10.8-10.8Z"
                  />
                  <path
                    class="glitter-star"
                    fill="#2cb6fe"
                    d="M30.8,76l-1.6-4.3-1.6,4.3c-1.1,3-3.5,5.4-6.5,6.5l-4.3,1.6,4.3,1.6c3,1.1,5.4,3.5,6.5,6.5l1.6,4.3,1.6-4.3c1.1-3,3.5-5.4,6.5-6.5l4.3-1.6-4.3-1.6c-3-1.1-5.4-3.5-6.5-6.5Z"
                  />
                  <path
                    class="glitter-star"
                    fill="#2eb4fc"
                    d="M71.4,31.4l-4.4-12-4.4,12c-3.1,8.4-9.7,15-18.1,18.1l-12,4.4,12,4.4c8.4,3.1,15,9.7,18.1,18.1l4.4,12,4.4-12c3.1-8.4,9.7-15,18.1-18.1l12-4.4-12-4.4c-8.4-3.1-15-9.7-18.1-18.1Z"
                  />
                </svg>
              </span>
              <img
                class="hero-woman"
                src="assets/images/hero-woman.png"
                alt="Customer support agent"
              />
            </div>
          </div>
        </div>
      </div>

      <!-- Slider pagination -->
      <div class="swiper-pagination"></div>
    </section>

    <!-- ═══ Trusted / About / Products (shared fixed glow bg) ═══ -->
    <div class="glow-bg">
      <!-- ═══ Trusted by ═══ -->
      <section class="section-trusted">
        <div class="container">
          <p class="trusted-title" data-aos="fade-up">
            Trusted by everyone from startups to the Fortune 500
          </p>

          <!-- Clipped to the container, fading out at both ends -->
          <div class="trusted-marquee" data-aos="fade-up">
            <div class="trusted-track">
              <ul class="trusted-set">
                <li class="trusted-item">
                  <img src="assets/images/trusted-01.png" alt="Mixmax" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-02.png" alt="Clockwise" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-03.png" alt="Gusto" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-04.png" alt="Buffer" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-05.png" alt="Litmus" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-06.png" alt="Efficient App" />
                </li>
              </ul>

              <!-- Second copy exists only to close the loop — hidden from
                   assistive tech so the names are not read out twice -->
              <ul class="trusted-set" aria-hidden="true">
                <li class="trusted-item">
                  <img src="assets/images/trusted-01.png" alt="" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-02.png" alt="" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-03.png" alt="" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-04.png" alt="" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-05.png" alt="" />
                </li>
                <li class="trusted-item">
                  <img src="assets/images/trusted-06.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Company Overview ═══ -->
      <section class="section-overview">
        <div class="container">
          <div class="overview-inner">
            <div class="overview-copy" data-aos="fade-up">
              <span class="products-eyebrow">
                <svg
                  class="title-star"
                  viewBox="0 0 52.1 52.8"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true"
                >
                  <path
                    class="title-star-shape"
                    fill="#2cb6fe"
                    d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
                  />
                  <path
                    class="title-star-shape"
                    fill="#2eb4fc"
                    d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
                  />
                </svg>
                Company Overview
              </span>

              <h2 class="overview-title">
                Communication Administered Efficiently.
              </h2>

              <p class="overview-text">
                Wecom is Oman's AI-powered cloud communications platform for
                business calling, customer engagement, contact center
                operations, collaboration, reporting, and enterprise
                integration.
              </p>
              <p class="overview-text">
                Wecom is a company focused on advising, implementing and
                supporting IP telephony, unified communication solutions
                designed from Small &amp; Medium to Enterprise Organizations in
                Oman.
              </p>

              <div class="overview-actions">
                <a href="#" class="btn-navy">Book a Demo</a>
                <a href="#" class="btn-outline">Contact Sales</a>
              </div>
            </div>

            <!-- Digits are rebuilt as reels by main.js and rolled into place the
                 first time the grid scrolls into view -->
            <ul class="fact-grid" data-aos="fade-up">
              <li class="fact-card">
                <span class="fact-icon">
                  <img src="assets/images/fact-icon-01.png" alt="" />
                </span>
                <p class="fact-number" data-count="100+">100+</p>
                <p class="fact-label">Installation Completed</p>
              </li>
              <li class="fact-card">
                <span class="fact-icon">
                  <img src="assets/images/fact-icon-02.png" alt="" />
                </span>
                <p class="fact-number" data-count="15+">15+</p>
                <p class="fact-label">Years in Oman</p>
              </li>
              <li class="fact-card">
                <span class="fact-icon">
                  <img src="assets/images/fact-icon-03.png" alt="" />
                </span>
                <p class="fact-number" data-count="24/7">24/7</p>
                <p class="fact-label">Human Support</p>
              </li>
              <li class="fact-card">
                <span class="fact-icon">
                  <img src="assets/images/fact-icon-04.png" alt="" />
                </span>
                <p class="fact-number" data-count="99.99%">99.99%</p>
                <p class="fact-label">Uptime SLA</p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ═══ Products ═══ -->
      <section class="products">
        <div class="container">
          <div class="products-head" data-aos="fade-up">
            <span class="products-eyebrow">
              <svg
                class="title-star"
                viewBox="0 0 52.1 52.8"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  class="title-star-shape"
                  fill="#2cb6fe"
                  d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
                />
                <path
                  class="title-star-shape"
                  fill="#2eb4fc"
                  d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
                />
              </svg>
              Products
            </span>
            <h2 class="products-title">
              Complete Business Communication Solutions.
            </h2>
            <p class="products-lead">
              From seamless PABX setups to smart office automation, we are
              Oman's trusted partner for every communication solution.
            </p>
          </div>

          <div class="products-grid">
            <article class="product-card" data-aos="fade-up">
              <span class="product-icon">
                <img src="assets/images/communication-icon-01.png" alt="" />
              </span>
              <h3 class="product-name">AI<br />Contact Center.</h3>
              <p class="product-desc">
                Next-generation customer support, powered by artificial
                intelligence.
              </p>
            </article>

            <article
              class="product-card"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <span class="product-icon">
                <img src="assets/images/communication-icon-02.png" alt="" />
              </span>
              <h3 class="product-name">Cloud Telephony.<br />Virtual PBX.</h3>
              <p class="product-desc">
                Upgrade to a Virtual PBX and scale your business communications
                effortlessly.
              </p>
            </article>

            <article
              class="product-card"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <span class="product-icon">
                <img src="assets/images/communication-icon-03.png" alt="" />
              </span>
              <h3 class="product-name">Agent Calls.<br />Business Calling.</h3>
              <p class="product-desc">
                Professional calling solutions built to keep your team reliably
                connected.
              </p>
            </article>

            <article class="product-card" data-aos="fade-up">
              <span class="product-icon">
                <img src="assets/images/communication-icon-04.png" alt="" />
              </span>
              <h3 class="product-name">Omnichannel<br />Communications.</h3>
              <p class="product-desc">
                Meet your customers exactly where they are, on their preferred
                channels.
              </p>
            </article>

            <article
              class="product-card"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <span class="product-icon">
                <img src="assets/images/communication-icon-05.png" alt="" />
              </span>
              <h3 class="product-name">Video<br />Conferencing.</h3>
              <p class="product-desc">
                Next-generation customer support, powered by artificial
                intelligence.
              </p>
            </article>

            <article
              class="product-card"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <span class="product-icon">
                <img src="assets/images/communication-icon-06.png" alt="" />
              </span>
              <h3 class="product-name">Meeting<br />Platform.</h3>
              <p class="product-desc">
                Facilitate both planned and impromptu business meetings.
              </p>
            </article>

            <article class="product-card" data-aos="fade-up">
              <span class="product-icon">
                <img src="assets/images/communication-icon-07.png" alt="" />
              </span>
              <h3 class="product-name">Integrations &amp;<br />APIs.</h3>
              <p class="product-desc">
                Bridge the gap between communication activities and business
                systems.
              </p>
            </article>

            <article
              class="product-card"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <span class="product-icon">
                <img src="assets/images/communication-icon-08.png" alt="" />
              </span>
              <h3 class="product-name">Recording &amp;<br />Billing.</h3>
              <p class="product-desc">
                Next-generation customer support, powered by artificial
                intelligence.
              </p>
            </article>

            <article
              class="product-card"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <span class="product-icon">
                <img src="assets/images/communication-icon-09.png" alt="" />
              </span>
              <h3 class="product-name">Reporting &amp;<br />Analytics.</h3>
              <p class="product-desc">
                Transform communication engagements into practical insights for
                management.
              </p>
            </article>

            <!-- Single shade that floats to whichever card is hovered -->
            <span class="products-shade" aria-hidden="true"></span>
          </div>

          <div class="products-foot" data-aos="fade-up">
            <a href="#" class="link-more">
              <span class="link-more-label">Learn more about our products</span>
              <!-- Two arrows: one leaves as the other arrives -->
              <span class="link-more-arrow" aria-hidden="true">
                <span>&rarr;</span>
                <span>&rarr;</span>
              </span>
            </a>
          </div>
        </div>
      </section>
    </div>
    <!-- /.glow-bg -->

    <!-- ═══ Key Pillars ═══ -->
    <section class="pillars">
      <div class="container">
        <div class="pillars-head" data-aos="fade-up">
          <span class="pillars-eyebrow">
            <svg
              class="title-star"
              viewBox="0 0 52.1 52.8"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                class="title-star-shape"
                fill="#2cb6fe"
                d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
              />
              <path
                class="title-star-shape"
                fill="#2eb4fc"
                d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
              />
            </svg>
            Highlights
          </span>
          <h2 class="pillars-title">Our Key Pillers.</h2>
        </div>

        <div class="pillars-slider" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper swiper-pillars">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  class="pillar-card"
                  src="assets/images/pillers-item-01.png"
                  alt="Local Expertise in Oman"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="pillar-card"
                  src="assets/images/pillers-item-02.png"
                  alt="AI-Enabled Operations"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="pillar-card"
                  src="assets/images/pillers-item-03.png"
                  alt="Scalable Cloud Deployment"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="pillar-card"
                  src="assets/images/pillers-item-04.png"
                  alt="Local Expertise in Oman"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="pillar-card"
                  src="assets/images/pillers-item-05.png"
                  alt="AI-Enabled Operations"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="pillar-card"
                  src="assets/images/pillers-item-06.png"
                  alt="Scalable Cloud Deployment"
                />
              </div>
            </div>
          </div>

          <button class="pillars-nav pillars-prev" aria-label="Previous">
            <i class="bi bi-arrow-left"></i>
          </button>
          <button class="pillars-nav pillars-next" aria-label="Next">
            <i class="bi bi-arrow-right"></i>
          </button>
        </div>

        <div class="pillars-pagination"></div>
      </div>
    </section>

    <!-- ═══ Solutions ═══ -->
    <section class="solutions">
      <div class="container">
        <div class="solutions-head" data-aos="fade-up">
          <span class="solutions-eyebrow">
            <svg
              class="title-star"
              viewBox="0 0 52.1 52.8"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                class="title-star-shape"
                fill="#2cb6fe"
                d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
              />
              <path
                class="title-star-shape"
                fill="#2eb4fc"
                d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
              />
            </svg>
            Solutions
          </span>
          <h2 class="solutions-title">
            Connecting the Sultanate with intelligent communication.
          </h2>
        </div>

        <!-- data-lenis-prevent: below 992 this is a horizontal scroll strip,
             and Lenis would otherwise swallow the touchmove that scrolls it -->
        <div
          class="solutions-tabs"
          role="tablist"
          data-lenis-prevent
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <button
            class="solutions-tab is-active"
            type="button"
            role="tab"
            aria-selected="true"
            data-tab="0"
          >
            <span class="solutions-tab-num">01.</span>
            <span class="solutions-tab-label">Customer Support</span>
          </button>
          <button
            class="solutions-tab"
            type="button"
            role="tab"
            aria-selected="false"
            data-tab="1"
          >
            <span class="solutions-tab-num">02.</span>
            <span class="solutions-tab-label">Sales &amp; Outbound</span>
          </button>
          <button
            class="solutions-tab"
            type="button"
            role="tab"
            aria-selected="false"
            data-tab="2"
          >
            <span class="solutions-tab-num">03.</span>
            <span class="solutions-tab-label">Remote Workforce</span>
          </button>
          <button
            class="solutions-tab"
            type="button"
            role="tab"
            aria-selected="false"
            data-tab="3"
          >
            <span class="solutions-tab-num">04.</span>
            <span class="solutions-tab-label">Enterprise Collaboration</span>
          </button>
          <button
            class="solutions-tab"
            type="button"
            role="tab"
            aria-selected="false"
            data-tab="4"
          >
            <span class="solutions-tab-num">05.</span>
            <span class="solutions-tab-label">Multi-Branch Communication</span>
          </button>
        </div>

        <div class="solutions-slider" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper swiper-solutions">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="solution-card">
                  <div class="solution-visual">
                    <img src="assets/images/solutions-pic-01.png" alt="" />
                  </div>
                  <div class="solution-body">
                    <span class="solution-num">01.</span>
                    <h3 class="solution-name">Customer Support</h3>
                    <p class="solution-desc">
                      Wecom is uniquely positioned to meet the exact deployment
                      and service expectations of Oman's local business
                      environment
                    </p>
                    <a href="customer-support-solutions.php" class="link-more">
                      <span class="link-more-label">Learn more</span>
                      <span class="link-more-arrow" aria-hidden="true">
                        <span>&rarr;</span>
                        <span>&rarr;</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="solution-card">
                  <div class="solution-visual">
                    <img src="assets/images/solutions-pic-02.png" alt="" />
                  </div>
                  <div class="solution-body">
                    <span class="solution-num">02.</span>
                    <h3 class="solution-name">Sales &amp; Outbound</h3>
                    <p class="solution-desc">
                      Wecom is uniquely positioned to meet the exact deployment
                      and service expectations of Oman's local business
                      environment
                    </p>
                    <a href="#" class="link-more">
                      <span class="link-more-label">Learn more</span>
                      <span class="link-more-arrow" aria-hidden="true">
                        <span>&rarr;</span>
                        <span>&rarr;</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="solution-card">
                  <div class="solution-visual">
                    <img src="assets/images/solutions-pic-03.png" alt="" />
                  </div>
                  <div class="solution-body">
                    <span class="solution-num">03.</span>
                    <h3 class="solution-name">Remote Workforce</h3>
                    <p class="solution-desc">
                      Wecom is uniquely positioned to meet the exact deployment
                      and service expectations of Oman's local business
                      environment
                    </p>
                    <a href="#" class="link-more">
                      <span class="link-more-label">Learn more</span>
                      <span class="link-more-arrow" aria-hidden="true">
                        <span>&rarr;</span>
                        <span>&rarr;</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Only three visuals exist so far; 04 and 05 reuse 01 and 02 -->
              <div class="swiper-slide">
                <div class="solution-card">
                  <div class="solution-visual">
                    <img src="assets/images/solutions-pic-04.png" alt="" />
                  </div>
                  <div class="solution-body">
                    <span class="solution-num">04.</span>
                    <h3 class="solution-name">Enterprise Collaboration</h3>
                    <p class="solution-desc">
                      Communication solutions designed to help enterprise
                      departments and leadership teams work faster, serve
                      better, and stay connected with more control.
                    </p>
                    <a href="#" class="link-more">
                      <span class="link-more-label">Learn more</span>
                      <span class="link-more-arrow" aria-hidden="true">
                        <span>&rarr;</span>
                        <span>&rarr;</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="solution-card">
                  <div class="solution-visual">
                    <img src="assets/images/solutions-pic-05.png" alt="" />
                  </div>
                  <div class="solution-body">
                    <span class="solution-num">05.</span>
                    <h3 class="solution-name">Multi-Branch Communication</h3>
                    <p class="solution-desc">
                      Communication solutions designed to help multi-branch
                      businesses work faster, serve better, and stay connected
                      with more control.
                    </p>
                    <a href="#" class="link-more">
                      <span class="link-more-label">Learn more</span>
                      <span class="link-more-arrow" aria-hidden="true">
                        <span>&rarr;</span>
                        <span>&rarr;</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ Pricing + Integrations (shared fixed glow bg) ═══ -->
    <div class="glow-bg-2">
      <!-- ═══ Pricing ═══ -->
      <section class="pricing">
        <div class="container">
          <div class="pricing-head" data-aos="fade-up">
            <span class="pricing-eyebrow">
              <svg
                class="title-star"
                viewBox="0 0 52.1 52.8"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  class="title-star-shape"
                  fill="#2cb6fe"
                  d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
                />
                <path
                  class="title-star-shape"
                  fill="#2eb4fc"
                  d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
                />
              </svg>
              Pricing
            </span>
            <h2 class="pricing-title">
              Cloud Contact Center Pricing Made Easy.
            </h2>
          </div>

          <!-- Row marks are defined once and referenced, rather than repeating
               the same two paths 24 times across the three plans -->
          <svg class="visually-hidden" aria-hidden="true">
            <symbol id="icon-tick" viewBox="0 0 24 24">
              <path
                fill="none"
                stroke="currentColor"
                stroke-width="2.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 12.5 10 17.5 19 7"
              />
            </symbol>
            <symbol id="icon-ghost" viewBox="0 0 24 24">
              <path
                d="M12 2a8 8 0 0 0-8 8v10l2.7-2 2.65 2 2.65-2 2.65 2 2.7-2V10a8 8 0 0 0-8-8Z"
                fill="currentColor"
              />
              <circle cx="9.2" cy="10.2" r="1.15" fill="#8f9bb3" />
              <circle cx="14.8" cy="10.2" r="1.15" fill="#8f9bb3" />
            </symbol>
          </svg>

          <div class="pricing-grid">
            <div class="pricing-card" data-aos="fade-up">
              <div class="plan">
                <div class="plan-head">
                  <img
                    class="plan-icon"
                    src="assets/images/pricing-icon-01.png"
                    alt=""
                  />
                  <h3 class="plan-name">Standard</h3>
                </div>
                <div class="plan-body">
                  <p class="plan-price">
                    <span class="plan-amount">10 OMR</span>
                    <span class="plan-period">/ month</span>
                  </p>
                  <p class="plan-billing">billed yearly</p>

                  <a href="#" class="plan-cta">Start Free Access</a>

                  <p class="plan-features-label">Features Included:</p>
                  <ul class="plan-features">
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Core Calling
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Anonymous call rejection
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call Forwarding
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call forwarding timeout
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call hold
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call transfer
                    </li>
                    <li class="is-excluded">
                      <svg class="plan-mark plan-mark-no" aria-hidden="true">
                        <use href="#icon-ghost" />
                      </svg>
                      Call waiting
                    </li>
                    <li class="is-excluded">
                      <svg class="plan-mark plan-mark-no" aria-hidden="true">
                        <use href="#icon-ghost" />
                      </svg>
                      Call completion busy
                    </li>
                  </ul>

                  <a href="#" class="plan-more">More..</a>
                </div>
              </div>
            </div>

            <div
              class="pricing-card pricing-card-featured"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <span class="plan-badge">Recommended</span>
              <div class="plan">
                <div class="plan-head">
                  <img
                    class="plan-icon"
                    src="assets/images/pricing-icon-02.png"
                    alt=""
                  />
                  <h3 class="plan-name">Advanced</h3>
                </div>
                <div class="plan-body">
                  <p class="plan-price">
                    <span class="plan-amount">10 OMR</span>
                    <span class="plan-period">/ month</span>
                  </p>
                  <p class="plan-billing">billed yearly</p>

                  <a href="#" class="plan-cta">Start Free Access</a>

                  <p class="plan-features-label">Features Included:</p>
                  <ul class="plan-features">
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Core Calling
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Anonymous call rejection
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call Forwarding
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call forwarding timeout
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call hold
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call transfer
                    </li>
                    <li class="is-excluded">
                      <svg class="plan-mark plan-mark-no" aria-hidden="true">
                        <use href="#icon-ghost" />
                      </svg>
                      Call waiting
                    </li>
                    <li class="is-excluded">
                      <svg class="plan-mark plan-mark-no" aria-hidden="true">
                        <use href="#icon-ghost" />
                      </svg>
                      Call completion busy
                    </li>
                  </ul>

                  <a href="#" class="plan-more">More..</a>
                </div>
              </div>
            </div>

            <div class="pricing-card" data-aos="fade-up" data-aos-delay="200">
              <div class="plan">
                <div class="plan-head">
                  <img
                    class="plan-icon"
                    src="assets/images/pricing-icon-03.png"
                    alt=""
                  />
                  <h3 class="plan-name">Premium</h3>
                </div>
                <div class="plan-body">
                  <p class="plan-price">
                    <span class="plan-amount">10 OMR</span>
                    <span class="plan-period">/ month</span>
                  </p>
                  <p class="plan-billing">billed yearly</p>

                  <a href="#" class="plan-cta">Start Free Access</a>

                  <p class="plan-features-label">Features Included:</p>
                  <ul class="plan-features">
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Core Calling
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Anonymous call rejection
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call Forwarding
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call forwarding timeout
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call hold
                    </li>
                    <li>
                      <svg class="plan-mark plan-mark-yes" aria-hidden="true">
                        <use href="#icon-tick" />
                      </svg>
                      Call transfer
                    </li>
                    <li class="is-excluded">
                      <svg class="plan-mark plan-mark-no" aria-hidden="true">
                        <use href="#icon-ghost" />
                      </svg>
                      Call waiting
                    </li>
                    <li class="is-excluded">
                      <svg class="plan-mark plan-mark-no" aria-hidden="true">
                        <use href="#icon-ghost" />
                      </svg>
                      Call completion busy
                    </li>
                  </ul>

                  <a href="#" class="plan-more">More..</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Integrations ═══ -->
      <section class="integrations">
        <div class="container">
          <div class="integrations-head" data-aos="fade-up">
            <span class="integrations-eyebrow">
              <svg
                class="title-star"
                viewBox="0 0 52.1 52.8"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  class="title-star-shape"
                  fill="#2cb6fe"
                  d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
                />
                <path
                  class="title-star-shape"
                  fill="#2eb4fc"
                  d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
                />
              </svg>
              Integrations
            </span>
            <h2 class="integrations-title">
              Integrate with your Preferred Business Tools.
            </h2>
          </div>
        </div>

        <div class="container">
          <div class="integrations-marquees" data-aos="fade-up">
            <!-- Row 1 → scrolls left -->
            <div class="marquee">
              <div class="marquee-track is-left">
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-01.png" alt=""
                  /></span>
                  <span class="integration-name">Zoho</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-02.png" alt=""
                  /></span>
                  <span class="integration-name">HubSpot</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-03.png" alt=""
                  /></span>
                  <span class="integration-name">Shopify</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-04.png" alt=""
                  /></span>
                  <span class="integration-name">Zapier</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-05.png" alt=""
                  /></span>
                  <span class="integration-name">Salesforce</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-06.png" alt=""
                  /></span>
                  <span class="integration-name">Leadsquared</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-07.png" alt=""
                  /></span>
                  <span class="integration-name">Freshworks</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-08.png" alt=""
                  /></span>
                  <span class="integration-name">Zendesk</span>
                </div>
              </div>
            </div>

            <!-- Row 2 → scrolls right -->
            <div class="marquee">
              <div class="marquee-track is-right">
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-07.png" alt=""
                  /></span>
                  <span class="integration-name">Freshworks</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-08.png" alt=""
                  /></span>
                  <span class="integration-name">Zendesk</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-01.png" alt=""
                  /></span>
                  <span class="integration-name">Zoho</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-02.png" alt=""
                  /></span>
                  <span class="integration-name">HubSpot</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-03.png" alt=""
                  /></span>
                  <span class="integration-name">Shopify</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-04.png" alt=""
                  /></span>
                  <span class="integration-name">Zapier</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-05.png" alt=""
                  /></span>
                  <span class="integration-name">Salesforce</span>
                </div>
                <div class="integration-item">
                  <span class="integration-tile"
                    ><img src="assets/images/integrations-item-06.png" alt=""
                  /></span>
                  <span class="integration-name">Leadsquared</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="integrations-foot" data-aos="fade-up">
            <a href="#" class="integrations-more">
              See all Integrations
              <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </section>
    </div>
    <!-- /.glow-bg-2 -->

    <!-- ═══ Industries ═══ -->
    <section class="industries" data-bg-motion>
      <!-- Background: gradient field + the curve bundle the artwork used to
           carry as a JPEG. The viewBox is the old image's 1920×800 frame and
           slices like background-size: cover. -->
      <div class="industries-bg" aria-hidden="true">
        <span class="industries-glow"></span>
        <div class="industries-lines-layer bg-parallax">
          <svg
            class="industries-lines"
            viewBox="0 0 1920 800"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          >
            <!-- Main bundle: enters the top edge, bows right, turns out
                 through the bottom-left corner -->
            <g class="industries-fan">
              <path
                d="M250 -20C270 150 376 285 376 432C376 482.9 350 494.2 350 545A165 165 0 0 1 185 710H-40"
                stroke-opacity="1"
              />
              <path
                d="M280.8 -20C300.8 150 400.7 285 400.7 432C400.7 503.5 376.2 519.4 376.2 590.9A220.3 220.3 0 0 1 155.9 811.2H-40"
                stroke-opacity="0.95"
              />
              <path
                d="M316.9 -20C336.9 150 429.7 285 429.7 432C429.7 524.2 406.8 544.6 406.8 636.8A275.6 275.6 0 0 1 131.2 912.4H-40"
                stroke-opacity="0.91"
              />
              <path
                d="M355.4 -20C375.4 150 460.6 285 460.6 432C460.6 544.8 439.2 569.8 439.2 682.6A330.9 330.9 0 0 1 108.3 1013.5H-40"
                stroke-opacity="0.88"
              />
              <path
                d="M395.4 -20C415.4 150 492.7 285 492.7 432C492.7 565.4 472.8 595.1 472.8 728.5A386.2 386.2 0 0 1 86.6 1114.7H-40"
                stroke-opacity="0.84"
              />
              <path
                d="M436.7 -20C456.7 150 525.8 285 525.8 432C525.8 586.1 507.5 620.3 507.5 774.4A441.5 441.5 0 0 1 66 1215.9H-40"
                stroke-opacity="0.81"
              />
              <path
                d="M478.9 -20C498.9 150 559.8 285 559.8 432C559.8 606.7 543 645.6 543 820.3A496.8 496.8 0 0 1 46.2 1317.1H-40"
                stroke-opacity="0.78"
              />
              <path
                d="M522.1 -20C542.1 150 594.4 285 594.4 432C594.4 627.4 579.1 670.8 579.1 866.2A552.1 552.1 0 0 1 27 1418.3H-40"
                stroke-opacity="0.75"
              />
              <path
                d="M566 -20C586 150 629.6 285 629.6 432C629.6 648 615.8 696.1 615.8 912.1A607.4 607.4 0 0 1 8.4 1519.5H-40"
                stroke-opacity="0.73"
              />
              <path
                d="M610.6 -20C630.6 150 665.4 285 665.4 432C665.4 668.7 653.2 721.3 653.2 958A662.6 662.6 0 0 1 -9.4 1620.6H-40"
                stroke-opacity="0.7"
              />
              <path
                d="M655.7 -20C675.7 150 701.7 285 701.7 432C701.7 689.3 691 746.5 691 1003.8A718 718 0 0 1 -27 1721.8H-40"
                stroke-opacity="0.67"
              />
              <path
                d="M701.4 -20C721.4 150 738.4 285 738.4 432C738.4 710 729.2 771.7 729.2 1049.7A773.3 773.3 0 0 1 -44.1 1823H-40"
                stroke-opacity="0.65"
              />
              <path
                d="M747.6 -20C767.6 150 775.5 285 775.5 432C775.5 730.6 767.9 797 767.9 1095.6A828.5 828.5 0 0 1 -60.6 1924.1H-40"
                stroke-opacity="0.62"
              />
              <path
                d="M794.3 -20C814.3 150 812.9 285 812.9 432C812.9 751.3 806.8 822.2 806.8 1141.5A883.8 883.8 0 0 1 -77 2025.3H-40"
                stroke-opacity="0.6"
              />
              <path
                d="M841.3 -20C861.3 150 850.7 285 850.7 432C850.7 771.9 846.1 847.5 846.1 1187.4A939.1 939.1 0 0 1 -93 2126.5H-40"
                stroke-opacity="0.57"
              />
              <path
                d="M888.9 -20C908.9 150 888.8 285 888.8 432C888.8 792.5 885.7 872.7 885.7 1233.2A994.4 994.4 0 0 1 -108.7 2227.6H-40"
                stroke-opacity="0.55"
              />
              <path
                d="M936.7 -20C956.7 150 927.3 285 927.3 432C927.3 813.2 925.8 897.9 925.8 1279.1A1049.7 1049.7 0 0 1 -123.9 2328.8H-40"
                stroke-opacity="0.52"
              />
              <path
                d="M985 -20C1005 150 966 285 966 432C966 833.9 966 923.2 966 1325A1105 1105 0 0 1 -139 2430H-40"
                stroke-opacity="0.5"
              />
              <g class="bg-flows">
                <path
                  class="bg-flow"
                  d="M316.9 -20C336.9 150 429.7 285 429.7 432C429.7 524.2 406.8 544.6 406.8 636.8A275.6 275.6 0 0 1 131.2 912.4H-40"
                />
                <path
                  class="bg-flow"
                  d="M522.1 -20C542.1 150 594.4 285 594.4 432C594.4 627.4 579.1 670.8 579.1 866.2A552.1 552.1 0 0 1 27 1418.3H-40"
                />
                <path
                  class="bg-flow"
                  d="M794.3 -20C814.3 150 812.9 285 812.9 432C812.9 751.3 806.8 822.2 806.8 1141.5A883.8 883.8 0 0 1 -77 2025.3H-40"
                />
              </g>
            </g>

            <!-- Nested corner in the top right: top edge out to the right edge -->
            <g class="industries-crest">
              <path
                d="M1600 -20C1600 13 1726 26 1960 26"
                stroke-opacity="0.95"
              />
              <path
                d="M1520 -20C1520 27.6 1679.6 55.2 1960 55.2"
                stroke-opacity="0.88"
              />
              <path
                d="M1440 -20C1440 42.2 1633.2 84.3 1960 84.3"
                stroke-opacity="0.8"
              />
              <path
                d="M1360 -20C1360 56.8 1586.8 113.5 1960 113.5"
                stroke-opacity="0.73"
              />
              <path
                d="M1280 -20C1280 71.4 1540.4 142.7 1960 142.7"
                stroke-opacity="0.65"
              />
              <path
                d="M1200 -20C1200 85.9 1494 171.8 1960 171.8"
                stroke-opacity="0.58"
              />
              <path
                d="M1120 -20C1120 100.5 1447.6 201 1960 201"
                stroke-opacity="0.5"
              />
              <g class="bg-flows">
                <path
                  class="bg-flow"
                  d="M1520 -20C1520 27.6 1679.6 55.2 1960 55.2"
                />
                <path
                  class="bg-flow"
                  d="M1280 -20C1280 71.4 1540.4 142.7 1960 142.7"
                />
              </g>
            </g>
          </svg>
        </div>
      </div>

      <div class="container">
        <div class="industries-head" data-aos="fade-up">
          <span class="industries-eyebrow">
            <svg
              class="title-star"
              viewBox="0 0 52.1 52.8"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <path
                class="title-star-shape"
                fill="#2cb6fe"
                d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
              />
              <path
                class="title-star-shape"
                fill="#2eb4fc"
                d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
              />
            </svg>
            Industries we serve
          </span>
          <h2 class="industries-title">
            Tailored Solutions for Every Industry in Oman.
          </h2>
        </div>

        <div
          class="swiper swiper-industries"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <!-- Same seven industries as the Industries dropdown, in the same
               order and carrying the same icons -->
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-bank" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Banking &amp; Finance</h3>
                <p class="industry-desc">
                  Future-proof your financial institution with scalable,
                  next-generation PBX solutions.
                </p>
                <a href="#" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-heart-pulse" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Healthcare</h3>
                <p class="industry-desc">
                  Secure, HIPAA-compliant cloud communication tailored for
                  modern healthcare providers.
                </p>
                <a href="healthcare.php" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-bag" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Retail</h3>
                <p class="industry-desc">
                  Connect every storefront, warehouse, and headquarters under
                  one unified communication system.
                </p>
                <a href="#" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-buildings" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Government</h3>
                <p class="industry-desc">
                  Locally hosted deployments with the audit trails and uptime
                  public bodies are held to.
                </p>
                <a href="#" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-mortarboard" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Education</h3>
                <p class="industry-desc">
                  Connect campuses, faculties, and remote learners on one
                  managed communication platform.
                </p>
                <a href="#" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-cup-hot" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Hospitality</h3>
                <p class="industry-desc">
                  Front desk, housekeeping, and guest services on a single
                  always-on line.
                </p>
                <a href="#" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
            <div class="swiper-slide">
              <article class="industry-card">
                <span class="industry-icon">
                  <i class="bi bi-truck" aria-hidden="true"></i>
                </span>
                <h3 class="industry-name">Logistics</h3>
                <p class="industry-desc">
                  Keep depots, drivers, and dispatch in constant contact across
                  every route.
                </p>
                <a href="#" class="industry-link">
                  View Details
                  <span class="industry-arrow" aria-hidden="true"
                    >&#10230;</span
                  >
                </a>
              </article>
            </div>
          </div>
        </div>

        <div class="industries-pagination"></div>
      </div>
    </section>


    <!-- ═══ Testimonials + FAQ (shared glow bg) ═══ -->
    <div class="glow-bg-3">
      <!-- ═══ Testimonials ═══ -->
      <section class="testimonials">
        <div class="container">
          <div class="testimonials-head" data-aos="fade-up">
            <div class="testimonials-intro">
              <span class="testimonials-eyebrow">
                <svg
                  class="title-star"
                  viewBox="0 0 52.1 52.8"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true"
                >
                  <path
                    class="title-star-shape"
                    fill="#2cb6fe"
                    d="M44.5,38.4l-1.1-3-1.1,3c-.8,2.1-2.4,3.8-4.5,4.5l-3,1.1,3,1.1c2.1.8,3.8,2.4,4.5,4.5l1.1,3,1.1-3c.8-2.1,2.4-3.8,4.5-4.5l3-1.1-3-1.1c-2.1-.8-3.8-2.4-4.5-4.5Z"
                  />
                  <path
                    class="title-star-shape"
                    fill="#2eb4fc"
                    d="M28.7,9L25.5.2l-3.2,8.8c-2.3,6.2-7.1,11-13.3,13.3L0,25.6l8.8,3.2c6.2,2.3,11,7.1,13.3,13.3l3.2,8.8,3.2-8.8c2.3-6.2,7.1-11,13.3-13.3l8.8-3.2-8.8-3.2c-6.2-2.3-11-7.1-13.3-13.3Z"
                  />
                </svg>
                Testimonials
              </span>
              <h2 class="testimonials-title">
                Real stories from real customers.
              </h2>
            </div>

            <div class="testimonials-nav">
              <button class="testi-nav testi-prev" aria-label="Previous">
                <i class="bi bi-arrow-left"></i>
              </button>
              <button class="testi-nav testi-next" aria-label="Next">
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>

          <div
            class="swiper swiper-testimonials"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="testimonial-card">
                  <img
                    class="testimonial-media"
                    src="assets/images/testimonial-item-sm-01.jpg"
                    alt=""
                  />
                  <blockquote class="testimonial-quote">
                    &ldquo;Wecom helped us find the perfect solution for our
                    Telecommunication needs.&rdquo;
                  </blockquote>
                  <figcaption class="testimonial-foot">
                    <img
                      class="testimonial-logo"
                      src="assets/images/testimonial-integrity-logo-01.png"
                      alt="InTegrity"
                    />
                    <a href="#" class="testimonial-link">
                      Read full story
                      <span class="testimonial-arrow" aria-hidden="true"
                        >&#10230;</span
                      >
                    </a>
                  </figcaption>
                </figure>
              </div>
              <div class="swiper-slide swiper-slide--wide">
                <figure class="testimonial-card">
                  <img
                    class="testimonial-media"
                    src="assets/images/testimonial-item-lg-01.jpg"
                    alt=""
                  />
                  <blockquote class="testimonial-quote">
                    &ldquo;Wecom helped us find the perfect solution for our
                    Telecommunication needs. Their team of experts helped us
                    move all our information very fast and our services have
                    been 100% stable.&rdquo;
                  </blockquote>
                  <figcaption class="testimonial-foot">
                    <img
                      class="testimonial-logo"
                      src="assets/images/testimonial-integrity-logo-02.png"
                      alt="Dubai Technologies"
                    />
                    <a href="#" class="testimonial-link">
                      Read full story
                      <span class="testimonial-arrow" aria-hidden="true"
                        >&#10230;</span
                      >
                    </a>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php include 'includes/section-faq.php'; ?>
    </div>
    <!-- /.glow-bg-3 -->

<?php
include 'includes/section-cta.php';
include 'includes/footer.php';
