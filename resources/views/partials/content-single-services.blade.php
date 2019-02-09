<?php
  $what_title = get_field('what_title');
  $what_content = get_field('what_content');
  $what_img = get_field('what_img');
  $why_title = get_field('why_title');
  $why_content = get_field('why_content');
  $why_img = get_field('why_img');
  $services_title = get_field('services_title');
  $services_content = get_field('services_content');
  $services_img = get_field('services_img');
?>

<section class="heading">
  <div class="bound-box">
    <div class="wrapper">
      <div class="grid">
        <div class="box-container">
          <div class="breadcrumb"><?php the_breadcrumb(); ?></div>
          <h1>{{ get_the_title() }}</h1>
          <p>{{ get_the_excerpt() }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="what">
  <div class="wrapper">
    <div class="grid">
      <div class="box-container">
      <?php if( $what_content ): ?>
        <h2><?= $what_title; ?></h2>
        <div><?= $what_content; ?></div>
      <?php endif; ?>
      </div>
      <div class="img-container">
        <?php if( $what_img ): ?>
          <img src="<?= $what_img; ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="why">
  <div class="wrapper">
    <div class="grid">
      <div class="box-container">
      <?php if( $why_content ): ?>
        <h2><?= $why_title; ?></h2>
        <div><?= $why_content; ?></div>
      <?php endif; ?>
      </div>
      <div class="img-container">
        <?php if( $why_img ): ?>
          <img src="<?= $why_img; ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="services">
  <div class="wrapper">
    <div class="grid">
      <div class="copy-container">
        <?php if( $services_content ): ?>
          <h2><?= $services_title; ?></h2>
          <div><?= $services_content; ?></div>
        <?php endif; ?>
        <a href="#" class="btn">Book a Free Consultation</a>
      </div>
      <div class="img-no-box">
        <img src="@asset('images/tree.png')">
      </div>
    </div>
  </div>
</section>
