@extends('layout.master')
@section('title','| Proto')

@section('content')
<!-- NAVBAR-->
<div class="row">
  <div class="col-md-9">
  <nav class="navbar  navbar-default">
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
      </ul>
      
    </div>
  </div>
</nav>
</div>
<div class="col-md-3">
<ul class="nav navbar-nav navbar-right">      
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
<div class="row" id="letternav">
    <!-- Letter Bar -->
          
            
              
                  <ul class="nav nav-pills">

                  <li class="active"><a href="#ALL" data-toggle="tab"><i id="LALL" class="fa fa-list" aria-hidden="true"></i></a></li>
                  <li><a id="LA" data-toggle="tab" href="#LetterA">A</a></li>
                  <li><a id="LB" data-toggle="tab" href="#LetterB">B</a></li>   
                  <li><a id="LC" data-toggle="tab" href="#LetterC">C</a></li>   
                  <li><a id="LD" data-toggle="tab" href="#LetterD">D</a></li>   
                  <li><a id="LE" data-toggle="tab" href="#LetterE">E</a></li>   
                  <li><a id="LF" data-toggle="tab" href="#LetterF">F</a></li>   
                  <li><a id="LG" data-toggle="tab" href="#LetterG">G</a></li>   
                  <li><a id="LH" data-toggle="tab" href="#LetterH">H</a></li>   
                  <li><a id="LI" data-toggle="tab" href="#LetterI">I</a></li>   
                  <li><a id="LJ" data-toggle="tab" href="#LetterJ">J</a></li>   
                  <li><a id="LK" data-toggle="tab" href="#LetterK">K</a></li>   
                  <li><a id="LL" data-toggle="tab" href="#LetterL">L</a></li>   
                  <li><a id="LM" data-toggle="tab" href="#LetterM">M</a></li>
                  <li><a id="LN" data-toggle="tab" href="#LetterN">N</a></li>   
                  <li><a id="LO" data-toggle="tab" href="#LetterO">O</a></li>   
                  <li><a id="LP" data-toggle="tab" href="#LetterP">P</a></li>   
                  <li><a id="LQ" data-toggle="tab" href="#LetterQ">Q</a></li>   
                  <li><a id="LR" data-toggle="tab" href="#LetterR">R</a></li>   
                  <li><a id="LS" data-toggle="tab" href="#LetterS">S</a></li>   
                  <li><a id="LT" data-toggle="tab" href="#LetterT">T</a></li>   
                  <li><a id="LU" data-toggle="tab" href="#LetterU">U</a></li>   
                  <li><a id="LV" data-toggle="tab" href="#LetterV">V</a></li>   
                  <li><a id="LW" data-toggle="tab" href="#LetterW">W</a></li>   
                  <li><a id="LX" data-toggle="tab" href="#LetterX">X</a></li>   
                  <li><a id="LY" data-toggle="tab" href="#LetterY">Y</a></li>   
                  <li><a id="LZ" data-toggle="tab" href="#LetterZ">Z</a></li>
                </ul>
              
            
          
        <!-- END LEFT SIDEBAR -->
</div>
<!-- END NAVBAR-->
<div class="tab-content">

  <div id="musicTab" class="tab-pane fade in active">
    <div class="container-fluid text-center">
      <div class="row content">
        

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
              {{-- <div class="tab-content"> --}}
              
                {{-- <div id="musicTab" class="tab-pane fade in active"> --}}
                  <div class="container">
                    <div class="section">
                      <!-- ISOTOPE -->
                      <div class="tab-content">
                        <div id="ALL" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LALL">
                          </div>
                        </div>
                        <div id="LetterA" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LA">
                          </div>
                        </div>
                        <div id="LetterB" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LB">
                          </div>
                        </div>
                        <div id="LetterC" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LC">
                          </div>
                        </div>
                        <div id="LetterD" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LD">
                          </div>
                        </div>
                        <div id="LetterE" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LE">
                          </div>
                        </div>
                        <div id="LetterF" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LF">
                          </div>
                        </div>
                        <div id="LetterG" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LG">
                          </div>
                        </div>
                        <div id="LetterH" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LH">
                          </div>
                        </div>
                        <div id="LetterI" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LI">
                          </div>
                        </div>
                        <div id="LetterJ" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LJ">
                          </div>
                        </div>
                        <div id="LetterK" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LK">
                          </div>
                        </div>
                        <div id="LetterL" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LL">
                          </div>
                        </div>
                        <div id="LetterM" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LM">
                          </div>
                        </div>
                        <div id="LetterN" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LN">
                          </div>
                        </div>
                        <div id="LetterO" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LO">
                          </div>
                        </div>
                        <div id="LetterP" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LP">
                          </div>
                        </div>
                        <div id="LetterQ" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LQ">
                          </div>
                        </div>
                        <div id="LetterR" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LR">
                          </div>
                        </div>
                        <div id="LetterS" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LS">
                          </div>
                        </div>
                        <div id="LetterT" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LT">
                          </div>
                        </div>
                        <div id="LetterU" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LU">
                          </div>
                        </div>
                        <div id="LetterV" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LV">
                          </div>
                        </div>
                        <div id="LetterW" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LW">
                          </div>
                        </div>
                        <div id="LetterX" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LX">
                          </div>
                        </div>
                        <div id="LetterY" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LY">
                          </div>
                        </div>
                        <div id="LetterZ" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LZ">
                          </div>
                        </div>
                      </div>
                      <!-- END ISOTOPE -->
                    </div>
                  </div>
                {{-- </div> --}}
              {{-- </div> --}}
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
        <div class="col-sm-1 sidenav">
            <div id="leftsidebar">
              <button class="btn btn-default btn-shadow" id="UP"><i class="fa fa-long-arrow-up fa-3x" aria-hidden="true"></i></button>
              <button class="btn btn-default btn-shadow" id="DOWN"><i class="fa fa-long-arrow-down fa-3x" aria-hidden="true"></i></button>
            </div>
          </div>  
          <div class="col-sm-3 sidenav" id="listBar">
            <span class="label label-default">PlayList</span>        
            <input type="checkbox" id="editPlaylist" data-toggle="toggle" data-on="On <i class='fa fa-pencil-square-o' aria-hidden='true'></i>" data-off="Off <i class='fa fa-pencil-square-o' aria-hidden='true'></i>" data-onstyle="success" data-offstyle="danger" data-size="mini">
            <button id="btn_removeAllSongs" class="btn-danger btn-xs btn-shadow" onclick="removeAllSongs()">ALL <i class='fa fa-trash-o' aria-hidden='true'></i> </button></button>
            {{-- <button class="btn btn-primary" onclick="playList()">PLAY</button> --}}
              {{-- <div class="well"> --}}
                <ol class='example' id="playerList">
               {{--    <li>Metallica - Master Of puppets <button class="btn-xs btn-danger"  data-toggle="tooltip" title="Hooray!" id="playerList"><i class="fa fa-times" aria-hidden="true"></i></button></li>
                  <li>Second</li>
                  <li>Third</li> --}}
                </ol>
            </div>
          <!-- END List SIDEBAR -->
      </div>
    </div>
  </div>  
  <div id="menu1" class="tab-pane fade in">
              <h1>TEST</h1>
  </div>
</div>
 


{{-- <div class="row">
  <footer class="container-fluid text-center">
    <p>By Peter Leyva</p>
  </footer>
</div> --}}

@endsection




