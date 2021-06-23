@extends('master')
@section('content')


  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
           
            <br/>
            <br/>
            <br/>
            <form action="/enter_timetable" method="post" enctype="multipart/form-data">
            
              @if ($errors->any())
              <div >
                  <ul class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <div style="margin: 30px;">
              @if( Session::has('flash') )
                  <div class="alert alert-danger">
                      {{ Session::get('flash') }}
                  </div>
              @endif
          </div>
             {{ csrf_field() }}


            <div class="form-group">
              
            </div>
            <div class="form-group">
              <select class="custom-select form-control form-control-use" name="class">
                <option value="0">Class:</option>
                <option value="ND1">ND1</option>
                <option value="ND2">ND2</option>
                <option value="HND1">HND1</option>
                <option value="HND2">HND2</option>              
              </select>
            </div>
            <div class="form-group">
              <input type="" name="satrt" class="form-control form-control-user" placeholder="Starting Time">
            </div>
            <div class="form-group">
              <input type="" name="end" class="form-control form-control-user" placeholder="End Time">
            </div>
            <div class="form-group">
              <input type="" name="course" class="form-control form-control-user" placeholder="Ccourse">
            </div>
            <div class="form-group">
        
              <select class="custom-select form-control form-control-use" name="day">
                <option value="0">Day:</option>
                <option value="monday">monday</option>
                <option value="tuesday">tuesday</option>
                <option value="wedsday">Wedsday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
               
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
             Submit
            </button>
    

          </form>
          <hr>
          
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- #about -->
  </main>
@stop

@section('title')
    landing Page
@stop
