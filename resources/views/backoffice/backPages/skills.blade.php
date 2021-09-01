
@extends('backoffice.backTemplate.main')


@section('backContent')
  
  <!-- ======= Skills Section ======= -->
    
  
  <section id="skills" class="skills section-bg">
    <div class="container">
      
      <div class="section-title">
        <h2>Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      
      <div class="row skills-content">
        
        @for ($i = 3,$j=0;$i<=$count;$i+=3, $j+=3)
        <div class="col-lg-6" data-aos="fade-up">
          @foreach ($skills as $data )
          @if ($data->id > $j && $data->id<=$i)
  
          <div class="container m-5">
            <div class="progress">
              <span class="skill">{{$data->tech}} <i class="val ">{{$data->val}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="container  d-flex justify-content-center">
    
              <a href="{{route('showSkill',$data->id)}}" class="btn btn-info mx-auto">SHOW</a>
            </div>
          </div> 
          @endif
            @endforeach
          
        </div>
        @endfor
      </div>


   
            {{-- <div class="progress">
              <span class="skill">{{$data->skill2}} <i class="val">{{$data->val2}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val2}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill">{{$data->skill3}} <i class="val">{{$data->val3}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val3}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">{{$data->skill4}} <i class="val">{{$data->val4}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val4}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$data->skill5}} <i class="val">{{$data->val5}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val5}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$data->skill6}} <i class="val">{{$data->val6}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->valBar6}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div> --}}
      
    </section><!-- End Skills Section -->
@endsection   
   