@extends('layout.master')
@section('title','| Proto')

@section('content')
<!-- NAVBAR-->
<nav class="navbar  navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RockPie</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
            <li class="active"><a data-toggle="tab" href="#musicTab"><i class="fa fa-music"></i> Music</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-microphone"></i> Karaoke</a></li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a></li>                    
             
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>  
      <li>
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
          <div class="jp-type-playlist">
            <div class="jp-gui jp-interface">
              <div class="jp-controls">
                {{-- <button class="jp-previous" role="button" tabindex="0">previous</button> --}}
                <button class="jp-play" role="button" tabindex="0">play</button>
                <button class="jp-next" role="button" tabindex="0" onclick="nextSong()">next</button>
                <button class="jp-stop" role="button" tabindex="0">stop</button>
              </div>
              <div class="jp-progress">
                <div class="jp-seek-bar">
                  <div class="jp-play-bar"></div>
                </div>
              </div>
              <div class="jp-volume-controls">
                <button class="jp-mute" role="button" tabindex="0">mute</button>
                <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                <div class="jp-volume-bar">
                  <div class="jp-volume-bar-value"></div>
                </div>
              </div>
              <div class="jp-time-holder">
                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
              </div>
              <div class="jp-toggles">
                {{-- <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                <button class="jp-shuffle" role="button" tabindex="0">shuffle</button> --}}
              </div>
            </div>
           {{--  <div class="jp-playlist">
              <ul>
                <li>&nbsp;</li>
              </ul>
            </div> --}}
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
    </div>
  </div>
</nav>

<!-- END NAVBAR-->

