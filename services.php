<?php
$pageTitle = 'Services — Samsindeen Salako';
$activePage = 'Services';
require_once __DIR__ . '/includes/bootstrap.php';
require __DIR__ . '/includes/header.php';
?>
<main>
    <?php renderPageHero('What I can help you move forward', 'Good work needs<br><em>good systems.</em>', 'Practical support for the spaces you manage and the businesses you lead.', 'Services'); ?>

    <section class="section-wrap service-details">
        <?php foreach ($services as $service): ?>
            <article class="service-detail">
                <div class="service-detail-top"><span><?= e($service['number']) ?> / SERVICE</span><strong><?= $service['number'] === '01' ? '⌂' : '↗' ?></strong></div>
                <h2><?= e($service['title']) ?></h2>
                <p class="service-lede"><?= e($service['intro']) ?></p>
                <div class="detail-columns">
                    <div><span class="eyebrow">What I do</span><p><?= e($service['details']) ?></p></div>
                    <div><span class="eyebrow">Who this is for</span><p><?= e($service['audience']) ?></p><span class="eyebrow">The result</span><p><?= e($service['outcome']) ?></p></div>
                </div>
                <a class="text-link" href="contact.php">Discuss your needs <span>→</span></a>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="approach-band">
        <div class="section-wrap">
            <p class="eyebrow">My approach</p>
            <h2>Structure first.<br><em>People always.</em></h2>
            <p>My foundation in Public Administration and Software Management means I build operations with governance, technology and human insight at the core. You'll get a structured approach, confidential service and a team-member mindset.</p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
