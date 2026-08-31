// ─── Smooth scroll (Lenis) ───────────────────────────────────────────────────
const lenis = new Lenis();
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Lock scrolling while the preloader is present
if (document.querySelector(".loader-overlay")) {
  document.documentElement.classList.add("is-preloading");
  lenis.stop();
  lenis.scrollTo(0, { immediate: true });
} else {
  document.documentElement.classList.remove("is-preloading");
}

function unlockScroll() {
  document.documentElement.classList.remove("is-preloading");
  lenis.start();
}

// ─── Preloader (curved sheet — logo exits, the sheet peels up off the page) ───
(function () {
  var loaderOverlay = document.querySelector(".loader-overlay");
  if (!loaderOverlay) return;

  var dismissed = false;

  function dismiss() {
    if (dismissed) return;
    dismissed = true;

    loaderOverlay.classList.add("loaded");
    unlockScroll();

    // 0.1s delay + 1.1s sheet lift, with the logo fading out underneath it
    setTimeout(function () {
      loaderOverlay.style.display = "none";
      document.dispatchEvent(new Event("preloader:done"));
    }, 1300);
  }

  // Keep the loader up for a short minimum, then dismiss on load
  window.addEventListener("load", function () {
    setTimeout(dismiss, 900);
  });

  if (document.readyState === "complete") {
    setTimeout(dismiss, 900);
  }

  // Fallback — never trap the user if the load event is missed
  setTimeout(dismiss, 8000);
})();

// ─── Page transition (inner pages) ───────────────────────────────────────────
//
// Pages without the preloader fade in from the stylesheet on their own. This
// only handles the way out — which every page gets, the home page included, so
// leaving it for an inner page is the same short fade: hold the current page on
// screen for the length of that fade, then let the browser follow the link.
(function () {
  var root = document.documentElement;

  var FADE_MS = 220;
  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  var leaving = false;

  // Restored from the back/forward cache the page keeps whatever classes it had
  // when it was frozen — clear the exit state so it does not come back blank.
  window.addEventListener("pageshow", function (e) {
    if (e.persisted) {
      leaving = false;
      root.classList.remove("is-leaving");
    }
  });

  document.addEventListener("click", function (e) {
    if (leaving || reduceMotion.matches) return;
    if (e.defaultPrevented || e.button !== 0) return;
    if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

    var link = e.target.closest("a");
    if (!link || !link.href || link.hasAttribute("download")) return;
    if (link.target && link.target !== "_self") return;

    // Anything that is not a plain navigation to another page here — in-page
    // anchors, mailto:, tel:, external sites — is left to the browser
    var url = new URL(link.href, location.href);
    if (url.origin !== location.origin) return;
    if (url.protocol !== "http:" && url.protocol !== "https:") return;
    if (url.pathname === location.pathname && url.search === location.search) {
      return;
    }

    e.preventDefault();
    leaving = true;
    root.classList.add("is-leaving");

    setTimeout(function () {
      location.href = link.href;
    }, FADE_MS);
  });
})();

