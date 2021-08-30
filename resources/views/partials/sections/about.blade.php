    <!-- ======= About Section ======= -->

    @foreach ( $abouts as $data)
        
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>{{$data->titre_h2}}</h2>
          <p>{{$data->p_description}}</p>
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
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul1_li1_strong}}</strong> {{$data->ul1_li1}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul1_li2_strong}}</strong> {{$data->ul1_li2}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul1_li3_strong}}</strong> {{$data->ul1_li3}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul1_li1_strong}}</strong> {{$data->ul1_li4}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul2_li1_strong}}</strong> {{$data->ul2_li1}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul2_li1_strong}}</strong> {{$data->ul2_li2}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul2_li1_strong}}</strong> {{$data->ul2_li3}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{$data->ul2_li1_strong}}</strong> {{$data->ul2_li4}}</li>
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