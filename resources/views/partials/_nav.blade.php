    <header class="header fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">
              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="#banner"><img id="logo" src="images/profile_img.jpg" alt="Worthy"></a>
              </div>
              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="#banner">Peter Leyva</a></div>
                <div class="site-slogan">Web Developer <!--<a target="_blank" href="http://htmlcoder.me">HtmlCoder</a> --></div>
              </div>
            </div>
            <!-- header-left end -->
          </div>
          <div class="col-md-8">
            <!-- header-right start -->
            <!-- ================ -->
            <div class="header-right clearfix">
              <!-- main-navigation start -->
              <!-- ================ -->
              <div class="main-navigation animated">
                <!-- navbar start -->
                <!-- ================ -->
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#banner">Inicio</a></li>
                        <li><a href="#about">Acerca De</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#portfolio">Portafolio</a></li>
                        {{-- <li><a href="#clients">Clientes</a></li> --}}
                        <li><a href="#contact">Contacto</a></li>
                        @if (Auth::check())
                        <li class="dropdown">
                        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="{{ url('/themes/create') }}">Themes</a></li>
                          <li><a href="{{ route('categories.index') }}">Categories</a></li>
                          <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout</a></li>
                          </ul>
                           </li>
                        @else
                          <li><a href="#" data-toggle="modal" data-target="#login-modal">Login <i class="glyphicon glyphicon-user"></i></a></li>
                        @endif
                      </ul>                      
                    </div>
                  </div>
                </nav>                
                <!-- navbar end -->
              </div>
              <!-- main-navigation end -->              
            </div>
            <!-- header-right end -->
          </div>
        </div>
      </div>
    </header>
        <!-- banner start -->
    <!-- ================ -->
    <div id="banner" class="banner">
      <div class="banner-image"></div>
      <div class="banner-caption">
        <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1 object-non-visible" data-animation-effect="zoomIn">
                <h2 class="text-center">Desarrollador de Paginas <span>Web</span></h2>
                <p class="lead text-center">Innovando con la tecnologia mas actual, diseños de paginas muy vistosas rapidas y economicas para su negocio.</p>
              </div>
            </div>
          </div>
        </div>
      </div>    
    <!-- banner end -->

    <!-- Init Modal Login -->
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to Your Account</h1><br>
          {{-- <form> --}}
          <input type="text" name="email" placeholder="Email" id="email">
          <input type="password" name="password" placeholder="Password" id="password">
          {{-- <input type="submit" name="login" class="login loginmodal-submit" value="Login"> --}}
          <button type="submit" name="login" class="btn btn-primary btn-block" id="modal-login">Login</button>
          {{-- </form> --}}
          
          <div class="login-help">
          <a href="{{ url('register') }}">Register</a> - <a href="#">Forgot Password</a>
          </div>
        </div>
    </div>
 </div>

 <form id="logout-form" action="{{ url('/logout') }}" method="POST">
  {{ csrf_field() }}
<!--  <button type="submit" class="btn btn-success btn-lg btn-block" style="margin-top: 20px">LogOut</button> -->
</form>
 <script>
    var token = '{{ Session::token() }}';
    var url = '{{ route('login') }}';
 </script>