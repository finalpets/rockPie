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
            <li><a  data-toggle='modal' data-target='#search_modal'><i class="fa fa-search" aria-hidden="true"></i> Buscar</a></li>  
      </ul>
      <ul class="nav navbar-nav navbar-right">
        {{-- <li><a href="{{ url('/settings') }}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>   --}}
        <li><a  data-toggle='modal' data-target='#settings_modal'><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>  
      </ul>
      
    </div>
  </div>
</nav>
</div>

  <!-- SETTINGS MODAL-->
<!-- Modal -->
  <div class="modal right fade" id="settings_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Settings</h4>
        </div>

        <div class="modal-body">
        
        <h3>Select the Letter Below</h3>
        <div class="col-sm-12">      
          <div class="row">

          <i class='fa fa-floppy-o' aria-hidden='true'></i>
          <span class="label label-default">External Drive</span>   
          
          <input type="checkbox" id="externalDrive" data-toggle="toggle" data-on="On" data-off="Off" data-onstyle="success" 
          data-offstyle="danger" data-size="mini">          
          
            
            <select id="select_letter" class="selectpicker show-tick" data-width="auto" title="Choose one Letter...">
                @foreach($letters as $letter)
                    <option>{{ $letter->letter }}</option>
                @endforeach
              </select>                
          </div> 
          <hr>     
              <div class="row">
                <button class="btn btn-success" id="update_letter">UPDATE</button>
                <button class="btn btn-danger" id="delete_letter">DELETE</button>                
                <p id="update_Loading"></p>
              </div>              
          </div>
            
              
            
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->


  <!-- SEARCH MODAL-->
  <!-- Modal -->
  <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Buscar</h4>
        </div>

        <div class="modal-body">
        <h3>Selecciona Un Artista</h3>
        <div class="row">
        <div class="col-sm-12">      
          
            <select id="select_search" class="selectpicker show-tick" data-width="auto"  data-live-search="true" title="Choose one Artist...">            
                {{-- @foreach($letters as $letter)
                    <option>{{ $letter->letter }}</option>
                @endforeach --}}
              </select>
              <select id="select_album" class="selectpicker"  title="Album..." multiple data-actions-box="true" data-selected-text-format="count > 3">
                
              </select>
              <select id="select_song" class="selectpicker show-tick" data-width="auto"  data-live-search="true" title="Choose one Song...">            
                {{-- @foreach($letters as $letter)
                    <option>{{ $letter->letter }}</option>
                @endforeach --}}
              </select>
              <button class="btn-success" id="select_add"><i class="fa fa-music" aria-hidden="true"></i></button>
              <hr>     
              <div class="row">
                                                          
              </div>                
          </div> 
                   
          </div>
            
              
            
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->


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
          
            
              
                  <ul class="nav nav-pills" id="myTabs" role="tablist">

                  {{-- <li class="active"><a href="#ALL" data-toggle="tab"><i id="LALL" class="fa fa-list" aria-hidden="true"></i></a></li> --}}
                  <li class="active"><a id="1" data-toggle="tab" href="#Letter_1">A</a></li>
                  <li><a id="2" data-toggle="tab" href="#Letter_2">B</a></li>   
                  <li><a id="3" data-toggle="tab" href="#Letter_3">C</a></li>   
                  <li><a id="4" data-toggle="tab" href="#Letter_4">D</a></li>   
                  <li><a id="5" data-toggle="tab" href="#Letter_5">E</a></li>   
                  <li><a id="6" data-toggle="tab" href="#Letter_6">F</a></li>   
                  <li><a id="7" data-toggle="tab" href="#Letter_7">G</a></li>   
                  <li><a id="8" data-toggle="tab" href="#Letter_8">H</a></li>   
                  <li><a id="9" data-toggle="tab" href="#Letter_9">I</a></li>   
                  <li><a id="10" data-toggle="tab" href="#Letter10_">J</a></li>   
                  <li><a id="11" data-toggle="tab" href="#Letter_11">K</a></li>   
                  <li><a id="12" data-toggle="tab" href="#Letter_12">L</a></li>   
                  <li><a id="13" data-toggle="tab" href="#Letter_13">M</a></li>
                  <li><a id="14" data-toggle="tab" href="#Letter_14">N</a></li>   
                  <li><a id="15" data-toggle="tab" href="#Letter_15">O</a></li>   
                  <li><a id="16" data-toggle="tab" href="#Letter_16">P</a></li>   
                  <li><a id="17" data-toggle="tab" href="#Letter_17">Q</a></li>   
                  <li><a id="18" data-toggle="tab" href="#Letter_18">R</a></li>   
                  <li><a id="19" data-toggle="tab" href="#Letter_19">S</a></li>   
                  <li><a id="20" data-toggle="tab" href="#Letter_20">T</a></li>   
                  <li><a id="21" data-toggle="tab" href="#Letter_21">U</a></li>   
                  <li><a id="22" data-toggle="tab" href="#Letter_22">V</a></li>   
                  <li><a id="23" data-toggle="tab" href="#Letter_23">W</a></li>   
                  <li><a id="24" data-toggle="tab" href="#Letter_24">X</a></li>   
                  <li><a id="25" data-toggle="tab" href="#Letter_25">Y</a></li>   
                  <li><a id="26" data-toggle="tab" href="#Letter_26">Z</a></li>
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
                        {{-- <div id="ALL" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_LALL">
                          </div>
                        </div> --}}
                        <div id="Letter_1" class="tab-pane fade in active">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_1">
                          </div>
                        </div>
                        <div id="Letter_2" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_2">
                          </div>
                        </div>
                        <div id="Letter_3" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_3">
                          </div>
                        </div>
                        <div id="Letter_4" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_4">
                          </div>
                        </div>
                        <div id="Letter_5" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_5">
                          </div>
                        </div>
                        <div id="Letter_6" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_6">
                          </div>
                        </div>
                        <div id="Letter_7" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_7">
                          </div>
                        </div>
                        <div id="Letter_8" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_8">
                          </div>
                        </div>
                        <div id="Letter_9" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_9">
                          </div>
                        </div>
                        <div id="Letter_10" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_10">
                          </div>
                        </div>
                        <div id="Letter_11" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_11">
                          </div>
                        </div>
                        <div id="Letter_12" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_12">
                          </div>
                        </div>
                        <div id="Letter_13" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_13">
                          </div>
                        </div>
                        <div id="Letter_14" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_14">
                          </div>
                        </div>
                        <div id="Letter_15" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_15">
                          </div>
                        </div>
                        <div id="Letter_16" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_16">
                          </div>
                        </div>
                        <div id="Letter_17" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_17">
                          </div>
                        </div>
                        <div id="Letter_18" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_18">
                          </div>
                        </div>
                        <div id="Letter_19" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_19">
                          </div>
                        </div>
                        <div id="Letter_20" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_20">
                          </div>
                        </div>
                        <div id="Letter_21" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_21">
                          </div>
                        </div>
                        <div id="Letter_22" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_22">
                          </div>
                        </div>
                        <div id="Letter_23" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_23">
                          </div>
                        </div>
                        <div id="Letter_24" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_24">
                          </div>
                        </div>
                        <div id="Letter_25" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_25">
                          </div>
                        </div>
                        <div id="Letter_26" class="tab-pane fade ">
                          <div class="isotope-container row grid-space-20" id="isotopeAjax_26">
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




