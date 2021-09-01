
@extends('backoffice.backTemplate.main')


@section('backContent')
  
<!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="container d-flex justify-content-center w-100 border border-danger">

        <div class="row">
            @foreach ($services as $data)
                
            <div class="col-lg-4 col-md-6 icon-box border border-secondary m-3" data-aos="fade-up">
              <div class="icon"><i class="{{$data->icon}}"></i></div>
              <h4 class="title"><a href="">{{$data->title}}</a></h4>
              <p class="description">{{$data->description}}</p>
              <div class="container  d-flex justiify-content-center">
  
                <a href="{{route('showService',$data->id)}}" class="btn btn-info mx-auto">SHOW</a>
              </div>
            </div>
            @endforeach
  
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->
@endsection  
  
  