// ─── Mobile nav toggle ───────────────────────────────────────────────────────
var navToggler = document.querySelector(".navbar-toggler");
var navMenu = document.getElementById("primaryNav");
if (navToggler && navMenu) {
  var navHeader = document.querySelector(".navbar-main");
  var navClose = navMenu.querySelector(".navbar-drawer-close");

  function navIsOpen() {
    return navMenu.classList.contains("is-open");
  }

  function setNavOpen(open) {
    if (open === navIsOpen()) return;

    navMenu.classList.toggle("is-open", open);
    navToggler.classList.toggle("is-open", open);
    navToggler.setAttribute("aria-expanded", open);
    // The bar has no background at the top of the page; an open drawer needs one
    if (navHeader) navHeader.classList.toggle("is-nav-open", open);

    // The drawer scrolls internally; letting the page scroll behind it drags
    // the whole thing off screen. Lenis owns scrolling here, so it does the
    // locking — toggling overflow on <body> would fight it.
    if (open) {
      lenis.stop();
    } else {
      lenis.start();
    }

    // The panel now covers the page rather than pushing it down, so focus has
    // to move with it — otherwise tabbing runs off into the hidden page behind.
    // The class was only just set, and until styles are recalculated the panel
    // is still visibility: hidden, which makes focus() a silent no-op — so read
    // a layout property first to force the flush. (A rAF callback would also
    // work, but it never runs while the tab is backgrounded.)
    if (open) {
      void navMenu.offsetWidth;
      if (navClose) navClose.focus();
    } else {
      navToggler.focus();
    }
  }

  if (navClose) {
    navClose.addEventListener("click", function () {
      setNavOpen(false);
    });
  }

  navToggler.addEventListener("click", function () {
    setNavOpen(!navIsOpen());
  });

  document.addEventListener("keydown", function (e) {
    if (!navIsOpen()) return;

    if (e.key === "Escape") {
      setNavOpen(false);
      return;
    }

    // Keep Tab inside the open panel — it is a modal surface now
    if (e.key !== "Tab") return;

    // Collapsed accordions are visibility: hidden, so the browser already skips
    // their links — but querySelectorAll still returns them, and taking first
    // and last from the raw list picks stops the user can never reach
    var focusable = Array.prototype.filter.call(
      navMenu.querySelectorAll(
        'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])',
      ),
      function (el) {
        return el.offsetParent !== null && getComputedStyle(el).visibility !== "hidden";
      },
    );
    if (!focusable.length) return;

    var first = focusable[0];
    var last = focusable[focusable.length - 1];

    if (e.shiftKey && document.activeElement === first) {
      e.preventDefault();
      last.focus();
    } else if (!e.shiftKey && document.activeElement === last) {
      e.preventDefault();
      first.focus();
    }
  });

  // Tapping the dimmed page outside the drawer is the other way people expect
  // to dismiss it
  document.addEventListener("click", function (e) {
    if (!navIsOpen()) return;
    if (navMenu.contains(e.target) || navToggler.contains(e.target)) return;
    setNavOpen(false);
  });

  // The drawer only exists below the breakpoint; leaving it "open" on the way
  // up would keep scrolling locked with nothing on screen to explain it
  var navWide = window.matchMedia("(min-width: 992px)");
  navWide.addEventListener("change", function () {
    if (navWide.matches) setNavOpen(false);
  });

  navMenu.querySelectorAll(".nav-link").forEach(function (link) {
    // A dropdown parent expands its own accordion inside the drawer — closing
    // the whole drawer on that click would make those sections unreachable
    if (link.closest(".has-mega")) return;

    link.addEventListener("click", function () {
      setNavOpen(false);
    });
  });

  // A leaf link inside an open accordion still navigates, so the drawer closes
  navMenu.querySelectorAll(".mega-link").forEach(function (link) {
    link.addEventListener("click", function () {
      setNavOpen(false);
    });
  });
}

