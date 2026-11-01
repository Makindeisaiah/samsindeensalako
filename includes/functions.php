<?php
declare(strict_types=1);

/** Escape dynamic text before printing it into HTML. */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/** Render a page heading and breadcrumb. */
function renderPageHero(string $eyebrow, string $title, string $description, string $currentPage): void
{
    ?>
    <section class="page-hero section-wrap">
        <p class="eyebrow"><?= e($eyebrow) ?></p>
        <h1><?= $title ?></h1>
        <p class="page-lede"><?= e($description) ?></p>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <span><?= e($currentPage) ?></span>
        </div>
    </section>
    <?php
}

