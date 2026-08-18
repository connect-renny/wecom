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
              <!-- Staggered a line at a time rather than as one block, so the
                   copy builds while the artwork beside it wipes open -->
              <div class="feature-body">
                <h2 class="feature-title" data-aos="fade-up"><?= htmlspecialchars($row['title']) ?></h2>
                <p class="feature-lead" data-aos="fade-up" data-aos-delay="80">
                  <?= htmlspecialchars($row['lead']) ?>
                </p>
<?php if (!empty($row['note'])): ?>
                <p class="feature-note" data-aos="fade-up" data-aos-delay="140">
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
