<?php
/**
 * Shared market page template — include after setting $market.
 * Structure per CONTENT-BRIEF.md §4.2.
 *
 * $market = [
 *   'name'             => 'Diving',
 *   'intro'            => ['paragraph one', 'paragraph two'],
 *   'productOptions'   => ['item', ...],
 *   'applicationAreas' => ['item', ...],
 *   'envSpecs'         => ['item', ...],
 *   'standards'        => ['item', ...],
 *   'narrative'        => [['heading' => '...', 'body' => '...'], ...],
 *   'ctaLine'          => "Let's build it—together.",
 * ];
 */

$market = array_merge([
    'name' => 'Market',
    'intro' => [],
    'productOptions' => [],
    'applicationAreas' => [],
    'envSpecs' => [],
    'standards' => [],
    'narrative' => [],
    'ctaLine' => "Let's build it—together.",
], $market ?? []);

$pageTitle = $market['name'] . ' | Markets | Hytech-Pommec';
$activeSection = 'markets';

function market_list($title, $items) {
    echo '<div>';
    echo '<h2>' . htmlspecialchars($title) . '</h2>';
    if (empty($items)) {
        echo '<p class="placeholder-note">Content for this section will be added in the Markets phase.</p>';
    } else {
        echo '<ul>';
        foreach ($items as $item) {
            echo '<li>' . htmlspecialchars($item) . '</li>';
        }
        echo '</ul>';
    }
    echo '</div>';
}

require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">Markets</span>
    <h1><?php echo htmlspecialchars($market['name']); ?></h1>
    <?php if (empty($market['intro'])): ?>
      <p class="placeholder-note">Intro copy for this market will be added in the Markets phase.</p>
    <?php else: ?>
      <?php foreach ($market['intro'] as $paragraph): ?>
        <p><?php echo htmlspecialchars($paragraph); ?></p>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="container two-col">
    <?php market_list('Product options for ' . $market['name'], $market['productOptions']); ?>
    <?php market_list('Application areas', $market['applicationAreas']); ?>
  </div>
</section>

<section class="section">
  <div class="container two-col">
    <?php market_list('Environmental specs', $market['envSpecs']); ?>
    <?php market_list('Standards & certifications', $market['standards']); ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php if (empty($market['narrative'])): ?>
      <p class="placeholder-note">High standards / safety narrative for this market will be added in the Markets phase.</p>
    <?php else: ?>
      <?php foreach ($market['narrative'] as $block): ?>
        <h2><?php echo htmlspecialchars($block['heading']); ?></h2>
        <p><?php echo htmlspecialchars($block['body']); ?></p>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2><?php echo htmlspecialchars($market['ctaLine']); ?></h2>
    <p class="placeholder-note">Contact form block will be added here in the Markets phase.</p>
    <a href="/contact.php" class="btn btn-accent">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
