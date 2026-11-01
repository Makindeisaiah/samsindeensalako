# Samsindeen Salako — Website v2

This is a fresh website design, not a WordPress theme clone. It uses the existing site's content flow while presenting it through a new editorial visual identity.

## Folder structure

```text
samsindeen-website-v2/
├── index.php
├── about.php
├── services.php
├── projects.php
├── insights.php
├── article.php
├── contact.php
├── includes/
│   ├── bootstrap.php
│   ├── site-data.php
│   ├── functions.php
│   ├── header.php
│   └── footer.php
├── css/
│   └── style.css
├── js/
│   └── main.js
└── assets/
    └── images/
```

## PHP include architecture

Every page loads `includes/bootstrap.php`, which loads the shared content and helper functions. Each page then includes `includes/header.php` and `includes/footer.php`.

- `site-data.php`: navigation, service copy, ventures, articles and project captions.
- `functions.php`: shared HTML rendering helpers and escaping.
- `bootstrap.php`: shared setup for each page.
- `header.php`: document head, site branding and navigation.
- `footer.php`: shared footer and JavaScript include.

The shared includes are separate PHP files in the `includes/` directory and are included in this ZIP.

## Run with XAMPP

1. Extract `samsindeen-website-v2` into `C:\\xampp\\htdocs\\`.
2. Start Apache in XAMPP.
3. Open `http://localhost/samsindeen-website-v2/`.

No database or Composer packages are required for this version.

## Add the real WordPress images

Copy the original image files into `assets/images/` and name them:

- `portrait-hero.jpg`
- `portrait-about.jpg`
- `portrait-contact.jpg`
- `project-01.jpg` through `project-06.jpg`
- `coffee-01.jpg` through `coffee-06.jpg`

Until then, CSS placeholders appear in the image areas.

## Contact form

The form validates name, email and message, then uses PHP `mail()`. Configure SMTP/PHPMailer or the hosting provider's mail service before production deployment. No SMTP credentials should be stored in this project.


## Images
All photos are stored as regular image files in `assets/images/` and referenced with standard HTML `<img src="assets/images/...">` tags. No PHP image-rendering helper is used. The included images were cropped from the reference screenshots supplied for this project; replace them with the original full-resolution photographs before publishing.
