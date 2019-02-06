<?php
  $what_title = get_field('what_title');
  $what_content = get_field('what_content');
  $why_title = get_field('why_title');
  $why_content = get_field('why_content');
  $services_title = get_field('services_title');
  $services_content = get_field('services_content');
?>

<section class="heading">
  <div class="wrapper">
    <h1>{{ get_the_title() }}</h1>
  </div>
</section>

<section class="what">
  <div class="wrapper">
  <?php if( $what_content ): ?>
    <h2><?= $what_title; ?></h2>
    <div><?= $what_content; ?></div>
  <?php endif; ?>
  </div>
</section>
<section class="why">
  <div class="wrapper">
  <?php if( $why_content ): ?>
    <h2><?= $why_title; ?></h2>
    <div><?= $why_content; ?></div>
  <?php endif; ?>
  </div>
</section>
<section class="services">
  <div class="wrapper">
  <?php if( $services_content ): ?>
    <h2><?= $services_title; ?></h2>
    <div><?= $services_content; ?></div>
  <?php endif; ?>
  </div>
</section>
