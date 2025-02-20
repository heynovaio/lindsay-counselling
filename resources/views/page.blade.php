

<?php
  $section_title_1 = get_field('section_title_1');
  $section_content_1 = get_field('section_content_1');
  $section_img_1 = get_field('section_img_1');
  $section_title_2 = get_field('section_title_2');
  $section_content_2 = get_field('section_content_2');
  $section_img_2 = get_field('section_img_2');
  $section_title_3 = get_field('section_title_3');
  $section_content_3 = get_field('section_content_3');
  $section_img_3 = get_field('section_img_3');
?>
@extends('layouts.app')
@section('content')
<section class="title-heading box-container">
  <div class="wrapper">
     <h1>{{ get_the_title() }}</h1>
  </div>
</section>
<div class="meta-content">
  <?php if( $section_content_1 ): ?>
  <section class="section-1">
    <div class="wrapper">
      <div class="grid">
        <?php if( $section_img_1 ): ?>
        <div class="box-container">
        <?php endif; ?>
          <div class="inner-container">
            <h2><?= $section_title_1; ?></h2>
            <div><?= $section_content_1; ?></div>
          </div>
        <?php if( $section_img_1 ): ?>
        </div>
        <div class="img-container">
          <img src="<?= $section_img_1; ?>">
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php if( $section_content_2 ): ?>
  <section class="section-2">
    <div class="wrapper">
      <div class="grid">
        <?php if( $section_img_2 ): ?>
        <div class="box-container">
          <?php endif; ?>
          <div class="inner-container">
            <h2><?= $section_title_2; ?></h2>
            <div><?= $section_content_2; ?></div>
          </div>
          <?php if( $section_img_2 ): ?>
        </div>
        <div class="img-container">
          <img src="<?= $section_img_2; ?>">
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="section-3">
    <div class="wrapper">
    	<?php if( $section_content_3 ): ?>
      	<div class="copy-container">
          <div class="inner-container">
            <h2><?= $section_title_3; ?></h2>
            <div><?= $section_content_3; ?></div>
            <a href="#book" class="btn book-btn">Book a Free Consultation</a>
          </div>
      	</div>
    	<?php endif; ?>
    </div>
  </section>
 </div>
@include('partials/contact')
@endsection
