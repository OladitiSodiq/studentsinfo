<header id="header" class="fixed-top">
  <div class="container">

    <div class="logo float-left">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
      <a href="#intro" class="scrollto"><img src="img/logo.jpg" alt="" class="img-fluid"></a>
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="/">Home</a></li>
        @if(!Session::get('username'))
     
            
            <li><a href="/login">Students</a></li>
            <li><a href="/login">Lecturer</a></li>
          
            <li><a href="/register">Register</a></li>
        @endif

        @if(Session::get('username'))
          @if((Session::get('role') ) =='student')
          <li><a href="#portfolio">Students</a></li>
          @endif

          @if((Session::get('role')) =='lecturer')
          <li><a href="#team">Lecturer</a></li>
          @endif

          <li class="drop-down"><a href="">{{ Session::get('username') }}</a>
            <ul>
              <li><a href="/logout">LogOut</a></li>
            
            </ul>
          </li>
        @endif
      </ul>
    </nav><!-- .main-nav -->
    
  </div>
</header>
