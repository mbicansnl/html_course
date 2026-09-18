<?php
$pageTitle = 'Markets | Hytech-Pommec';
$activeSection = 'markets';
require __DIR__ . '/../includes/header.php';

$markets = [
    'Diving' => '/markets/diving.php',
    'Medical' => '/markets/medical.php',
    'Governmental' => '/markets/governmental.php',
    'Life support' => '/markets/life-support.php',
    'Yachting' => '/markets/yachting.php',
    'Tunnelling' => '/markets/tunnelling.php',
];
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Markets</span>
    <h1>Solutions across every market we serve</h1>
    <p>Hytech-Pommec designs, builds and maintains hyperbaric and diving systems for six core markets.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <ul>
      <?php foreach ($markets as $name => $url): ?>
        <li><a href="<?php echo $url; ?>"><?php echo htmlspecialchars($name); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
