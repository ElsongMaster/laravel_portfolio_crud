@extends('template.main')




@section('content')
<main id="main">
@include('partials.sections.about')
@include('partials.sections.facts')
@include('partials.sections.skills')
@include('partials.sections.portfolio')
@include('partials.sections.services')
@include('partials.sections.contact')
  </main><!-- End #main -->
@endsection