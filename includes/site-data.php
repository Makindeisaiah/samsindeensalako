<?php
declare(strict_types=1);

/*
 * Shared website content.
 * Update the copy and image filenames here without changing page templates.
 */

$siteName = 'Samsindeen Salako';
$siteEmail = 'hello@samsindeensalako.com';
$sitePhone = '+234 802 686 8355';
$siteLocation = 'Lagos, Nigeria';

$navigation = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About', 'url' => 'about.php'],
    ['label' => 'Services', 'url' => 'services.php'],
    ['label' => 'Projects', 'url' => 'projects.php'],
    ['label' => 'Insights', 'url' => 'insights.php'],
    ['label' => 'Contact', 'url' => 'contact.php'],
];

$services = [
    [
        'number' => '01',
        'title' => 'Property & Facilities Management',
        'intro' => 'For property owners, landlords and businesses with physical spaces.',
        'details' => 'Sales, leases and rental management; tenant relations and conflict resolution; facilities maintenance coordination; portfolio reporting; compliance and safety requirements.',
        'audience' => 'Real estate investors, commercial buildings, office complexes and retail spaces.',
        'outcome' => 'Well-managed properties that protect asset value and keep tenants happy.',
    ],
    [
        'number' => '02',
        'title' => 'Operations & Administrative Consulting',
        'intro' => 'For CEOs, founders and executives who need order behind the scenes.',
        'details' => 'Build and streamline internal SOPs, admin systems and workflows; executive support; vendor management, procurement and cost optimisation; compliance documentation; process audits.',
        'audience' => 'SMEs, startups, NGOs and corporate teams scaling fast.',
        'outcome' => 'A business that runs with less chaos and more output.',
    ],
];

$ventures = [
    [
        'number' => '01',
        'title' => 'Validreams Coffee',
        'role' => 'Founder',
        'description' => 'A premium Nigerian coffee brand — from Nigerian soil to your cup. Sourcing 100% Arabica from Northern Nigeria and building value for farmers and retailers.',
    ],
    [
        'number' => '02',
        'title' => 'Public Service',
        'role' => 'Head of Protocol, Electoral College Nigeria',
        'description' => 'Committed to order, representation and institutional excellence through public service.',
    ],
    [
        'number' => '03',
        'title' => 'Validreams Empowerment Foundation',
        'role' => 'Founder & Lead Volunteer',
        'description' => 'Focused on youth skills, community development and pathways to opportunity.',
    ],
];

$articles = [
    [
        'slug' => 'coffee-culture-around-the-world',
        'title' => 'Coffee Culture Around the World',
        'excerpt' => 'A look at the rituals, places and communities that make coffee more than a drink.',
        'image' => 'coffee-01.jpg',
    ],
    [
        'slug' => 'why-coffee-is-more-than-a-morning-drink',
        'title' => 'Why Coffee Is More Than Just a Morning Drink',
        'excerpt' => 'How a simple cup can create connection, rhythm and belonging.',
        'image' => 'coffee-02.jpg',
    ],
    [
        'slug' => 'the-quiet-magic-of-your-first-cup',
        'title' => 'The Quiet Magic of Your First Cup',
        'excerpt' => 'The small daily pause that can set the tone for a more intentional day.',
        'image' => 'coffee-03.jpg',
    ],
    [
        'slug' => 'brewing-methods-101',
        'title' => 'Brewing Methods 101: Finding the One That Fits You',
        'excerpt' => 'A beginner-friendly guide to choosing a brewing method that suits your taste.',
        'image' => 'coffee-04.jpg',
    ],
    [
        'slug' => 'from-ethiopia-to-your-cup',
        'title' => 'From Ethiopia to Your Cup: The Story of Coffee',
        'excerpt' => 'Following coffee from its origins to the people who bring it to your table.',
        'image' => 'coffee-05.jpg',
    ],
    [
        'slug' => 'surprising-health-benefits-of-coffee',
        'title' => 'The Surprising Health Benefits of Your Daily Cup',
        'excerpt' => 'A balanced look at coffee, wellbeing and enjoying your cup mindfully.',
        'image' => 'coffee-06.jpg',
    ],
];

$projects = [
    ['image' => 'project-01.png', 'caption' => 'At work'],
    ['image' => 'project-02.jpg', 'caption' => 'Leadership'],
    ['image' => 'project-03.jpg', 'caption' => 'On the move'],
    ['image' => 'project-04.jpg', 'caption' => 'The everyday'],
    ['image' => 'project-05.jpg', 'caption' => 'A moment to reflect'],
    ['image' => 'project-06.jpg', 'caption' => 'Building forward'],
];
