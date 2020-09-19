<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
      <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>
      <!-- myCSS-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- <title>PT Bina San Prima</title> -->
      @yield('title')
</head>
<body id="home" class="scrollspy">


@include('bspthemes.header')

<div class="main">
    @yield('content')
</div>
@include('bspthemes.footer')



<!--JavaScript at end of body for optimized loading-->
      
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
<script scr="{{asset('js/jQuery-3.0.js')}}"></script>
      <script src="{{asset('js/materialize.min.js')}}"></script>
      <script>  
          const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);     

          const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider, {
             indicators: false,
             height: 500,
             transition: 600,
             interval: 3000
          });                

          const parallax= document.querySelectorAll('.parallax');
          M.Parallax.init(parallax);

          const materialbox= document.querySelectorAll('.materialboxed');
          M.Materialbox.init(materialbox);

          const scroll = document.querySelectorAll('.scrollspy');
          M.ScrollSpy.init(scroll, {
            scrollOffset: 50
          });
      </script>
      <script>
           /*
            $(document).ready(function() {
               $(".dropdown-trigger").dropdown();
            });*/
            const dropdownElement= document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdownElement, {
              coverTrigger :false,
              constrainWidth: false,
              hover:true
              
            });


            const dropdownElement2= document.querySelectorAll('.dropdown-trigger2');
            M.Dropdown.init(dropdownElement2, {
              coverTrigger :false,
              constrainWidth: false,
              hover:true 
            });
      </script>
</body>
</html>