<?php
$pageTitle = 'Contact — Samsindeen Salako';
$activePage = 'Contact';
require_once __DIR__ . '/includes/bootstrap.php';

$formSent = false;
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string) ($_POST['name'] ?? ''));
    $email = trim((string) ($_POST['email'] ?? ''));
    $message = trim((string) ($_POST['message'] ?? ''));

    if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
        $formError = 'Please complete every field and enter a valid email address.';
    } else {
        $subject = 'Website enquiry from ' . $name;
        $body = "Name: {$name}\nEmail: {$email}\n\n{$message}";
        $headers = "From: website@samsindeensalako.com\r\n";
        $headers .= "Reply-To: {$email}\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8";

        $formSent = mail($siteEmail, $subject, $body, $headers);

        if (!$formSent) {
            $formError = 'Email sending is not configured on this server yet. Please email ' . $siteEmail . ' directly.';
        }
    }
}

require __DIR__ . '/includes/header.php';
?>
<main>
    <?php renderPageHero('The next step starts here', "Let's talk about<br><em>what's possible.</em>", 'Have an operation that needs fixing, a property that needs managing or an idea that needs structure? I’d like to hear about it.', 'Contact'); ?>

    <section class="section-wrap contact-layout">
        <div class="contact-aside">
            <div class="image-frame contact-portrait"><img src="assets/images/21.jpg" alt="Samsindeen Salako"></div>
            <div class="contact-details">
                <span class="eyebrow">Prefer a direct line?</span>
                <a href="mailto:<?= e($siteEmail) ?>"><?= e($siteEmail) ?> ↗</a>
                <a href="tel:+2348026868355"><?= e($sitePhone) ?> ↗</a>
                <span><?= e($siteLocation) ?></span>
            </div>
        </div>

        <div class="contact-form-wrap">
            <p class="eyebrow">Get in touch</p>
            <h2>Tell me a little<br><em>about it.</em></h2>
            <p class="muted">Share a few details and I'll get back to you.</p>

            <?php if ($formSent): ?>
                <p class="form-message success">Thank you. Your message has been sent.</p>
            <?php elseif ($formError !== ''): ?>
                <p class="form-message"><?= e($formError) ?></p>
            <?php endif; ?>

            <form method="post" action="contact.php" class="contact-form">
                <label>Your name
                    <input type="text" name="name" placeholder="Full name" required value="<?= e($_POST['name'] ?? '') ?>">
                </label>
                <label>Email address
                    <input type="email" name="email" placeholder="you@example.com" required value="<?= e($_POST['email'] ?? '') ?>">
                </label>
                <label>What would you like to discuss?
                    <textarea name="message" rows="5" placeholder="Tell me about your project, property or business..." required><?= e($_POST['message'] ?? '') ?></textarea>
                </label>
                <button class="button button-dark" type="submit">Send enquiry <span>↗</span></button>
                <small>Your information will only be used to respond to your enquiry.</small>
            </form>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
