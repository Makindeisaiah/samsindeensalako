<?php
declare(strict_types=1);
?>
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-intro">
            <a class="brand brand-footer" href="index.php">
                <span class="brand-mark">SSA<span>.</span></span>
                <span class="brand-caption">SAMSINDEEN SALAKO</span>
            </a>
            <p>Creating order, strengthening businesses and building opportunities that outlast the moment.</p>
        </div>

        <div class="footer-column">
            <span class="footer-label">Explore</span>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="projects.php">Projects</a>
            <a href="insights.php">Insights</a>
        </div>

        <div class="footer-column">
            <span class="footer-label">Get in touch</span>
            <a href="mailto:<?= e($siteEmail) ?>"><?= e($siteEmail) ?></a>
            <a href="tel:+2348026868355"><?= e($sitePhone) ?></a>
            <span><?= e($siteLocation) ?></span>
        </div>

        <div class="footer-column">
            <span class="footer-label">Follow</span>
            <a href="#" aria-label="X / Twitter">X / Twitter ↗</a>
            <a href="#" aria-label="LinkedIn">LinkedIn ↗</a>
            <a href="#" aria-label="Instagram">Instagram ↗</a>
        </div>
    </div>

    <div class="footer-bottom">
        <span>© <?= date('Y') ?> Samsindeen Salako. All rights reserved.</span>
        <span>Built with intention.</span>
        <a href="#top">Back to top ↑</a>
    </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>
