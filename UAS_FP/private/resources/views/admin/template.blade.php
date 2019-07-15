<!DOCTYPE html>
<html lang="en">
 @include('admin.partial.head')
 @include('admin.partial.nav')
 @include('admin.partial.sidebar')
 @include('admin.partial.header')
 @yield('content')

 <body id="mimin" class="dashboard">

    <!-- start: Javascript -->
    <script src="{{asset('public/template/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/template/js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('public/template/js/bootstrap.min.js')}}"></script>
   
    
    <!-- plugins -->
    <script src="{{asset('public/template/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/chart.min.js')}}"></script>

     <script src="{{asset('public/template/js/main.js')}}"></script>

  <!-- end: Javascript -->
  
 </body>
</html>