// ─── Mega menu ───────────────────────────────────────────────────────────────
// Hover opens on pointer devices; click toggles everywhere, which is what makes
// it usable on touch (where hover fires once and then sticks). Closing is
// delayed so a diagonal run from the trigger to the far corner of the panel
// does not drop the menu on the way.
(function () {
  var header = document.querySelector(".navbar-main");
  var items = document.querySelectorAll(".has-mega");
  if (!header || !items.length) return;

  var CLOSE_DELAY = 160;
  // Matches the breakpoint where the stylesheet withholds the panels
  var wide = window.matchMedia("(min-width: 992px)");
  var openItem = null;
  var closeTimer = null;
  // Set while Escape hands focus back to the trigger, so the focusin that
  // follows does not reopen the panel that was just dismissed
  var restoringFocus = false;

  function trigger(item) {
    return item.querySelector(".nav-link");
  }

  function collapse(item) {
    item.classList.remove("is-open");
    trigger(item).setAttribute("aria-expanded", "false");
  }

  function setOpen(item) {
    if (openItem === item) return;
    if (openItem) collapse(openItem);
    openItem = item;

    if (!item) {
      header.classList.remove("has-open-mega");
      return;
    }

    item.classList.add("is-open");
    trigger(item).setAttribute("aria-expanded", "true");
    // Below the breakpoint the panel is an accordion inside the drawer, with
    // nothing behind it to dim
    if (wide.matches) header.classList.add("has-open-mega");
  }

  function closeAll() {
    clearTimeout(closeTimer);
    setOpen(null);
  }

  function scheduleClose() {
    clearTimeout(closeTimer);
    closeTimer = setTimeout(closeAll, CLOSE_DELAY);
  }

  Array.prototype.forEach.call(items, function (item) {
    item.addEventListener("mouseenter", function () {
      if (!wide.matches) return;
      clearTimeout(closeTimer);
      setOpen(item);
    });

    item.addEventListener("mouseleave", function () {
      if (!wide.matches) return;
      scheduleClose();
    });

    // The trigger is an <a href="#"> for styling reasons, so it has to be
    // stopped from jumping to the top of the page on every open. This is the
    // only opener below the breakpoint, where the panel acts as an accordion.
    trigger(item).addEventListener("click", function (e) {
      e.preventDefault();
      clearTimeout(closeTimer);
      setOpen(openItem === item ? null : item);
    });

    // Tabbing to the trigger counts as opening it. Gated on :focus-visible so
    // it only fires for keyboard focus — a tap focuses the link too, and
    // opening here would let the click handler below close it again in the
    // same gesture, leaving touch unable to open the menu at all.
    item.addEventListener("focusin", function (e) {
      if (!wide.matches || restoringFocus) return;
      if (e.target.matches && !e.target.matches(":focus-visible")) return;
      clearTimeout(closeTimer);
      setOpen(item);
    });

    // Only on the bar — inside the drawer an open accordion should stay put
    item.addEventListener("focusout", function (e) {
      if (!wide.matches) return;
      if (!e.relatedTarget || !item.contains(e.relatedTarget)) scheduleClose();
    });
  });

  document.addEventListener("keydown", function (e) {
    if (e.key !== "Escape" || !openItem) return;
    var returnTo = trigger(openItem);
    closeAll();
    restoringFocus = true;
    returnTo.focus();
    restoringFocus = false;
  });

  document.addEventListener("click", function (e) {
    if (openItem && !openItem.contains(e.target)) closeAll();
  });

  // A panel left hanging over scrolled-away content reads as stuck
  window.addEventListener("scroll", function () {
    if (openItem) closeAll();
  });

  // Crossing the breakpoint changes what an open panel even is, so reset
  wide.addEventListener("change", closeAll);
})();

// ─── Navbar fixed on scroll ──────────────────────────────────────────────────
var stickyNav = document.querySelector(".navbar-main");
if (stickyNav) {
  window.addEventListener("scroll", function () {
    var scroll = window.pageYOffset || document.documentElement.scrollTop;
    stickyNav.classList.toggle("navbar-fixed", scroll >= 10);
  });
}

// ─── FAQ accordion ───────────────────────────────────────────────────────────
// One panel open at a time. The panel heights are handled in CSS (0fr/1fr
// rows), so this only has to keep the open class and aria-expanded in step.
(function () {
  var faqList = document.querySelector(".faq-list");
  if (!faqList) return;

  faqList.addEventListener("click", function (e) {
    var trigger = e.target.closest(".faq-trigger");
    if (!trigger) return;

    var item = trigger.closest(".faq-item");
    var opening = !item.classList.contains("is-open");

    faqList.querySelectorAll(".faq-item").forEach(function (other) {
      other.classList.remove("is-open");
      other
        .querySelector(".faq-trigger")
        .setAttribute("aria-expanded", "false");
    });

    // Clicking the open one closes it, leaving the group collapsed
    if (opening) {
      item.classList.add("is-open");
      trigger.setAttribute("aria-expanded", "true");
    }
  });
})();

// ─── Footer year ─────────────────────────────────────────────────────────────
// Markup carries a real year so the page reads correctly without JS; this only
// keeps it from going stale.
document.querySelectorAll(".year").forEach(function (el) {
  el.textContent = new Date().getFullYear();
});

