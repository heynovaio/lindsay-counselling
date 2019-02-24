{{--
  Template Name: Contact
--}}

@extends('layouts.app')
@section('content')
<section class="title-heading box-container">
  <div class="wrapper">
     <h1>{{ get_the_title() }}</h1>
  </div>
</section>
<div class="meta-content">

</div>
@include('partials/contact')
@endsection
