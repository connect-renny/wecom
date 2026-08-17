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
      </section>
