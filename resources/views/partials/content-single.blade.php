<article @php post_class() @endphp>
  <div class="wrapper">
    <header>
      <h1 class="entry-title">Services</h1>
      @include('partials/entry-meta')
    </header>
    <div class="entry-content">
      @php the_content() @endphp
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
