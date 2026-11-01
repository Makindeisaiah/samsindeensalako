<?php
require_once __DIR__ . '/includes/bootstrap.php';

$slug = isset($_GET['slug']) ? (string) $_GET['slug'] : '';
$article = null;

foreach ($articles as $item) {
    if ($item['slug'] === $slug) {
        $article = $item;
        break;
    }
}

if ($article === null) {
    http_response_code(404);
    $pageTitle = 'Article not found — Samsindeen Salako';
} else {
    $pageTitle = $article['title'] . ' — Samsindeen Salako';
}

$activePage = 'Insights';
require __DIR__ . '/includes/header.php';
?>
<main>
    <?php if ($article === null): ?>
        <section class="section-wrap page-hero">
            <p class="eyebrow">404 · Journal</p>
            <h1>Story not found.</h1>
            <a class="text-link" href="insights.php">Back to insights <span>→</span></a>
        </section>
    <?php else: ?>
        <section class="section-wrap article-hero">
            <p class="eyebrow">Coffee · Journal</p>
            <h1><?= e($article['title']) ?></h1>
            <p class="page-lede"><?= e($article['excerpt']) ?></p>
            <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><a href="insights.php">Insights</a><span>/</span>Article</div>
            <div class="image-frame article-cover"><img src="assets/images/<?= e($article['image']) ?>" alt="<?= e($article['title']) ?>"></div>
        </section>

        <article class="article-body">
            <p>Coffee has a way of making space for connection. Across communities, it is part of the way people welcome one another, share ideas and create a moment of pause in a busy day.</p>
            <h2>More than what is in the cup</h2>
            <p>Every cup carries a story: the people who grow and harvest the beans, the hands that roast and prepare them, and the conversations that happen around the table. Taking time to understand that journey makes the experience richer.</p>
            <p>At Validreams Coffee, the ambition is to celebrate quality while creating meaningful value across the chain — from Nigerian soil to your cup.</p>
            <p>Enjoy the ritual, stay curious and remember that the best moments are often shared.</p>
            <a class="text-link" href="insights.php">← Back to all insights</a>
        </article>
    <?php endif; ?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