// ─── Scroll to top ───────────────────────────────────────────────────────────
var returnTopButton = document.getElementById("return-top");
if (returnTopButton) {
  var progressCircle = returnTopButton.querySelector(
    ".return-top-ring-progress",
  );
  var ringLength = 0;
  if (progressCircle) {
    ringLength = progressCircle.getTotalLength();
    progressCircle.style.strokeDasharray = ringLength;
    progressCircle.style.strokeDashoffset = ringLength;
  }

  function updateReturnTop() {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    var docHeight = document.documentElement.scrollHeight - window.innerHeight;
    var progress = docHeight > 0 ? scrollTop / docHeight : 0;

    returnTopButton.style.opacity = scrollTop >= 50 ? "1" : "0";

    if (progressCircle) {
      progressCircle.style.strokeDashoffset = ringLength * (1 - progress);
    }
  }

  window.addEventListener("scroll", updateReturnTop);
  updateReturnTop();

  returnTopButton.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

// ─── Hero half-circle: rounded progress-bar reveal ───────────────────────────
function revealArc(el, delay, duration) {
  var startTime = null;

  function arcStep() {
    if (startTime === null) startTime = Date.now();
    var t = Date.now() - startTime - delay;
    var progress = Math.max(0, Math.min(1, t / duration));
    var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
    el.style.setProperty("--arc", (eased * 360).toFixed(1) + "deg");
    if (progress < 1) requestAnimationFrame(arcStep);
  }
  requestAnimationFrame(arcStep);
}

function revealHeroArcs() {
  var arcFull = document.querySelector(".hero-circle");
  if (arcFull) revealArc(arcFull, 200, 1600);

  var arcHalf = document.querySelector(".hero-half-circle");
  if (arcHalf) revealArc(arcHalf, 400, 1400);
}

if (document.querySelector(".loader-overlay")) {
  document.addEventListener("preloader:done", revealHeroArcs, { once: true });
} else {
  revealHeroArcs();
}

// The gradient sweep on the half-circle is an SVG animation, so the
// reduced-motion rules in the stylesheet cannot reach it — stop it here instead.
if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  var sweepArc = document.querySelector(".hero-half-circle");
  if (sweepArc && sweepArc.pauseAnimations) sweepArc.pauseAnimations();
}

// ─── Fact counters ───────────────────────────────────────────────────────────
// Each digit becomes a vertical strip of numerals that slides into place, so
// the figures roll up like an odometer rather than ticking through values.
// Digits nearer the right spin through more turns, which is how a real counter
// behaves — the ones column travels furthest. Non-digits (+, /, ., %) sit still.
(function () {
  var numbers = document.querySelectorAll(".fact-number");
  if (!numbers.length) return;

  var still = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function build(el) {
    var text = (el.getAttribute("data-count") || el.textContent).trim();
    var digitCount = text.replace(/\D/g, "").length;

    el.textContent = "";
    var reels = [];
    var seen = 0;

    for (var i = 0; i < text.length; i++) {
      var ch = text.charAt(i);

      if (ch < "0" || ch > "9") {
        var sym = document.createElement("span");
        sym.className = "fact-sym";
        sym.textContent = ch;
        el.appendChild(sym);
        continue;
      }

      // Columns further right make more revolutions before settling
      var fromRight = digitCount - 1 - seen;
      var turns = Math.max(1, 3 - fromRight);
      var target = Number(ch);

      var strip = "";
      for (var t = 0; t < turns; t++) {
        for (var d = 0; d <= 9; d++) strip += "<span>" + d + "</span>";
      }
      for (var d2 = 0; d2 <= target; d2++) strip += "<span>" + d2 + "</span>";

      var slot = document.createElement("span");
      slot.className = "fact-digit";
      var reel = document.createElement("span");
      reel.className = "fact-reel";
      reel.innerHTML = strip;
      // Later columns settle last, so the number reads as it lands
      reel.style.transitionDelay = seen * 90 + "ms";
      slot.appendChild(reel);
      el.appendChild(slot);

      reels.push({ reel: reel, step: turns * 10 + target });
      seen++;
    }

    return reels;
  }

  function roll(el) {
    var reels = build(el);
    if (still) {
      reels.forEach(function (r) {
        r.reel.style.setProperty("--step", r.step);
      });
      return;
    }
    // Let the strips paint at rest before the transition is given a target
    requestAnimationFrame(function () {
      requestAnimationFrame(function () {
        reels.forEach(function (r) {
          r.reel.style.setProperty("--step", r.step);
        });
      });
    });
  }

  if (!("IntersectionObserver" in window)) {
    numbers.forEach(roll);
    return;
  }

  var watcher = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        watcher.unobserve(entry.target); // runs once
        roll(entry.target);
      });
    },
    { threshold: 0.4 },
  );

  numbers.forEach(function (el) {
    watcher.observe(el);
  });
})();

