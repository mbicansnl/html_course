<?php
require __DIR__ . '/../includes/stub-page.php';
render_stub_page([
    'title' => 'About us',
    'eyebrow' => 'About',
    'phase' => 'About/Quality/History',
    'activeSection' => 'about',
    'links' => [
        'Quality' => '/about/quality.php',
        'History' => '/about/history.php',
    ],
]);
