<?php
/**
 * Key Highlights strip — icon tiles with rules between them.
 *
 * Expects:
 *   $highlights       array  [['icon' => …, 'label' => …], …]
 *   $highlightsTitle  string optional heading; defaults to "Key Highlights"
 *
 * The rule-drawing rules in the stylesheet are written against five across and
 * restate themselves for the three- and two-column steps, so a list of another
 * length will need those revisited.
 */
$highlights ??= [];
if (!$highlights) {
    return;
}
?>
      <!-- ═══ Key Highlights ═══ -->
      <section class="section-highlights">
        <div class="container">
          <h2 class="highlights-title" data-aos="fade-up"><?= htmlspecialchars($highlightsTitle ?? 'Key Highlights') ?></h2>

          <!-- The shade is a sibling of the list rather than a child of it, as
               it is on the products grid. The divider rules at the narrow steps
               are written with :nth-child, which counts every sibling — an extra
               element inside the <ul> would shift each card's index by one and
               put the rules in the wrong places. -->
          <div class="highlights-grid-wrap">
            <span class="highlights-shade" aria-hidden="true"></span>
            <ul class="highlights-grid">
<?php foreach ($highlights as $i => $item): ?>
              <li class="highlight-card" data-aos="fade-up"<?= $i ? ' data-aos-delay="' . ($i * 80) . '"' : '' ?>>
                <span class="highlight-icon">
                  <img src="assets/images/<?= htmlspecialchars($item['icon']) ?>" alt="" />
                </span>
                <p class="highlight-label"><?= htmlspecialchars($item['label']) ?></p>
              </li>
<?php endforeach; ?>
            </ul>
          </div>
        </div>
      </section>
