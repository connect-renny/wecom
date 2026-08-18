<?php
/**
 * AI Contact Center — the third inside page.
 *
 * Same run of sections as the other inside pages; the hero geometry for this
 * one lives under .hero-inside-ai-contact in scss/pages/_inside.scss.
 */
$pageTitle = 'AI Contact Center for Smarter Customer Conversations | Wecom';
$metaDesc  = 'Deliver faster, more intelligent customer support with an AI-powered contact center platform built for businesses in Oman.';
$navActive = 'products';

$hero = [
    'visual'     => 'ai-contact',
    'figure'     => 'hero-ai-contact.png',
    'figureAlt'  => 'Contact centre agent working at a desk with a live analytics dashboard',
    'breadcrumb' => [
        ['label' => 'Home', 'href' => 'index.php'],
        ['label' => 'Products', 'href' => '#'],
        ['label' => 'AI Contact Center'],
    ],
    'title' => 'AI Contact Center for Smarter Customer Conversations',
    'text'  => 'Deliver faster, more intelligent customer support with an AI-powered contact center platform built for businesses in Oman.',
];

$featureRows = [
    [
        'title' => 'Why Businesses Need an AI Contact Center',
        'lead'  => 'As customer volume increases, service teams need faster ways to route interactions, reduce waiting times, and keep performance consistent across every shift.',
        'note'  => 'An AI Contact Center helps businesses manage these demands more intelligently by combining automation, better call flows, and real-time operational oversight.',
        'image' => 'ai-contact-business.jpg',
        'alt'   => 'Agent workspace showing a customer profile beside a live conversation thread',
    ],
    [
        'title' => 'How Wecom Improves Customer Support Operations',
        'lead'  => 'Wecom supports customer service environments that need smarter routing, clearer queue management, and more productive agent workflows.',
        'note'  => 'The goal is not only to answer more calls, but to create better conversations, improve responsiveness, and reduce the operational friction that slows support teams down.',
        'image' => 'ai-contact-customer-support.jpg',
        'alt'   => 'Call queue listing inbound, outbound and missed calls beside an active call panel',
    ],
    [
        'title' => 'Support Better Agent Performance',
        'lead'  => 'Agents perform better when they have clear workflows, the right customer context, and easier access to tools that help them respond consistently.',
        'note'  => 'Wecom helps teams work through interactions with more structure so managers can maintain service standards while supporting higher levels of productivity.',
        'image' => 'ai-contact-better-agent.jpg',
        'alt'   => 'Routing flow directing a chat to sales, technical support or billing agents',
    ],
    [
        'title' => 'Gain Real-Time Visibility',
        'lead'  => 'Supervisors and operations leaders need to understand queue activity, service levels, and team performance as it happens.',
        'note'  => 'Wecom gives decision-makers a more direct view of communication performance so they can spot pressure points early, adjust workflows, and improve customer outcomes.',
        'image' => 'ai-contact-visibility.jpg',
        'alt'   => 'Statistics console reporting total and inbound call counts over time',
    ],
    [
        'title' => 'Scale with Confidence',
        'lead'  => 'Whether you are handling growing support demand, expanding to new branches, or improving outbound engagement, Wecom AI Contact Center gives your business a stronger foundation for scale.',
        'note'  => 'The platform is designed to support growth without forcing teams to rebuild their communication process every time requirements evolve.',
        'image' => 'ai-contact-confidence.jpg',
        'alt'   => 'Call volume analytics with inbound and outbound trends beside a dial pad',
    ],
];

// No design was supplied for this strip, so the labels below are drawn from
// this page's own copy above and reuse the shared icon set. Swap the wording
// when the AI Contact Center highlights land.
$highlights = [
    ['icon' => 'key-hilight-icon-01.png', 'label' => 'Smarter routing for every interaction'],
    ['icon' => 'key-hilight-icon-02.png', 'label' => 'Shorter customer waiting times'],
    ['icon' => 'key-hilight-icon-03.png', 'label' => 'Clearer queue and workload visibility'],
    ['icon' => 'key-hilight-icon-04.png', 'label' => 'More productive agent workflows'],
    ['icon' => 'key-hilight-icon-05.png', 'label' => 'Room to scale across teams & branches'],
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
    <!-- No backdrop wrapper here: the wash on the inside pages is the one
         behind the detail rows, and the FAQ sits on plain white after it. -->
<?php include 'includes/section-faq.php'; ?>

<?php
include 'includes/section-cta.php';
include 'includes/footer.php';
