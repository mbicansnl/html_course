<?php
require __DIR__ . '/../includes/stub-page.php';
render_stub_page([
    'title' => 'Products',
    'phase' => 'Products',
    'activeSection' => 'products',
    'links' => [
        'Chambers' => '/products/chambers.php',
        'Launch & Recovery Systems' => '/products/launch-recovery.php',
        'Life support systems' => '/products/life-support-systems.php',
        'Kirby Morgan / personal equipment' => '/products/kirby-morgan.php',
    ],
]);
