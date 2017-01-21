@extends('layout.master')
@section('title','| Proto')

@section('content')

<!-- NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>        
        <li><a href="#">Contact</a></li>        
        <li>
          <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
              <div class="jp-type-single">
                <div class="jp-gui jp-interface">
                  <div class="jp-volume-controls">
                    <button class="jp-mute" role="button" tabindex="0">mute</button>
                    <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                    <div class="jp-volume-bar">
                      <div class="jp-volume-bar-value"></div>
                    </div>
                  </div>
                  <div class="jp-controls-holder">
                    <div class="jp-controls">
                      <button class="jp-play" role="button" tabindex="0">play</button>
                      <button class="jp-stop" role="button" tabindex="0">stop</button>
                    </div>
                    <div class="jp-progress">
                      <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                      </div>
                    </div>
                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                    <div class="jp-toggles">
                      <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                    </div>
                  </div>
                </div>
                <div class="jp-details">
                  <div class="jp-title" aria-label="title">&nbsp;</div>
                </div>
                <div class="jp-no-solution">
                  <span>Update Required</span>
                  To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
          </div>
        </li>        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR-->

<div class="container-fluid text-center">
  <div class="row content">

    <!-- LEFT SIDEBAR -->
      <div class="col-sm-1 sidenav">
        <div class="well">
          <div class="filters text-center">
            <ul class="nav nav-pills">
              <li class="active"><a href="#" data-filter="*">*</a></li>
              <li><a href="#" data-filter=".A">A</a></li>
              <li><a href="#" data-filter=".B">B</a></li>
              <li><a href="#" data-filter=".C">C</a></li>
              <li><a href="#" data-filter=".D">D</a></li>
              <li><a href="#" data-filter=".E">E</a></li>
              <li><a href="#" data-filter=".F">F</a></li>
              <li><a href="#" data-filter=".G">G</a></li>
              <li><a href="#" data-filter=".H">H</a></li>
              <li><a href="#" data-filter=".I">I</a></li>
              <li><a href="#" data-filter=".J">J</a></li>
              <li><a href="#" data-filter=".K">K</a></li>
              <li><a href="#" data-filter=".L">L</a></li>
              <li><a href="#" data-filter=".M">M</a></li>
            </ul>
          </div>
        </div>
      </div>
    <!-- END LEFT SIDEBAR -->

    <!-- CONTENT -->
      <div class="col-sm-7 text-left">
        <!-- TABS CONTENT -->
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-music"></i> Music</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-microphone"></i> Karaoke</a></li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a></li>    
            <li><label>Filter:</label></li>    
            <select></select>
          </ul>
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <div class="container">
                <div class="section">
                  <!-- ISOTOPE -->
                    <div class="isotope-container row grid-space-20">
                                       
                      <div class="col-sm-6 col-md-3 isotope-item M">
                        <div class="image-box">
                          <div class="overlay-container">                          
                            <kbd>Metalica</kbd>
                            <div class="row">
                              <div class="col-sm-4">
                                <img src={{ asset("images/metallica.jpg") }} alt="" class="img-rounded">
                              </div>
                              <div class="col-sm-8">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>SONG</th>                              
                                    </tr>
                                  </thead>
                                  <tbody>                                                                      
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Master of pupptes</td>
                                    </tr>                                                              
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <a class="overlay" data-toggle="modal" data-target="#project-1">
                              <i class="fa fa-search-plus"></i>
                              <span>Metallica</span>
                            </a>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="project-1-label">Metallica</h4>
                              </div>
                              <div class="modal-body">
                                <h3>Kill Em All</h3>
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src={{ asset("images/metallica.jpg") }} alt="">
                                  </div>
                                  <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                    <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>                                    
                                  </div>                                  
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal end -->
                      </div>                      
                      <div class="col-sm-6 col-md-3 isotope-item B">
                        <div class="image-box">
                          <div class="overlay-container">
                            <div class="row">
                              <div class="col-sm-4">
                                <img src={{ asset("images/metallica.jpg") }} alt="">
                              </div>
                              <div class="col-sm-8">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>SONG</th>                              
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">6</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">7</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">8</th>
                                      <td>Larry</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 isotope-item C">
                        <div class="image-box">
                          <div class="overlay-container">
                            <div class="row">
                              <div class="col-sm-4">
                                <img src={{ asset("images/metallica.jpg") }} alt="">
                              </div>
                              <div class="col-sm-8">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>SONG</th>                              
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">6</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">7</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">8</th>
                                      <td>Larry</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 isotope-item D">
                        <div class="image-box">
                          <div class="overlay-container">
                            <div class="row">
                              <div class="col-sm-4">
                                <img src={{ asset("images/metallica.jpg") }} alt="">
                              </div>
                              <div class="col-sm-8">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>SONG</th>                              
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">6</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">7</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">8</th>
                                      <td>Larry</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 isotope-item E">
                        <div class="image-box">
                          <div class="overlay-container">
                            <div class="row">
                              <div class="col-sm-4">
                                <img src={{ asset("images/metallica.jpg") }} alt="">
                              </div>
                              <div class="col-sm-8">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>SONG</th>                              
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">6</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">7</th>
                                      <td>Larry</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">8</th>
                                      <td>Larry</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- END ISOTOPE -->
                </div>
              </div>
            </div>
          </div>
        <!-- END TABS CONTENT -->
      </div>
    <!-- END CONTENT -->

    <!-- RIGHT SIDE BAR -->
      <div class="col-sm-1 sidenav">
        <div class="well">
          <div class="filters text-center">
            <ul class="nav nav-pills">
              <li><a href="#" data-filter=".web-design">N</a></li>
              <li><a href="#" data-filter=".web-design">O</a></li>
              <li><a href="#" data-filter=".web-design">P</a></li>
              <li><a href="#" data-filter=".app-development">Q</a></li>
              <li><a href="#" data-filter=".site-building">R</a></li>
              <li><a href="#" data-filter=".web-design">S</a></li>
              <li><a href="#" data-filter=".app-development">T</a></li>
              <li><a href="#" data-filter=".site-building">U</a></li>
              <li><a href="#" data-filter=".web-design">V</a></li>
              <li><a href="#" data-filter=".app-development">W</a></li>
              <li><a href="#" data-filter=".site-building">X</a></li>
              <li><a href="#" data-filter=".web-design">Y</a></li>
              <li><a href="#" data-filter=".app-development">Z</a></li>
            </ul>
          </div>
        </div>
      </div>
    <!-- END RIGHT SIDE BAR -->

    <!-- List SIDEBAR -->    
      <div class="col-sm-3 sidenav">
        {{-- <div class="well"> --}}
          <ol class='example'>
            <li>Metallica - Master Of puppets <button class="btn-xs btn-danger"  data-toggle="tooltip" title="Hooray!"><i class="fa fa-times" aria-hidden="true"></i></button></li>
            <li>Second</li>
            <li>Third</li>
          </ol>
      {{-- </div> --}}
    <!-- END List SIDEBAR -->
  </div>
