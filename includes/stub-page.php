<?php
/**
 * Renders a minimal placeholder page: header, hero with heading + note, footer.
 * Call render_stub_page() with the fields below, then stop — it prints the
 * full page and returns.
 *
 * $args = [
 *   'title'         => 'Products',          // <h1>
 *   'eyebrow'       => 'Products',          // small label above heading
 *   'activeSection' => 'products',
 *   'phase'         => 'Products',          // build phase that will fill this page in
 *   'links'         => ['Chambers' => '/products/chambers.php', ...], // optional sub-nav list
 * ];
 */
function render_stub_page($args) {
    $title = $args['title'];
    $eyebrow = $args['eyebrow'] ?? $title;
    $phase = $args['phase'] ?? $title;
    $links = $args['links'] ?? [];

    $pageTitle = $title . ' | Hytech-Pommec';
    $activeSection = $args['activeSection'] ?? '';

    require __DIR__ . '/header.php';
    ?>
    <section class="page-hero">
      <div class="container">
        <span class="eyebrow"><?php echo htmlspecialchars($eyebrow); ?></span>
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <p class="placeholder-note">
          Content for this page will be written in the <?php echo htmlspecialchars($phase); ?> phase.
        </p>
      </div>
    </section>

    <?php if (!empty($links)): ?>
    <section class="section">
      <div class="container">
        <ul>
          <?php foreach ($links as $label => $url): ?>
            <li><a href="<?php echo $url; ?>"><?php echo htmlspecialchars($label); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <?php endif; ?>

    <?php
    require __DIR__ . '/footer.php';
}
