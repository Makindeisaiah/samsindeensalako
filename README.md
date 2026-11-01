# Samsindeen Salako — Static Vercel Website

This version is built with **HTML, CSS and JavaScript only**. It contains no PHP files, no PHP includes, and no PHP runtime requirement.

## Deploy to Vercel

1. Extract this ZIP.
2. Upload the contents of this folder to a GitHub repository (the `index.html` file must be at the repository root).
3. In Vercel, choose **Add New → Project** and import that GitHub repository.
4. Keep the Framework Preset as **Other**.
5. Leave Build Command and Output Directory empty (or use `.` as the output directory).
6. Click **Deploy**.

## Local preview

You can open `index.html` directly in a browser, or use VS Code Live Server for a better local preview.

## Project structure

- `index.html`, `about.html`, `services.html`, `projects.html`, `insights.html`, `contact.html`
- `article-*.html` — individual static article pages
- `assets/images/` — regular image files used by HTML `<img>` tags
- `css/style.css` — website styling
- `js/main.js` — mobile navigation
- `js/contact.js` — opens the visitor's email app with their enquiry prepared

## Contact form note

Because this is a static website, the contact form opens the visitor's default email application. It does not send email directly from Vercel. To receive submissions without relying on the visitor's email app, connect a hosted form service or a separate backend.

## Images

All image references use normal paths such as `assets/images/portrait-hero.jpg`. Replace the supplied image files with the final approved, full-resolution photographs while keeping the filenames unchanged.
