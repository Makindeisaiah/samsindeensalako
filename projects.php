<?php
$pageTitle = 'Projects — Samsindeen Salako';
$activePage = 'Projects';
require_once __DIR__ . '/includes/bootstrap.php';
require __DIR__ . '/includes/header.php';
?>
<main>
    <?php renderPageHero('Selected moments & work', 'People, places<br><em>and progress.</em>', 'A visual collection from the work, the journey and the ventures taking shape.', 'Projects'); ?>

    <section class="section-wrap project-gallery">
        <?php foreach ($projects as $index => $project): ?>
            <figure class="project-tile">
                <div class="image-frame"><img src="assets/images/<?= e($project['image']) ?>" alt="Portfolio photograph <?= $index + 1 ?>"></div>
                <figcaption><span><?= sprintf('%02d', $index + 1) ?></span><span><?= e($project['caption']) ?></span></figcaption>
            </figure>
        <?php endforeach; ?>
    </section>

    <section class="belief-band">
        <div class="section-wrap">
            <p class="eyebrow">More than a gallery</p>
            <h2>Every project starts with a question: <em>how can this work better?</em></h2>
            <a class="button button-dark" href="contact.php">Start a project <span>↗</span></a>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