</div>
  
<div class="row">
<footer class="container-fluid text-center">
  <button class="btn btn-primary" v-on:click="volumeDown" >-</button>
  <button class="btn btn-success" v-on:click="playMusic">PLAY</button>
  <button class="btn btn-danger" v-on:click="stopMusic" >STOP</button>
  <button class="btn btn-primary" v-on:click="volumeUp" >+</button>
  <p>Footer Text</p>
</footer>
</div>
{{-- <div id="app">    
    <h1>@{{ program_name }}</h1>
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
<input type="text" name="search" placeholder="Enter the Music">
<hr>

<audio id="player">
 <source :src="music"
         type='audio/mp4'>
 <!-- The next two lines are only executed if the browser doesn't support MP4 files -->
  The next line will only be executed if the browser doesn't support the <audio> tag
 <p>Your user agent does not support the HTML5 Audio element.</p>
</audio>
<button class="btn btn-primary" v-on:click="volumeDown" >-</button>
<button class="btn btn-success" v-on:click="playMusic">PLAY</button>
<button class="btn btn-danger" v-on:click="stopMusic" >STOP</button>
<button class="btn btn-primary" v-on:click="volumeUp" >+</button>


</div> --}}
<hr>
<script>

  $(document).ready(function(){

   var app = new Vue({
    el: '#app',
    data: {
      program_name: 'RockPie',
       music: '{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}'
    },
    methods: {
      playMusic: function () {
        // document.getElementById('player').play();
        audio.play();
      },
      stopMusic: function () {
        audio.pause();
        audio.currentTime = 0;
        // document.getElementById('player').pause();
        // document.getElementById('player').currentTime = 0;
        // alert('pets');
      },
      volumeUp: function () {
        document.getElementById('player').volume += 0.1;
      },
      volumeDown: function () {
        document.getElementById('player').volume -= 0.1;  
      }
    }
  })
   var audio;

   initAudioPlayer();



   function initAudioPlayer(){
    audio = new Audio();
    // audio.src = "music/05 - Tifa no Theme (Piano Version).mp3";
    audio.src = app.music;
    audio.loop = false;
    //audio.play(); //comment for a momment

  }
//window.addEventListener("load",initAudioPlayer);
});
</script>
@endsection




