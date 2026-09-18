<?php
require __DIR__ . '/../includes/stub-page.php';
render_stub_page([
    'title' => 'Service',
    'phase' => 'Service',
    'activeSection' => 'service',
    'links' => [
        'Training' => '/service/training.php',
        '(Re)Certification' => '/service/recertification.php',
        'Maintenance' => '/service/maintenance.php',
        'Renovations' => '/service/renovations.php',
    ],
]);
