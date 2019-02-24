<header class="banner">
  <a class="brand" id="title" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
  <nav class="nav-primary navbar">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
    <a href="#book" class="btn book-btn">Book a Free Consult</a>
  </nav>
</header>

<div id="nav-icon3">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
