<?php
/**
 * Primary navigation. Shared by every page.
 *
 * Expects (optional):
 *   $navActive  string  key of the menu item to mark current — one of
 *                       home | products | solutions | pricing | industries |
 *                       integrations | about | resources | partners
 */
if (!function_exists('nav_active')) {
    function nav_active(string $key): string
    {
        global $navActive;
        return ($navActive ?? '') === $key ? ' active' : '';
    }
}
?>
    <!-- ═══ Navbar ═══ -->
    <header class="navbar-main">
      <!-- Dims and blurs the page while a dropdown is open -->
      <div class="nav-backdrop" aria-hidden="true"></div>
      <div class="container">
        <!-- Top tier: brand + actions -->
        <div class="navbar-top">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/wecom-logo.png" alt="wecom" />
          </a>

          <div class="navbar-actions">
            <a class="navbar-action" href="#">
              <img src="assets/images/search-icon.png" alt="" />
              <span>AI/Search</span>
            </a>
            <a class="navbar-action" href="#">
              <img src="assets/images/headset-icon.png" alt="" />
              <span>Contact Sales</span>
            </a>
            <span class="navbar-divider"></span>
            <button
              class="theme-toggle"
              type="button"
              aria-label="Toggle theme"
            >
              <i class="bi bi-moon-fill"></i>
            </button>
            <a class="navbar-action navbar-lang" href="#">
              <span>En</span>
              <i class="bi bi-chevron-down"></i>
            </a>

            <button
              class="navbar-toggler"
              type="button"
              aria-label="Toggle navigation"
              aria-controls="primaryNav"
              aria-expanded="false"
            >
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>

        <!-- Bottom tier: primary menu -->
        <!-- Dropdown panels: icons are Bootstrap Icons stand-ins and every
             feature card points at one placeholder image — both are meant to be
             swapped for the final artwork. -->
        <nav class="navbar-menu" id="primaryNav" aria-label="Primary">
          <!-- Drawer only: the panel slides over the bar, so the hamburger
               ends up behind it and cannot serve as the close control -->
          <div class="navbar-drawer-head">
            <img
              class="navbar-drawer-logo"
              src="assets/images/wecom-logo.png"
              alt="wecom"
            />
            <button
              class="navbar-drawer-close"
              type="button"
              aria-label="Close navigation"
            >
              <i class="bi bi-x-lg" aria-hidden="true"></i>
            </button>
          </div>

          <!-- data-lenis-prevent: Lenis listens for touchmove on the whole
               document and, while stopped, preventDefaults every one of them —
               which kills native scrolling inside this panel too. The attribute
               makes Lenis bail out for gestures that start in here, so the
               drawer scrolls itself while the page behind stays locked. -->
          <div class="navbar-menu-inner" data-lenis-prevent>
            <ul class="navbar-nav navbar-nav-left">
              <li>
                <a class="nav-link<?= nav_active('home') ?>" href="index.php">
                  <i class="nav-link-icon bi bi-house" aria-hidden="true"></i>
                  <span class="nav-link-label">Home</span>
                </a>
              </li>

              <li class="has-mega">
                <a
                  class="nav-link<?= nav_active('products') ?>"
                  href="#"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="mega-products"
                >
                  <i class="nav-link-icon bi bi-grid" aria-hidden="true"></i>
                  <span class="nav-link-label">Products</span>
                  <i
                    class="nav-chevron bi bi-chevron-down"
                    aria-hidden="true"
                  ></i>
                </a>
                <div class="mega" id="mega-products">
                  <div class="mega-inner">
                    <div class="mega-links">
                      <p class="mega-label">Platform</p>
                      <div class="mega-list mega-list-2col" style="--rows: 5">
                        <a class="mega-link" href="ai-contact-center.php">
                          <span class="mega-link-icon"
                            ><i class="bi bi-robot"></i
                          ></span>
                          <span class="mega-link-text">AI Contact Center</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-cloud-check"></i
                          ></span>
                          <span class="mega-link-text"
                            >Cloud Telephony / Virtual PBX</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-telephone-outbound"></i
                          ></span>
                          <span class="mega-link-text"
                            >Agent Calls / Business Calling</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-chat-dots"></i
                          ></span>
                          <span class="mega-link-text"
                            >Omnichannel Communications</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-camera-video"></i
                          ></span>
                          <span class="mega-link-text">Video Conferencing</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-people"></i
                          ></span>
                          <span class="mega-link-text">Meeting Platform</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-plugin"></i
                          ></span>
                          <span class="mega-link-text"
                            >Integrations &amp; APIs</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-record-circle"></i
                          ></span>
                          <span class="mega-link-text"
                            >Recording &amp; Billing</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-graph-up-arrow"></i
                          ></span>
                          <span class="mega-link-text"
                            >Reporting &amp; Analytics</span
                          >
                        </a>
                      </div>
                    </div>

                    <div class="mega-feature">
                      <p class="mega-label">Featured</p>
                      <a class="mega-card" href="#">
                        <span class="mega-card-media">
                          <img
                            src="assets/images/testimonial-item-lg-01.jpg"
                            alt=""
                          />
                        </span>
                        <span class="mega-card-title"
                          >One platform, every conversation</span
                        >
                        <span class="mega-card-text">
                          Calls, chat, video and analytics run on the same cloud
                          stack — no separate vendors to stitch together.
                        </span>
                        <span class="mega-card-link">
                          Explore the platform
                          <i class="bi bi-arrow-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="has-mega">
                <a
                  class="nav-link<?= nav_active('solutions') ?>"
                  href="#"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="mega-solutions"
                >
                  <i
                    class="nav-link-icon bi bi-lightbulb"
                    aria-hidden="true"
                  ></i>
                  <span class="nav-link-label">Solutions</span>
                  <i
                    class="nav-chevron bi bi-chevron-down"
                    aria-hidden="true"
                  ></i>
                </a>
                <div class="mega" id="mega-solutions">
                  <div class="mega-inner">
                    <div class="mega-links">
                      <p class="mega-label">By need</p>
                      <div class="mega-list mega-list-2col" style="--rows: 3">
                        <a class="mega-link" href="customer-support-solutions.php">
                          <span class="mega-link-icon"
                            ><i class="bi bi-headset"></i
                          ></span>
                          <span class="mega-link-text">Customer Support</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-megaphone"></i
                          ></span>
                          <span class="mega-link-text"
                            >Sales &amp; Outbound</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-laptop"></i
                          ></span>
                          <span class="mega-link-text">Remote Workforce</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-diagram-3"></i
                          ></span>
                          <span class="mega-link-text"
                            >Enterprise Collaboration</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-building"></i
                          ></span>
                          <span class="mega-link-text"
                            >Multi-Branch Communication</span
                          >
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-emoji-smile"></i
                          ></span>
                          <span class="mega-link-text"
                            >Customer Experience</span
                          >
                        </a>
                      </div>
                    </div>

                    <div class="mega-feature">
                      <p class="mega-label">Featured</p>
                      <a class="mega-card" href="#">
                        <span class="mega-card-media">
                          <img
                            src="assets/images/testimonial-item-lg-01.jpg"
                            alt=""
                          />
                        </span>
                        <span class="mega-card-title"
                          >Built around how your team works</span
                        >
                        <span class="mega-card-text">
                          Route, record and report on every conversation,
                          whether the team sits in one office or six.
                        </span>
                        <span class="mega-card-link">
                          See all solutions
                          <i class="bi bi-arrow-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <a class="nav-link<?= nav_active('pricing') ?>" href="#">
                  <i class="nav-link-icon bi bi-tag" aria-hidden="true"></i>
                  <span class="nav-link-label">Pricing</span>
                </a>
              </li>

              <?php /* Industries — hidden from the main menu for now
              <li class="has-mega">
                <a
                  class="nav-link<?= nav_active('industries') ?>"
                  href="#"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="mega-industries"
                >
                  <i
                    class="nav-link-icon bi bi-buildings"
                    aria-hidden="true"
                  ></i>
                  <span class="nav-link-label">Industries</span>
                  <i
                    class="nav-chevron bi bi-chevron-down"
                    aria-hidden="true"
                  ></i>
                </a>
                <div class="mega" id="mega-industries">
                  <div class="mega-inner">
                    <div class="mega-links">
                      <p class="mega-label">By industry</p>
                      <div class="mega-list mega-list-2col" style="--rows: 4">
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-bank"></i
                          ></span>
                          <span class="mega-link-text"
                            >Banking &amp; Finance</span
                          >
                        </a>
                        <a class="mega-link" href="healthcare.php">
                          <span class="mega-link-icon"
                            ><i class="bi bi-heart-pulse"></i
                          ></span>
                          <span class="mega-link-text">Healthcare</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-bag"></i
                          ></span>
                          <span class="mega-link-text">Retail</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-buildings"></i
                          ></span>
                          <span class="mega-link-text">Government</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-mortarboard"></i
                          ></span>
                          <span class="mega-link-text">Education</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-cup-hot"></i
                          ></span>
                          <span class="mega-link-text">Hospitality</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-truck"></i
                          ></span>
                          <span class="mega-link-text">Logistics</span>
                        </a>
                      </div>
                    </div>

                    <div class="mega-feature">
                      <p class="mega-label">Featured</p>
                      <a class="mega-card" href="#">
                        <span class="mega-card-media">
                          <img
                            src="assets/images/testimonial-item-lg-01.jpg"
                            alt=""
                          />
                        </span>
                        <span class="mega-card-title"
                          >Deployed across Oman's key sectors</span
                        >
                        <span class="mega-card-text">
                          Compliance, uptime and support expectations differ by
                          sector — the rollout is shaped to match.
                        </span>
                        <span class="mega-card-link">
                          Industries we serve
                          <i class="bi bi-arrow-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              */ ?>

              <li>
                <a class="nav-link<?= nav_active('integrations') ?>" href="#">
                  <i class="nav-link-icon bi bi-plugin" aria-hidden="true"></i>
                  <span class="nav-link-label">Integrations</span>
                </a>
              </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">
              <li class="has-mega">
                <a
                  class="nav-link<?= nav_active('about') ?>"
                  href="#"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="mega-about"
                >
                  <i
                    class="nav-link-icon bi bi-info-circle"
                    aria-hidden="true"
                  ></i>
                  <span class="nav-link-label">About</span>
                  <i
                    class="nav-chevron bi bi-chevron-down"
                    aria-hidden="true"
                  ></i>
                </a>
                <div class="mega mega-end" id="mega-about">
                  <div class="mega-inner">
                    <div class="mega-links">
                      <p class="mega-label">Company</p>
                      <div class="mega-list">
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-info-circle"></i
                          ></span>
                          <span class="mega-link-text">About Wecom</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-briefcase"></i
                          ></span>
                          <span class="mega-link-text">Careers</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-people"></i
                          ></span>
                          <span class="mega-link-text">Partners</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-envelope"></i
                          ></span>
                          <span class="mega-link-text">Contact</span>
                        </a>
                      </div>
                    </div>

                    <div class="mega-feature">
                      <p class="mega-label">Featured</p>
                      <a class="mega-card" href="#">
                        <span class="mega-card-media">
                          <img
                            src="assets/images/testimonial-item-lg-01.jpg"
                            alt=""
                          />
                        </span>
                        <span class="mega-card-title"
                          >Local team, local SLAs</span
                        >
                        <span class="mega-card-text">
                          Engineers based in Muscat, with survey, install and
                          support handled by the same people.
                        </span>
                        <span class="mega-card-link">
                          Meet the team
                          <i class="bi bi-arrow-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="has-mega">
                <a
                  class="nav-link<?= nav_active('resources') ?>"
                  href="#"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="mega-resources"
                >
                  <i
                    class="nav-link-icon bi bi-journal-text"
                    aria-hidden="true"
                  ></i>
                  <span class="nav-link-label">Resources</span>
                  <i
                    class="nav-chevron bi bi-chevron-down"
                    aria-hidden="true"
                  ></i>
                </a>
                <div class="mega mega-end" id="mega-resources">
                  <div class="mega-inner">
                    <div class="mega-links">
                      <p class="mega-label">Library</p>
                      <div class="mega-list">
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-journal-text"></i
                          ></span>
                          <span class="mega-link-text">Blog</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-file-earmark-text"></i
                          ></span>
                          <span class="mega-link-text">Case Studies</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-question-circle"></i
                          ></span>
                          <span class="mega-link-text">FAQs</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-book"></i
                          ></span>
                          <span class="mega-link-text">Guides</span>
                        </a>
                        <a class="mega-link" href="#">
                          <span class="mega-link-icon"
                            ><i class="bi bi-stars"></i
                          ></span>
                          <span class="mega-link-text">Product Updates</span>
                        </a>
                      </div>
                    </div>

                    <div class="mega-feature">
                      <p class="mega-label">Featured</p>
                      <a class="mega-card" href="#">
                        <span class="mega-card-media">
                          <img
                            src="assets/images/testimonial-item-lg-01.jpg"
                            alt=""
                          />
                        </span>
                        <span class="mega-card-title"
                          >What a PBX migration actually costs</span
                        >
                        <span class="mega-card-text">
                          A line-by-line breakdown of moving a 200-seat office
                          off legacy hardware.
                        </span>
                        <span class="mega-card-link">
                          Read the guide
                          <i class="bi bi-arrow-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <a class="nav-link<?= nav_active('partners') ?>" href="#">
                  <i class="nav-link-icon bi bi-people" aria-hidden="true"></i>
                  <span class="nav-link-label">Partners</span>
                </a>
              </li>
              <li>
                <a class="btn-demo" href="#">Book a Demo</a>
              </li>
            </ul>

            <!-- Drawer only: the utility actions dropped from the top bar at
               narrow widths still need somewhere to live -->
            <div class="navbar-drawer-foot">
              <a class="drawer-action" href="#">
                <i class="bi bi-search" aria-hidden="true"></i>
                <span>AI / Search</span>
              </a>
              <a class="drawer-action" href="#">
                <i class="bi bi-headset" aria-hidden="true"></i>
                <span>Contact Sales</span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