<div class="container-fluid text-center">
  <div class="row content">

    <!-- LEFT SIDEBAR -->
      <div class="col-sm-1 sidenav">
        <div class="well" id="leftsidebar">
          <div class="filters text-center">
            <ul class="nav nav-pills">
              <li class="active"><a href="#" data-filter="*"><i class="fa fa-list" aria-hidden="true"></i></a></li>
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
              <li><a href="#" data-filter=".N">N</a></li>
              <li><a href="#" data-filter=".O">O</a></li>
              <li><a href="#" data-filter=".P">P</a></li>
              <li><a href="#" data-filter=".Q">Q</a></li>
              <li><a href="#" data-filter=".R">R</a></li>
              <li><a href="#" data-filter=".S">S</a></li>
              <li><a href="#" data-filter=".T">T</a></li>
              <li><a href="#" data-filter=".U">U</a></li>
              <li><a href="#" data-filter=".V">V</a></li>
              <li><a href="#" data-filter=".W">W</a></li>
              <li><a href="#" data-filter=".X">X</a></li>
              <li><a href="#" data-filter=".Y">Y</a></li>
              <li><a href="#" data-filter=".Z">Z</a></li>          
            </ul>
          </div>
        </div>
      </div>
    <!-- END LEFT SIDEBAR -->

    <!-- CONTENT -->
      <div class="col-sm-8 text-left" id="istope-album">
        <!-- TABS CONTENT -->
          {{-- <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#musicTab"><i class="fa fa-music"></i> Music</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-microphone"></i> Karaoke</a></li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a></li>    
            <li><label>Filter:</label></li>    
            <select></select>
          </ul> --}}
          <div class="tab-content">
            <div id="musicTab" class="tab-pane fade in active">
              <div class="container">
                <div class="section">
                  <!-- ISOTOPE -->
                    <div class="isotope-container row grid-space-20">                      
                      @foreach($artists as $artist)
                        @foreach($albums as $album)
                          @if($album->artist->artist_name == $artist->artist_name)
                            <div class="{{ 'col-sm-6 col-md-3 isotope-item '.$artist->letter->letter }}">
                              <div class="image-box">
                                <div class="overlay-container">
                                  <div align="center" class="h5_album_name">
                                    <h5>{{ $artist->artist_name }} - {{ $album->album_name }}</h5>                            
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-5">
                                      <?php $img_clean = str_replace(" ","%20",$album->img); ?>                                     
                                      <img src='{{ asset('/music/'.$img_clean.'.jpg') }}' alt="Oops" class="img-rounded resize">
                                    </div>
                                    <div class="col-sm-7">                                    
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>SONG</th>                              
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php $var = 0; ?>
                                        @foreach($songs as $song)
                                          @if($song->album->album_name == $album->album_name)
                                          <?php $var++ ; ?>
                                          <tr>
                                            <th scope="row">{{ $var }}</th>
                                            <td>{{ $song->title }}
                                            </td>
                                          </tr>
                                          @endif
                                        @endforeach
                                        </tbody>
                                      </table>                                    
                                    </div>
                                  </div>
                                  <a class="overlay" data-toggle="modal" data-target="{{ '#project-'.$album->id }}">
                                    <i class="fa fa-search-plus"></i>
                                    <span>{{ $artist->artist_name }}</span>
                                  </a>
                                </div>
                              </div>
                              <!-- Modal -->
                              <div class="modal fade" id="{{'project-'.$album->id }}" tabindex="-1" role="dialog" aria-labelledby="{{'project-'.$album->id.'-label'}}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header" align="center">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                      <h3 class="modal-title h5_album_name" id="project-1-label">{{ $artist->artist_name }}</h3>
                                    </div>
                                    <div class="modal-body">
                                      <div align="center">
                                        <h3>{{ $album->album_name }}</h3>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-5">
                                          <img src='{{ asset('/music/'.$img_clean.'.jpg') }}' }} alt="" class="img-rounded resizeModal">
                                        </div>
                                        <div class="col-sm-7">                                    
                                      <table class="table table-striped table_modal">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>SONG</th>
                                            <th>ADD</th>                              
                                          </tr>
                                        </thead>
                                        <tbody>             
                                        <?php $var = 0; ?>                          
                                        @foreach($songs as $song)
                                          @if($song->album->album_name == $album->album_name)
                                          <?php $var++ ; ?>                                          
                                          <?php $songTitle_clean = str_replace("'","^",$song->title); ?>
                                          <?php $artistName_clean = str_replace("'","^",$album->artist->artist_name);?>
                                          <?php $songUrl_clean = str_replace("'","^",$song->song_url);?>
                                          <tr>
                                            <th scope="row">{{ $var }}</th>
                                            <td>{{ $song->title }}</td>

                                            <th><button type="button" class="btn btn-sm btn-primary btn-shadow" onclick="addSong_to_playlist('{{ $artistName_clean }}','{{ $songTitle_clean }}','{{ $songUrl_clean }}')"><i class="fa fa-music" aria-hidden="true"></i> </button></th>
                                            {{-- <th><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="default" data-on="<i class='fa fa-play'></i>" data-off="<i class='fa fa-stop'></i>" data-size="mini" onclick="agregarLista('jason')"></th> --}}
                                          </tr>
                                          @endif
                                        @endforeach
                                        </tbody>
                                      </table>                                    
                                    </div>
                                  </div>
                                    </div>
                                    <div class="modal-footer">                                      
                                      <button type="button" class="btn btn-sm btn-danger btn-shadow" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Modal end -->
                            </div>
                          @endif
                        @endforeach                               
                      @endforeach                                                                                                 
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
     {{--  <div class="col-sm-1 sidenav">
        <div class="well" id="rightsidebar">
          <div class="filters text-center">
            <ul class="nav nav-pills">
              <li><a href="#" data-filter=".N">N</a></li>
              <li><a href="#" data-filter=".O">O</a></li>
              <li><a href="#" data-filter=".P">P</a></li>
              <li><a href="#" data-filter=".Q">Q</a></li>
              <li><a href="#" data-filter=".R">R</a></li>
              <li><a href="#" data-filter=".S">S</a></li>
              <li><a href="#" data-filter=".T">T</a></li>
              <li><a href="#" data-filter=".U">U</a></li>
              <li><a href="#" data-filter=".V">V</a></li>
              <li><a href="#" data-filter=".W">W</a></li>
              <li><a href="#" data-filter=".X">X</a></li>
              <li><a href="#" data-filter=".Y">Y</a></li>
              <li><a href="#" data-filter=".Z">Z</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
    <!-- END RIGHT SIDE BAR -->

    <!-- List SIDEBAR -->    
      <div class="col-sm-3 sidenav" id="listBar">
      <h3>PlayList</h3>
      {{-- <button class="btn btn-primary" onclick="playList()">PLAY</button> --}}
        {{-- <div class="well"> --}}
          <ol class='example' id="playerList">
         {{--    <li>Metallica - Master Of puppets <button class="btn-xs btn-danger"  data-toggle="tooltip" title="Hooray!" id="playerList"><i class="fa fa-times" aria-hidden="true"></i></button></li>
            <li>Second</li>
            <li>Third</li> --}}
          </ol>
      {{-- </div> --}}
    <!-- END List SIDEBAR -->
  </div>
</div>
<div class="row">
  <footer class="container-fluid text-center">
    <p>By Peter Leyva</p>
  </footer>
</div>

<script>

  $(document).ready(function(){

  //  var app = new Vue({
  //   el: '#app',
  //   data: {
  //     program_name: 'RockPie',
  //      music: '{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}'
  //   },
  //   methods: {
  //     playMusic: function () {
  //       // document.getElementById('player').play();
  //       audio.play();
  //     },
  //     stopMusic: function () {
  //       audio.pause();
  //       audio.currentTime = 0;
  //       // document.getElementById('player').pause();
  //       // document.getElementById('player').currentTime = 0;
  //       // alert('pets');
  //     },
  //     volumeUp: function () {
  //       document.getElementById('player').volume += 0.1;
  //     },
  //     volumeDown: function () {
  //       document.getElementById('player').volume -= 0.1;  
  //     }
  //   }
  // })
   var audio;

   initAudioPlayer();



   function initAudioPlayer(){
    //audio = new Audio();
    // audio.src = "music/05 - Tifa no Theme (Piano Version).mp3";
    //audio.src = app.music;
    //audio.loop = false;
    //audio.play(); //comment for a momment

  }
//window.addEventListener("load",initAudioPlayer);
});

</script>
@endsection




