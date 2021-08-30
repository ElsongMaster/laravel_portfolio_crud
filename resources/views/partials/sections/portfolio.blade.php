    <!-- ======= Portfolio Section ======= -->
   
   @foreach ($portfolios as $data )
       
   @endforeach
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{$data->titre_h2}}</h2>
          <p>{{$data->p_description}}</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">{{$data->ul_li1}}</li>
              <li data-filter=".filter-app">{{$data->ul_li2}}</li>
              <li data-filter=".filter-card">{{$data->ul_li3}}</li>
              <li data-filter=".filter-web">{{$data->ul_li4}}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img1)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img1)}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img2)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img2)}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img3)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img3)}}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img4)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img4)}}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img5)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img5)}}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img6)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img6)}}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img7)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img7)}}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img8)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img8)}}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('assets/img/portfolio/'.$data->img9)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/portfolio/'.$data->img9)}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->