// ─── Hero mouse-parallax float ───────────────────────────────────────────────
// Each element drifts opposite the cursor; bigger `depth` = closer/faster.
var heroEl = document.querySelector(".hero");
if (heroEl) {
  var floatLayers = [
    { el: document.querySelector(".hero-half-circle"), depth: 20 },
    { el: document.querySelector(".hero-birds"), depth: 32 },
    { el: document.querySelector(".hero-glitter-card"), depth: 46 },
  ].filter(function (layer) {
    return layer.el;
  });

  heroEl.addEventListener("mousemove", function (e) {
    var rect = heroEl.getBoundingClientRect();
    var nx = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 … 0.5
    var ny = (e.clientY - rect.top) / rect.height - 0.5;
    floatLayers.forEach(function (layer) {
      layer.el.style.setProperty("--px", (-nx * layer.depth).toFixed(1) + "px");
      layer.el.style.setProperty("--py", (-ny * layer.depth).toFixed(1) + "px");
    });
  });

  heroEl.addEventListener("mouseleave", function () {
    floatLayers.forEach(function (layer) {
      layer.el.style.setProperty("--px", "0px");
      layer.el.style.setProperty("--py", "0px");
    });
  });
}

// ─── Inside pages: detail artwork wipes in on scroll ─────────────────────────
// AOS only fades and slides, and these panels open with a curtain instead, so
// the trigger is its own observer. Everything the reveal looks like lives in
// the stylesheet — all that happens here is the class going on, once.
(function () {
  var panels = document.querySelectorAll(".feature-media");
  if (!panels.length) return;

  function reveal(el) {
    el.classList.add("is-revealed");
  }

  // No motion wanted, or nothing to observe with: show them as they are
  if (
    window.matchMedia("(prefers-reduced-motion: reduce)").matches ||
    !("IntersectionObserver" in window)
  ) {
    panels.forEach(reveal);
    return;
  }

  var watcher = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        watcher.unobserve(entry.target); // runs once
        reveal(entry.target);
      });
    },
    { threshold: 0.25 },
  );

  panels.forEach(function (el) {
    watcher.observe(el);
  });
})();

// ─── Inside-page hero: same float, driven off a class ────────────────────────
// The interior heroes each stack a different set of pieces, so rather than
// naming them one by one they opt in with .hero-inside-float. Depth rises with
// each piece in source order, which puts the ring furthest back and whatever is
// nearest the front — the small cards — moving most.
var heroInsideEl = document.querySelector(".hero-inside");
if (heroInsideEl) {
  var insideLayers = Array.prototype.slice.call(
    heroInsideEl.querySelectorAll(".hero-inside-float"),
  );

  if (insideLayers.length) {
    heroInsideEl.addEventListener("mousemove", function (e) {
      var rect = heroInsideEl.getBoundingClientRect();
      var nx = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 … 0.5
      var ny = (e.clientY - rect.top) / rect.height - 0.5;
      insideLayers.forEach(function (el, i) {
        var depth = 18 + i * 12;
        el.style.setProperty("--px", (-nx * depth).toFixed(1) + "px");
        el.style.setProperty("--py", (-ny * depth).toFixed(1) + "px");
      });
    });

    heroInsideEl.addEventListener("mouseleave", function () {
      insideLayers.forEach(function (el) {
        el.style.setProperty("--px", "0px");
        el.style.setProperty("--py", "0px");
      });
    });
  }
}

