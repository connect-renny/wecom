<?php
/**
 * Alternating copy/artwork rows. Copy leads in the markup on every row so the
 * heading is read before its illustration; which side the artwork lands on is
 * decided in the stylesheet off :nth-child, not here.
 *
 * Expects $featureRows: [
 *   ['title' => …, 'lead' => …, 'note' => …, 'image' => …, 'alt' => …], …
 * ]
 * 'note' is optional — rows without a follow-on remark simply omit it.
 */
$featureRows ??= [];
if (!$featureRows) {
    return;
}
?>
      <!-- ═══ Detail rows ═══ -->
      <section class="section-detail">
        <div class="container">
          <div class="feature-rows">
<?php foreach ($featureRows as $row): ?>
            <article class="feature-row">
              <div class="feature-body" data-aos="fade-up">
                <h2 class="feature-title"><?= htmlspecialchars($row['title']) ?></h2>
                <p class="feature-lead">
                  <?= htmlspecialchars($row['lead']) ?>
                </p>
<?php if (!empty($row['note'])): ?>
                <p class="feature-note">
                  <?= htmlspecialchars($row['note']) ?>
                </p>
<?php endif; ?>
              </div>
              <div class="feature-media">
                <img
                  src="assets/images/<?= htmlspecialchars($row['image']) ?>"
                  alt="<?= htmlspecialchars($row['alt']) ?>"
                />
              </div>
            </article>
<?php endforeach; ?>
          </div>
        </div>
      </section>
