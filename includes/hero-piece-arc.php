<?php
/**
 * Hero ring.
 *
 * Half a turn of a thick stroked arc. Sized and placed by the --arc-*
 * variables in the page's own block in scss/pages/_inside.scss.
 */
?>
            <!-- Ring is a stroked arc so it stays crisp at any size; the
                 stylesheet draws it in from its own dash offset -->
            <svg
              class="hero-inside-arc hero-inside-float"
              viewBox="0 0 266 266"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
            >
              <defs>
                <!-- Axis runs across the ring from its brightest point to
                     its deepest, both read off the design -->
                <linearGradient
                  id="heroInsideArcFill"
                  gradientUnits="userSpaceOnUse"
                  x1="51"
                  y1="76"
                  x2="194"
                  y2="207"
                >
                  <stop offset="0" stop-color="#1ab4f5" />
                  <stop offset="1" stop-color="#0d62a6" />
                </linearGradient>
              </defs>
              <!-- Exactly half a turn, centre (133,133), 133.75° round to
                   313.75° — the butt ends leave the flat edge and the
                   semicircular notch the design has facing the figure -->
              <path
                d="M201.32,198.29 A94.5,94.5 0 0 1 64.68,67.71"
                fill="none"
                stroke="url(#heroInsideArcFill)"
                stroke-width="77"
              />
            </svg>
