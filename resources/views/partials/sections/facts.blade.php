    <!-- ======= Facts Section ======= -->
    
    @foreach ($facts as $data )
      
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>{{$data->titre_h2}}</h2>
          <p>{{$data->p_description}}</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">{{$data->span1}}</span>
              <p><strong>{{$data->strong1}}</strong> {{$data->p1}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">{{$data->span2}}</span>
              <p><strong>{{$data->strong2}}</strong>{{$data->p2}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">{{$data->span3}}</span>
              <p><strong>{{$data->strong3}}</strong> {{$data->p3}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">{{$data->span4}}</span>
              <p><strong>{{$data->strong4}}</strong> {{$data->p4}}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->
    @endforeach