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
            <form action="/login" method="post">
            
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
              <input type="" name="matricNo" class="form-control form-control-user" placeholder="Enter Matric No...">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
             Submit
            </button>
    

          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="/register">Sign-Up</a>
          </div>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/lg.jpeg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- #about -->
  </main>
@stop

@section('title')
    landing Page
@stop
