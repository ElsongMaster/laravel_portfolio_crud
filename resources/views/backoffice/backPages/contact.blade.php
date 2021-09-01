   
@extends('backoffice.backTemplate.main')


@section('backContent')
 <!-- ======= Contact Section ======= -->
   @foreach ( $contacts as $data)


       
   <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row d-flex justify-content-center align-items-center mt-5" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location</h4>
                <p>{{$data->info}}</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email</h4>
                <p>{{$data->email}}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call</h4>
                <p>{{$data->phone_number}}</p>
              </div>
              <div class="container  d-flex justiify-content-center">
  
                <a href="{{route('showContact',$data->id)}}" class="btn btn-info p-3  mx-auto">SHOW</a>
              </div>
            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Contact Section -->
   @endforeach

@endsection
   
