@extends('layouts.app')
@section('content')
<section class="services-list">
  <div class="wrapper">
    <h1 class="page-title">Services</h1>
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
    <ul class="grid">
      @while (have_posts()) @php the_post() @endphp
      <li class="grid-item box-container">
        @include('partials.content-'.get_post_type())
      </li>
      @endwhile
    </ul>
    {!! get_the_posts_navigation() !!}
  </div>
</section>
@include('partials/contact')
@endsection
