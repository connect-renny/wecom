<?php
/**
 * Customer Support Solutions — the first of the three inside pages.
 *
 * Every inside page is the same run of sections; all that changes is the data
 * below and the hero artwork named by $hero['visual'].
 */
$pageTitle = 'Customer Support Solutions | Wecom';
$metaDesc  = 'Communication solutions designed to help customer support teams work faster, serve better, and stay connected with more control.';
$navActive = 'solutions';

$hero = [
    'visual'     => 'support',
    'figure'     => 'hero-customer-support-person.png',
    'figureAlt'  => 'Customer support agent wearing a headset',
    'breadcrumb' => [
        ['label' => 'Home', 'href' => 'index.php'],
        ['label' => 'Solutions', 'href' => '#'],
        ['label' => 'Customer Support Solutions'],
    ],
    'title' => 'Customer Support Solutions',
    'text'  => 'Communication solutions designed to help customer support teams work faster, serve better, and stay connected with more control.',
];

$featureRows = [
    [
        'title' => 'Common Challenges',
        'lead'  => 'Support teams often deal with long wait times, inconsistent routing, limited visibility into queue pressure, and difficulty maintaining service quality across agents and shifts.',
        'note'  => 'These issues slow response times and weaken customer confidence.',
        'image' => 'customer-support-common-challenges.jpg',
        'alt'   => 'Agent handling a call alongside live queue and SLA dashboards',
    ],
    [
        'title' => 'Recommended Wecom Solution Stack',
        'lead'  => 'A strong customer support setup can include AI Contact Center, Omnichannel Communications, Reporting & Analytics, and Integrations & APIs.',
        'note'  => 'Together, these help create smarter routing, better team workflows, stronger context, and clearer service visibility.',
        'image' => 'customer-support-recommended.jpg',
        'alt'   => 'Call flow builder routing a call through AI intent, IVR and voicemail steps',
    ],
    [
        'title' => 'Business Outcomes',
        'lead'  => 'With the right communication stack, support teams can reduce waiting times, improve consistency, route customer issues more effectively, and give managers the insight needed to maintain service quality over time.',
        'image' => 'customer-support-business.jpg',
        'alt'   => 'Communication stack architecture from agent experience down to interaction logic',
    ],
    [
        'title' => 'Why It Works',
        'lead'  => 'By combining cloud telephony, workflow visibility, reporting, and scalable deployment, Wecom helps teams move from fragmented communication to a more managed and measurable operating model.',
        'image' => 'customer-support-why-works.jpg',
        'alt'   => 'Power dialer session running beside the Wecom reporting console',
    ],
    [
        'title' => 'Scale with Confidence',
        'lead'  => 'Whether you are handling growing support demand, expanding to new branches, or improving outbound engagement, Wecom AI Contact Center gives your business a stronger foundation for scale.',
        'note'  => 'The platform is designed to support growth without forcing teams to rebuild their communication process every time requirements evolve.',
        'image' => 'customer-support-scale-confidence.jpg',
        'alt'   => 'Call volume analytics with inbound and outbound trends beside a dial pad',
    ],
];

$highlights = [
    ['icon' => 'key-hilight-icon-01.png', 'label' => 'Clearer communication workflows'],
    ['icon' => 'key-hilight-icon-02.png', 'label' => 'Better team responsiveness'],
    ['icon' => 'key-hilight-icon-03.png', 'label' => 'Stronger visibility for managers'],
    ['icon' => 'key-hilight-icon-04.png', 'label' => 'Flexible deployment for growth'],
    ['icon' => 'key-hilight-icon-05.png', 'label' => 'Support for branch, remote, & central teams'],
];

include 'includes/head.php';
include 'includes/header.php';
include 'includes/section-hero-inside.php';
?>

    <!-- ═══ Detail rows + Key Highlights (shared pastel wash) ═══ -->
    <div class="glow-inside">
<?php include 'includes/section-detail-rows.php'; ?>
<?php include 'includes/section-key-highlights.php'; ?>
    </div>

    <!-- ═══ FAQ ═══ -->
    <!-- No backdrop wrapper here: the wash on the inside pages is the one
         behind the detail rows, and the FAQ sits on plain white after it. -->
<?php include 'includes/section-faq.php'; ?>

<?php
include 'includes/section-cta.php';
include 'includes/footer.php';
