<?php
$pageTitle = 'Insights — Samsindeen Salako';
$activePage = 'Insights';
require_once __DIR__ . '/includes/bootstrap.php';
require __DIR__ . '/includes/header.php';
?>
<main>
    <?php renderPageHero('Ideas worth sharing', 'Thoughts for a<br><em>fuller life.</em>', 'Notes on coffee, culture, business and the small things that make a difference.', 'Insights'); ?>

    <section class="section-wrap section-padding">
        <div class="insights-intro">
            <span class="eyebrow">The journal · <?= count($articles) ?> stories</span>
            <p>Stories, perspectives and discoveries from the world around us.</p>
        </div>
        <div class="article-grid article-grid-six">
            <?php foreach ($articles as $article): ?>
                <a class="article-card" href="article.php?slug=<?= urlencode($article['slug']) ?>">
                    <div class="image-frame article-image"><img src="assets/images/<?= e($article['image']) ?>" alt="<?= e($article['title']) ?>"></div>
                    <span class="eyebrow">Coffee · Journal</span>
                    <h3><?= e($article['title']) ?></h3>
                    <p><?= e($article['excerpt']) ?></p>
                    <span class="article-link">Read story ↗</span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
