<?php
$pageTitle = 'Samsindeen Salako — Operator, Builder, Community Advocate';
$activePage = 'Home';
require_once __DIR__ . '/includes/bootstrap.php';
require __DIR__ . '/includes/header.php';
?>
<main>
    <section class="hero section-wrap">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-line"></span> Operator · Builder · Community advocate</p>
            <h1>Clarity for business.<br><em>Care for people.</em></h1>
            <p class="hero-intro">I'm <strong>Samsindeen Salako</strong> — a results-driven operator with 10+ years of experience across administration, operations, property management and legal support.</p>
            <div class="hero-actions">
                <a class="button button-dark" href="about.php">Discover my story <span>↗</span></a>
                <a class="text-link" href="contact.php">Work with me <span>→</span></a>
            </div>
            <div class="hero-meta"><strong>10+ YEARS</strong><span></span> Turning complexity into clear operations</div>
        </div>

        <div class="hero-visual">
            <div class="image-frame hero-image"><img src="assets/images/project-01.png" alt="Portrait of Samsindeen Salako"></div>
            <div class="hero-note"><strong>10+</strong><span>years turning complexity<br>into clear operations</span></div>
            <span class="vertical-label">SAMSINDEEN SALAKO — PERSONAL PORTFOLIO</span>
        </div>
    </section>

    <section class="intro-band">
        <div class="section-wrap intro-grid">
            <p class="eyebrow">A practical philosophy</p>
            <p>Good systems make room for <em>great work.</em> I bring structure, accountability and a people-first mindset to every organisation, property and venture I help move forward.</p>
            <a class="round-link" href="about.php" aria-label="Read about Samsindeen">↗</a>
        </div>
    </section>

    <section class="section-wrap section-padding">
        <div class="section-heading">
            <div><p class="eyebrow">What I bring</p><h2>Make the moving parts<br><em>work together.</em></h2></div>
            <a class="text-link" href="services.php">Explore all services <span>→</span></a>
        </div>

        <div class="service-grid">
            <?php foreach ($services as $service): ?>
                <article class="service-card">
                    <span class="card-number"><?= e($service['number']) ?></span>
                    <span class="service-symbol"><?= $service['number'] === '01' ? '⌂' : '↗' ?></span>
                    <h3><?= e($service['title']) ?></h3>
                    <p><?= e($service['intro']) ?></p>
                    <a href="services.php">Explore service <span>↗</span></a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="venture-section">
        <div class="section-wrap venture-grid">
            <div class="venture-visual">
                <div class="image-frame"><img src="assets/images/20.jpg" alt="Samsindeen Salako at work"></div>
                <span class="image-caption">Building with purpose, serving with intention.</span>
            </div>
            <div class="venture-copy">
                <p class="eyebrow">Beyond the day-to-day</p>
                <h2>Business is better<br>when it <em>creates impact.</em></h2>
                <div class="venture-list">
                    <?php foreach ($ventures as $venture): ?>
                        <article>
                            <span><?= e($venture['number']) ?></span>
                            <div>
                                <h3><?= e($venture['title']) ?><small><?= e($venture['role']) ?></small></h3>
                                <p><?= e($venture['description']) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <a class="text-link text-link-light" href="about.php">More about my work <span>→</span></a>
            </div>
        </div>
    </section>

    <section class="quote-section section-wrap">
        <p class="eyebrow">The operating philosophy</p>
        <blockquote>“Good administration + good technology + good agriculture = <em>a stronger Nigeria.</em>”</blockquote>
        <span>Structure first. People always. Results that matter.</span>
    </section>

    <section class="section-wrap section-padding">
        <div class="section-heading">
            <div><p class="eyebrow">Notes, ideas & inspiration</p><h2>From the <em>journal.</em></h2></div>
            <a class="text-link" href="insights.php">All insights <span>→</span></a>
        </div>
        <div class="article-grid">
            <?php foreach (array_slice($articles, 0, 3) as $article): ?>
                <a class="article-card" href="article.php?slug=<?= urlencode($article['slug']) ?>">
                    <div class="image-frame article-image"><img src="assets/images/<?= e($article['image']) ?>" alt="<?= e($article['title']) ?>"></div>
                    <span class="eyebrow">Coffee · Journal</span>
                    <h3><?= e($article['title']) ?></h3>
                    <span class="article-link">Read story ↗</span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="closing-cta">
        <div class="section-wrap closing-inner">
            <p class="eyebrow">Have a challenge worth solving?</p>
            <h2>Let's make good<br><em>things happen.</em></h2>
            <a class="button button-light" href="contact.php">Start a conversation <span>↗</span></a>
            <span class="cta-watermark">SSA.</span>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
