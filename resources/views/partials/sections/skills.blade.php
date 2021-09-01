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
  

            <div class="progress">
              <span class="skill">{{$data->tech}} <i class="val ">{{$data->val}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$data->val}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

 
          @endif
            @endforeach
          
        </div>
        @endfor
      </div>


   

      
    </section><!-- End Skills Section -->