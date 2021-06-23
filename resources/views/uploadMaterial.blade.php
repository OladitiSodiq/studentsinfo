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
            <form action="/uploadMaterial" method="post" enctype="multipart/form-data">
            
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
              <input type="" name="course" class="form-control form-control-user" placeholder="course">
            </div>
          
            <div class="form-group">
        
                <select class="custom-select form-control form-control-use" name="level">
                  <option value="0">Select Level:</option>
                  <option value="ND1">ND 1</option>
                  <option value="ND2">ND 2</option>
                  <option value="HND1">HND 1</option>
                  <option value="HND2">HND 2</option>
                 
                </select>
              </div>
            
              <div class="form-group">
                <input type="file" name="file" class="form-control form-control-user" placeholder="File">
              </div>
            <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
             Submit
            </button>
    

          </form>
          <hr>
          
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- #about -->
  </main>
@stop

@section('title')
    landing Page
@stop
