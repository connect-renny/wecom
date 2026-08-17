<?php
/**
 * Healthcare — the second inside page.
 *
 * Same run of sections as the other inside pages; the hero geometry for this
 * one lives under .hero-inside-healthcare in scss/pages/_inside.scss.
 */
$pageTitle = 'Communication Solutions for Healthcare in Oman | Wecom';
$metaDesc  = 'Improve coordination, responsiveness, and communication visibility for healthcare providers, clinics, and service teams in Oman.';
$navActive = 'industries';

$hero = [
    'visual'     => 'healthcare',
    'figure'     => 'hero-healthcare-women.png',
    'figureAlt'  => 'Doctor greeting a patient during a consultation',
    'breadcrumb' => [
        ['label' => 'Home', 'href' => 'index.php'],
        ['label' => 'Industries', 'href' => '#'],
        ['label' => 'Healthcare'],
    ],
    'title' => 'Communication Solutions for Healthcare in Oman',
    'text'  => 'Improve coordination, responsiveness, and communication visibility for healthcare providers, clinics, and service teams in Oman.',
];

$featureRows = [
    [
        'title' => 'Industry Challenges',
        'lead'  => 'Healthcare environments need faster communication between teams, smoother patient interaction handling, and better coordination across appointments, service desks, and internal workflows. Poor communication can create delays and reduce service quality.',
        'image' => 'healthcare-industry-challenges.jpg',
        'alt'   => 'Live service feed of clinic calls beside a patient interaction volume chart',
    ],
    [
        'title' => 'Recommended Product Mix',
        'lead'  => 'Cloud Telephony, AI Contact Center, Meeting Platform, and Reporting & Analytics help create a stronger communication foundation for patient-facing and internal healthcare workflows.',
        'image' => 'healthcare-recommended.jpg',
        'alt'   => 'Active call window with mute, hold, keypad, notes and tagging controls',
    ],
    [
        'title' => 'How Wecom Creates Value',
        'lead'  => 'Wecom helps healthcare teams improve patient responsiveness, reduce communication delays, support internal collaboration, and maintain clearer visibility into service-related communication performance.',
        'image' => 'customer-creates-value.jpg',
        'alt'   => 'Dial showing 99.95% service availability',
    ],
    [
        'title' => 'Implementation Approach',
        'lead'  => 'We work with businesses in Oman to understand team structure, communication needs, reporting expectations, and growth requirements before recommending the right product mix and rollout path.',
        'image' => 'healthcare-implementation.jpg',
        'alt'   => 'Server response dashboard tracking API connection times and success rate',
    ],
];

// No design was supplied for this strip, so the labels below are drawn from
// this page's own copy above and reuse the shared icon set. Swap the wording
// when the healthcare highlights land.
$highlights = [
    ['icon' => 'key-hilight-icon-01.png', 'label' => 'Faster communication between teams'],
    ['icon' => 'key-hilight-icon-02.png', 'label' => 'Smoother patient interaction handling'],
    ['icon' => 'key-hilight-icon-03.png', 'label' => 'Better coordination across departments'],
    ['icon' => 'key-hilight-icon-04.png', 'label' => 'Clearer service performance visibility'],
    ['icon' => 'key-hilight-icon-05.png', 'label' => 'Scalable rollout across clinics & sites'],
];

include 'includes/head.php';
include 'includes/header.php';
include 'includes/section-hero-inside.php';
?>

<?php if ($featureRows || $highlights): ?>
    <!-- ═══ Detail rows + Key Highlights (shared pastel wash) ═══ -->
    <div class="glow-inside">
<?php include 'includes/section-detail-rows.php'; ?>
<?php include 'includes/section-key-highlights.php'; ?>
    </div>
<?php endif; ?>

    <!-- ═══ FAQ ═══ -->
    <div class="glow-bg-3">
<?php include 'includes/section-faq.php'; ?>
    </div>
    <!-- /.glow-bg-3 -->

<?php
include 'includes/section-cta.php';
include 'includes/footer.php';
