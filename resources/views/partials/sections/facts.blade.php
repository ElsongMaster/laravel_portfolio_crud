   <section id="facts" class="facts">
  <div class="container">
    
    <div class="section-title">
      <h2>Facts</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    
    <div class="row no-gutters ">
      
      @foreach ($facts as $data )
      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="{{$data->delay}}">
        <div class="count-box">
          <i class="{{$data->icon}}"></i>
          <span data-toggle="counter-up">{{$data->span}}</span>
          <p><strong>{{$data->p_strong}}</strong> {{$data->p}}</p>

        </div>
      </div>
       @endforeach


     </div>

   </div>
 </section><!-- End Facts Section -->