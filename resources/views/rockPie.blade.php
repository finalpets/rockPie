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
            <li><a href="#" class="hiddenInput"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
<!-- DON'T use type="hidden" because IE doesn't like hidden inputs -->
<input id="hidden" type="text" style="display:none;"></li>
<li><a href="#" data-filter=".A" id="ajaxTest">A</a></li>
             
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/settings') }}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>  
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
      <div class="col-sm-8 text-left" id="istope-album" >

        <!-- TABS CONTENT -->
          {{-- <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#musicTab"><i class="fa fa-music"></i> Music</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-microphone"></i> Karaoke</a></li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a></li>    
            <li><label>Filter:</label></li>    
            <select></select>
          </ul> --}}
          <div class="tab-content">
          <div id="menu1" class="tab-pane fade in">
          <h1>TEST</h1>
          </div>
            <div id="musicTab" class="tab-pane fade in active">
              <div class="container">
                <div class="section">
                  <!-- ISOTOPE -->
                    <div class="isotope-container row grid-space-20" id="isotopeAjax">
                 
                                                                                                                   
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
        <span class="label label-default">PlayList</span>        
        <input type="checkbox" id="editPlaylist" data-toggle="toggle" data-on="On <i class='fa fa-pencil-square-o' aria-hidden='true'></i>" data-off="Off <i class='fa fa-pencil-square-o' aria-hidden='true'></i>" data-onstyle="success" data-offstyle="danger" data-size="mini">
        <button id="btn_removeAllSongs" class="btn-danger btn-xs" onclick="removeAllSongs()">ALL <i class='fa fa-trash-o' aria-hidden='true'></i> </button></button>
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
{{-- <div class="row">
  <footer class="container-fluid text-center">
    <p>By Peter Leyva</p>
  </footer>
</div> --}}

@endsection




