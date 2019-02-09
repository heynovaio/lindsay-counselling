<article @php post_class() @endphp>
	<a href="{{ get_permalink() }}">
  <h2 class="entry-title">
  {{ get_the_title() }}</h2>
    @php the_excerpt() @endphp
  </a>
</article>
