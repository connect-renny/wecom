<?php
/**
 * Inside-page hero. Identical on every inside page apart from the artwork in
 * the right column, which is a separate partial named by $hero['visual'].
 *
 * The four floating pieces — ring, sparkle tile, player, sparkle — are the same
 * everywhere and are rendered here. What changes per page is the figure they
 * are arranged around and the geometry, which lives in the .hero-inside-<visual>
 * block in scss/pages/_inside.scss.
 *
 * Expects $hero:
 *   visual      string  CSS modifier, e.g. 'support' adds .hero-inside-support
 *                       to the section and selects that block's measurements
 *   figure      string  filename of the cut-out figure in assets/images/
 *   figureAlt   string  alt text for it
 *   breadcrumb  array   [['label' => …, 'href' => …], …]; the last entry is the
 *                       current page and should have no href
 *   title       string
 *   text        string
 *   actions     array   optional; defaults to the standard demo/sales pair.
 *                       [['label' => …, 'href' => …, 'class' => …], …]
 */
$hero ??= [];
$crumbs = $hero['breadcrumb'] ?? [];
$actions = $hero['actions'] ?? [
    ['label' => 'Book a Demo', 'href' => '#', 'class' => 'btn-navy'],
    ['label' => 'Contact Sales', 'href' => '#', 'class' => 'btn-ghost'],
];
$last = count($crumbs) - 1;
?>
    <!-- ═══ Hero (inside) ═══ -->
    <section class="hero-inside hero-inside-<?= htmlspecialchars($hero['visual']) ?>">
      <div class="container">
        <div class="hero-inside-inner">
          <!-- Left: breadcrumb + copy -->
          <div class="hero-inside-copy">
            <nav aria-label="Breadcrumb">
              <ol class="hero-breadcrumb" data-aos="fade-up">
<?php foreach ($crumbs as $i => $crumb): ?>
<?php if ($i === $last): ?>
                <li class="is-current" aria-current="page">
                  <?= htmlspecialchars($crumb['label']) ?>
                </li>
<?php else: ?>
                <li>
                  <a href="<?= htmlspecialchars($crumb['href']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
                </li>
<?php endif; ?>
<?php endforeach; ?>
              </ol>
            </nav>

            <h1 class="hero-inside-title" data-aos="fade-up" data-aos-delay="80">
              <?= htmlspecialchars($hero['title']) ?>
            </h1>
            <p class="hero-inside-text" data-aos="fade-up" data-aos-delay="140">
              <?= htmlspecialchars($hero['text']) ?>
            </p>
            <div
              class="hero-inside-actions"
              data-aos="fade-up"
              data-aos-delay="200"
            >
<?php foreach ($actions as $action): ?>
              <a href="<?= htmlspecialchars($action['href']) ?>" class="<?= htmlspecialchars($action['class']) ?>"><?= htmlspecialchars($action['label']) ?></a>
<?php endforeach; ?>
            </div>
          </div>

          <!-- Right: the shared pieces arranged around this page's figure -->
          <div class="hero-inside-visual-col">
            <div class="hero-inside-visual">
<?php include __DIR__ . '/hero-piece-arc.php'; ?>
<?php include __DIR__ . '/hero-piece-glitter.php'; ?>
<?php include __DIR__ . '/hero-piece-player.php'; ?>
<?php include __DIR__ . '/hero-piece-spark.php'; ?>
              <img
                class="hero-inside-figure"
                src="assets/images/<?= htmlspecialchars($hero['figure']) ?>"
                alt="<?= htmlspecialchars($hero['figureAlt']) ?>"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
