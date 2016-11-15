<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>


    
      {{-- @include('partials._messages') --}}

      <!-- {{ Auth::check() ? "Logged In" : "Log Out" }} -->

      @yield('content')

          <!-- footer start -->
    <!-- ================ -->
  
    {{-- <footer id="footer">       --}}
      @yield('footer')      
      {{-- @include('partials._footer') --}}
    {{-- </footer> --}}

  
  
    
    <!-- footer end -->
    
  </body>
  @include('partials._javascript')
    @yield('scripts')
</html>