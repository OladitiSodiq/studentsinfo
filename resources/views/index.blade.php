@extends('master')
@section('content')
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/Untitled (2).svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>Quality </span><br> IT Education here in Computer Science Department!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    @if((Session::get('role') ) =='1000' ) )
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Students Page </h3>

          <p>What Students Can do. !!!</p>

         >
       
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <p>Checking of Class Timetable by clicking on "Check Time Table"</p>
             
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.22s">
              <p>Checking of Course Materials by clicking on "Download Mmaterial"</p>
              <p>Uploaded by lecturer taking the course</p>
            </div>
          
            <div class="icon-box wow fadeInUp" data-wow-delay="0.24s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="/stimetable">Check Timetable</a></h4>
             
            </div>

            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.26s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="/viewMaterial">Download Material</a></h4>
             
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.26s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="/profile">View Profile</a></h4>
             
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/st.jpg" class="img-fluid" alt="">
          </div>
        </div>

      

      </div>
    </section><!-- #about -->
    @endif

    @if((Session::get('role') ) =='1001' ) )
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Lectuer Page</h3>
          <p>How our lecturer page works !!!</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
             Being a lecture ,you can Enter lecture timetable,Upload Materials for students, also view the timetable entered and view the uploaded materials
            </p>

            
             <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="/enter_timetable">Enter lecture Timetable</a></h4>
             
            </div>

           
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="/uploadMaterial">Upload Material</a></h4>
             
            </div>
          
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="/lecturerTimetable">Check Your Timetable</a></h4>
             
            </div>

            
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="/viewMaterialstl">View uploaded Material</a></h4>
             
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/le.jpg" class="img-fluid" alt="">
          </div>
        </div>

      

      </div>
    </section><!-- #about -->
    @endif

   
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Meet Our Lectures</h3>
        
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/mora.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mrs.Moradeyo</h4>
                  <span>Head Of Department</span>
                  <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/moradeyo.tomi"><i class="fa fa-facebook"></i></a>
                  
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/ojo.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr Ojoawo</h4>
                  <span>Lecturer</span>
                  <div class="social">
            
                    <a href=""><i class="fa fa-facebook"></i></a>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/sho.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr Shonubi</h4>
                  <span>Course Adviser</span>
                  <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/bodeolawale"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/ola.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mrs.Olaniyan</h4>
                  <span>Lecturer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

 

  </main>
@stop

@section('title')
    landing Page
@stop
