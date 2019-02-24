<footer class="content-info">
  <div class="container grid">
  	 <a class="brand" id="title" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    @php dynamic_sidebar('sidebar-footer') @endphp
	 <nav class="nav-primary navbar">
	    @if (has_nav_menu('primary_navigation'))
	      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	    @endif
	  </nav>
	  <p class="copyright">&copy; copyright <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
  </div>

</footer>
