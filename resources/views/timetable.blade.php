@extends('master')
@section('content')


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Schedule Template | CodyHouse</title>
</head>
<body>
  <header class="cd-main-header text-center flex flex-column flex-center">
    <p class="margin-top-md margin-bottom-xl">👈 </p>

    <h1 class="text-xl">{{ Session::get('class') }}    Lecture Time table</h1>
  </header>

 
   
     
    
    <br/>
  
  <div style="background-image: url('');" class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule" >
    <div class="cd-schedule__timeline">
      <ul>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>13:00</span></li>
        <li><span>13:30</span></li>
        <li><span>14:00</span></li>
        <li><span>14:30</span></li>
        <li><span>15:00</span></li>
        <li><span>15:30</span></li>
        <li><span>16:00</span></li>
        <li><span>16:30</span></li>
        <li><span>17:00</span></li>
        <li><span>17:30</span></li>
        <li><span>18:00</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->
  
    <div class="cd-schedule__events">
      <ul>
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Monday</span></div>
  
          <ul>  
            @foreach($monday as $mondays)
            <li class="cd-schedule__event">
              <a data-start="{{$mondays->satrt}}" data-end="{{$mondays->end}}" data-content="{{$mondays->course}} {{$mondays->lecturerName}}" data-event="event-1" href="#0">
                <em class="cd-schedule__name"> {{$mondays->course}} {{$mondays->lecturerName}}</em>
              </a>
            </li>
  
            {{-- <li class="cd-schedule__event">
              <a data-start="12:00" data-end="13:30" data-content="event-rowing-workout" data-event="event-2" href="#0">
                <em class="cd-schedule__name">Rowing Workout</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3" href="#0">
                <em class="cd-schedule__name">Yoga Level 1</em>
              </a>
            </li> --}}
            @endforeach
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>
  
          <ul>
            @foreach($tuesday as $tuesdays)
          
       
            <li class="cd-schedule__event">
             
              <a data-start="{{$tuesdays->satrt}}" data-end="{{$tuesdays->end}}" data-content="{{$tuesdays->course}} {{$tuesdays->lecturerName}} " data-event="event-2" href="#0">
                <em class="cd-schedule__name">{{$tuesdays->course}} {{$tuesdays->lecturerName}}</em>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Wednesday</span></div>
  
          <ul>
            @foreach($wedsday as $wedsdays)
          
       
          <li class="cd-schedule__event">
         
            <a data-start="{{$wedsdays->satrt}}" data-end="{{$wedsdays->end}}" data-content="{{$wedsdays->course}} {{$wedsdays->lecturerName}}" data-event="event-3" href="#0">
              <em class="cd-schedule__name">{{$wedsdays->course}} {{$wedsdays->lecturerName}}</em>
            </a>
          </li>
          @endforeach
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Thursday</span></div>
  
          <ul>
            @foreach($thursday as $thursdays)
          
       
            <li class="cd-schedule__event">
           
              <a data-start="{{$thursdays->satrt}}" data-end="{{$thursdays->end}}" data-content="{{$thursdays->course}} {{$thursdays->lecturerName}}" data-event="event-1" href="#0">
                <em class="cd-schedule__name">{{$thursdays->course}} {{$thursdays->lecturerName}}</em>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Friday</span></div>
  
          <ul>
            @foreach($friday as $fridays)
          
       
            <li class="cd-schedule__event">
           
              <a data-start="{{$fridays->satrt}}" data-end="{{$fridays->end}}" data-content="{{$fridays->course}} {{$fridays->lecturerName}}" data-event="event-4" href="#0">
                <em class="cd-schedule__name">{{$fridays->course}} {{$fridays->lecturerName}}</em>
              </a>
            </li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/main.js"></script>
</body>
</html>



@stop

@section('title')
    landing Page
@stop