// ─── Hero banner slider ──────────────────────────────────────────────────────
const swiperBanner = new Swiper(".swiper-banner", {
  loop: true,
  speed: 1200,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// ─── Integrations marquee (seamless dual-direction scroll) ────────────────────
// Each track holds one set of logos. Widen it to cover the viewport, then
// duplicate the whole thing once so the -50% CSS animation loops seamlessly.
document.querySelectorAll(".marquee-track").forEach(function (track) {
  var baseItems = Array.prototype.slice.call(track.children);

  // Repeat the base set until one "set" is comfortably wider than the
  // visible marquee (the container-width .marquee that clips it)
  var visibleWidth = track.parentElement.clientWidth;
  while (track.scrollWidth < visibleWidth * 1.3) {
    baseItems.forEach(function (item) {
      track.appendChild(item.cloneNode(true));
    });
  }

  // Duplicate the full set once — the second half is what scrolls into view
  Array.prototype.slice.call(track.children).forEach(function (item) {
    track.appendChild(item.cloneNode(true));
  });
});

// Duplicate a slider's slides until it has at least `min` of them, so loop +
// autoplay have enough to scroll continuously.
function cloneSlidesToMin(rootEl, min) {
  var wrapper = rootEl.querySelector(".swiper-wrapper");
  var base = Array.prototype.slice.call(wrapper.children);
  if (!base.length) return;
  while (wrapper.children.length < min) {
    base.forEach(function (slide) {
      if (wrapper.children.length < min) {
        wrapper.appendChild(slide.cloneNode(true));
      }
    });
  }
}

// ─── Solutions (one slider, tabs jump to the matching slide) ──────────────────
var solutionsEl = document.querySelector(".swiper-solutions");
if (solutionsEl) {
  var solTabs = document.querySelectorAll(".solutions-tab");

  // Values are min-width, so the bare ones are the phone case. The peek shrinks
  // as the viewport does — at 1.5 per view a phone would show two half cards
  // and no whole one.
  var swiperSolutions = new Swiper(solutionsEl, {
    loop: true,
    speed: 600,
    centeredSlides: true,
    slidesPerView: 1.05,
    spaceBetween: 16,
    breakpoints: {
      576: { slidesPerView: 1.12, spaceBetween: 20 },
      768: { slidesPerView: 1.2, spaceBetween: 24 },
      992: { slidesPerView: 1.35, spaceBetween: 28 },
      1200: { slidesPerView: 1.5, spaceBetween: 30 },
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });

  // Click a tab → go to its slide
  solTabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      swiperSolutions.slideToLoop(Number(tab.dataset.tab));
    });
  });

  // Keep the active tab in sync with the current slide
  swiperSolutions.on("slideChange", function () {
    var i = swiperSolutions.realIndex;
    solTabs.forEach(function (tab) {
      var on = Number(tab.dataset.tab) === i;
      tab.classList.toggle("is-active", on);
      tab.setAttribute("aria-selected", on);

      // Below 992 the tabs are a scroll strip, so the active one has to be
      // brought into view or the row stops reflecting the slider.
      //
      // Scroll the strip itself rather than calling tab.scrollIntoView():
      // that walks every scrollable ancestor including the document, so on a
      // phone — where this branch is live because the strip overflows — the
      // autoplay's first slideChange dragged the whole page down to this
      // section a few seconds after load. Nudging scrollLeft touches nothing
      // outside the strip. Offsets come from rects because the strip is not a
      // positioned ancestor, which makes offsetLeft unreliable here.
      var strip = tab.parentElement;
      if (on && strip.scrollWidth > strip.clientWidth) {
        var stripBox = strip.getBoundingClientRect();
        var tabBox = tab.getBoundingClientRect();
        var delta =
          tabBox.left + tabBox.width / 2 - (stripBox.left + stripBox.width / 2);
        strip.scrollBy({ left: delta, behavior: "smooth" });
      }
    });
  });
}

// ─── Testimonials slider (variable-width slides) ─────────────────────────────
var testimonialsEl = document.querySelector(".swiper-testimonials");
if (testimonialsEl) {
  cloneSlidesToMin(testimonialsEl, 4);
  new Swiper(testimonialsEl, {
    loop: true,
    speed: 700,
    slidesPerView: "auto",
    spaceBetween: 24,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    navigation: {
      prevEl: ".testi-prev",
      nextEl: ".testi-next",
    },
  });
}

// ─── Industries slider ───────────────────────────────────────────────────────
var industriesEl = document.querySelector(".swiper-industries");
if (industriesEl) {
  cloneSlidesToMin(industriesEl, 6);
  new Swiper(industriesEl, {
    loop: true,
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 24,
    breakpoints: {
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".industries-pagination",
      clickable: true,
    },
  });
}

