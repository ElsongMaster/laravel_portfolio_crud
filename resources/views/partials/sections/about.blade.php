    <!-- ======= About Section ======= -->

    @foreach ( $abouts as $data)
        
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{asset('assets/img/'.$data->img)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{$data->h3}}</h3>
            <p class="font-italic">
              {{$data->p2}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$data->birthday}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$data->website}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$data->phone}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$data->city}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$data->age}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$data->degree}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$data->email}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$data->freelance}}</li>
                </ul>
              </div>
            </div>
            <p>
              {{$data->p3}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    @endforeach