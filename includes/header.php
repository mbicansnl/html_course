<?php
/**
 * Shared site header.
 * Expects (all optional, set before including this file):
 *   $pageTitle        string  e.g. "Diving | Markets"
 *   $metaDescription  string
 *   $activeSection    string  one of: home, markets, products, service, updates, about, careers, contact
 */

$pageTitle = $pageTitle ?? 'Hytech-Pommec';
$metaDescription = $metaDescription ?? 'Hyperbaric & diving solutions for challenging environments.';
$activeSection = $activeSection ?? '';

function nav_current($section, $active) {
    return $section === $active ? ' aria-current="page"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600;700;800&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container site-header__bar">
    <a href="/index.php" class="logo">HYTECH<span class="logo-dash">&ndash;</span>POMMEC</a>

    <nav class="main-nav" aria-label="Primary">
      <ul>
        <li class="has-dropdown">
          <a href="/markets/index.php"<?php echo nav_current('markets', $activeSection); ?>>Markets</a>
          <ul class="dropdown">
            <li><a href="/markets/diving.php">Diving</a></li>
            <li><a href="/markets/medical.php">Medical</a></li>
            <li><a href="/markets/governmental.php">Governmental</a></li>
            <li><a href="/markets/life-support.php">Life support</a></li>
            <li><a href="/markets/yachting.php">Yachting</a></li>
            <li><a href="/markets/tunnelling.php">Tunnelling</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="/products/index.php"<?php echo nav_current('products', $activeSection); ?>>Products</a>
          <ul class="dropdown">
            <li><a href="/products/chambers.php">Chambers</a></li>
            <li><a href="/products/launch-recovery.php">Launch &amp; Recovery Systems</a></li>
            <li><a href="/products/life-support-systems.php">Life support systems</a></li>
            <li><a href="/products/kirby-morgan.php">Kirby Morgan / personal equipment</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="/service/index.php"<?php echo nav_current('service', $activeSection); ?>>Service</a>
          <ul class="dropdown">
            <li><a href="/service/training.php">Training</a></li>
            <li><a href="/service/recertification.php">(Re)Certification</a></li>
            <li><a href="/service/maintenance.php">Maintenance</a></li>
            <li><a href="/service/renovations.php">Renovations</a></li>
          </ul>
        </li>
        <li><a href="/updates/index.php"<?php echo nav_current('updates', $activeSection); ?>>Updates</a></li>
        <li class="has-dropdown">
          <a href="/about/index.php"<?php echo nav_current('about', $activeSection); ?>>About</a>
          <ul class="dropdown">
            <li><a href="/about/index.php">About us</a></li>
            <li><a href="/about/quality.php">Quality</a></li>
            <li><a href="/about/history.php">History</a></li>
          </ul>
        </li>
        <li><a href="/careers.php"<?php echo nav_current('careers', $activeSection); ?>>Careers</a></li>
        <li><a href="/contact.php"<?php echo nav_current('contact', $activeSection); ?>>Contact</a></li>
      </ul>
    </nav>

    <div class="header-cta">
      <a href="/contact.php" class="btn btn-accent">Contact</a>
    </div>
  </div>
</header>
<main>