// ─── Drawn-background motion (industries, contact CTA) ───────────────────────
// Drives any [data-bg-motion] host that holds a .bg-parallax layer. Two offsets
// are written onto the layer and picked up from there by the stylesheet. The
// pointer one works like the hero float — the curves lag behind the cursor. The
// scroll one stands in for the background-attachment: fixed those backgrounds
// used to have: the artwork drifts down as its host travels up, so it still
// reads as sitting behind the page.
(function () {
  var hosts = document.querySelectorAll("[data-bg-motion]");
  if (!hosts.length) return;
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  var POINTER_DEPTH = 22;
  var SCROLL_DEPTH = 46;

  var tracked = [];

  Array.prototype.forEach.call(hosts, function (host) {
    var layer = host.querySelector(".bg-parallax");
    if (!layer) return;

    tracked.push({ host: host, layer: layer });

    host.addEventListener("mousemove", function (e) {
      var rect = host.getBoundingClientRect();
      var nx = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 … 0.5
      var ny = (e.clientY - rect.top) / rect.height - 0.5;
      layer.style.setProperty("--px", (-nx * POINTER_DEPTH).toFixed(1) + "px");
      layer.style.setProperty("--py", (-ny * POINTER_DEPTH).toFixed(1) + "px");
    });

    host.addEventListener("mouseleave", function () {
      layer.style.setProperty("--px", "0px");
      layer.style.setProperty("--py", "0px");
    });
  });

  if (!tracked.length) return;

  var ticking = false;

  function updateDrift() {
    ticking = false;
    tracked.forEach(function (item) {
      var rect = item.host.getBoundingClientRect();
      if (rect.bottom < 0 || rect.top > window.innerHeight) return;

      // -1 … 1 as the host crosses the viewport centre
      var centre = rect.top + rect.height / 2;
      var progress = (window.innerHeight / 2 - centre) / window.innerHeight;
      progress = Math.max(-1, Math.min(1, progress));
      item.layer.style.setProperty(
        "--sy",
        (progress * SCROLL_DEPTH).toFixed(1) + "px",
      );
    });
  }

  window.addEventListener("scroll", function () {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(updateDrift);
  });

  updateDrift();
})();

// ─── One shade that floats to the hovered card ───────────────────────────────
// Used by the products grid on the home page and the Key Highlights strip on
// the inside pages. `root` carries .is-shaded and owns the mouseleave; the
// shade is positioned against whatever the cards report as their offsetParent,
// so root must be that element or must contain it with nothing positioned in
// between.
function floatingShade(rootSelector, shadeSelector, cardSelector) {
  var root = document.querySelector(rootSelector);
  if (!root) return;

  var shade = root.querySelector(shadeSelector);
  var cards = root.querySelectorAll(cardSelector);
  if (!shade || !cards.length) return;

  function moveTo(card, slide) {
    // Entering the grid: jump to the card. Card to card: slide across.
    if (!slide) shade.style.transition = "none";

    // Exactly the card's own box, so the shade fills its grid cell edge to edge.
    // Position goes on the standalone `translate` property, not `transform`:
    // `translate` is applied before `scale`, so the CSS scale grows from the
    // cell's centre. On `transform` it would be scaled too, dragging the shade
    // towards the grid's top-left corner.
    shade.style.width = card.offsetWidth + "px";
    shade.style.height = card.offsetHeight + "px";
    shade.style.translate = card.offsetLeft + "px " + card.offsetTop + "px";

    if (!slide) {
      void shade.offsetWidth; // flush the jump before re-enabling transitions
      shade.style.transition = "";
    }
  }

  Array.prototype.forEach.call(cards, function (card) {
    card.addEventListener("mouseenter", function () {
      moveTo(card, root.classList.contains("is-shaded"));
      root.classList.add("is-shaded");
    });
  });

  root.addEventListener("mouseleave", function () {
    root.classList.remove("is-shaded");
  });

  window.addEventListener("resize", function () {
    root.classList.remove("is-shaded");
  });
}

floatingShade(".products-grid", ".products-shade", ".product-card");
floatingShade(".highlights-grid-wrap", ".highlights-shade", ".highlight-card");

// ─── Key Pillars slider ──────────────────────────────────────────────────────
var pillarsEl = document.querySelector(".swiper-pillars");
if (pillarsEl) {
  cloneSlidesToMin(pillarsEl, 6);
  new Swiper(pillarsEl, {
    loop: true,
    speed: 700,
    slidesPerView: 1.15,
    spaceBetween: 16,
    breakpoints: {
      576: { slidesPerView: 1.6, spaceBetween: 20 },
      768: { slidesPerView: 2, spaceBetween: 20 },
      1200: { slidesPerView: 3, spaceBetween: 24 },
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      prevEl: ".pillars-prev",
      nextEl: ".pillars-next",
    },
    pagination: {
      el: ".pillars-pagination",
      clickable: true,
    },
  });
}
