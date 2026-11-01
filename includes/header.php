<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Samsindeen Salako — business operations, property management, consulting and community impact.">
    <title><?= e($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="top">
<header class="site-header">
    <a class="brand" href="index.php" aria-label="<?= e($siteName) ?> home">
        <span class="brand-mark">SSA<span>.</span></span>
        <span class="brand-caption">SAMSINDEEN SALAKO</span>
    </a>

    <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
        <span></span><span></span>
    </button>

    <nav class="main-nav" aria-label="Main navigation">
        <?php foreach ($navigation as $item): ?>
            <a
                href="<?= e($item['url']) ?>"
                class="<?= $activePage === $item['label'] ? 'active' : '' ?>"
                <?= $activePage === $item['label'] ? 'aria-current="page"' : '' ?>
            ><?= e($item['label']) ?></a>
        <?php endforeach; ?>
    </nav>

    <a class="header-cta" href="contact.php">Start a conversation <span>↗</span></a>
</header>
