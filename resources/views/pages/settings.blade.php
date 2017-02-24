@extends('layout.master')
@section('title','| Settings index')

@section('content')

<!-- NAVBAR-->
<nav class="navbar  navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('index') }}">Back</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
            <li class="active"><a data-toggle="tab" href="#updateTab"><i class="fa fa-music"></i> Update</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-microphone"></i> Karaoke</a></li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-youtube-square" aria-hidden="true"></i> Youtube</a></li>
            <li><a href="#" class="hiddenInput"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
			<!-- DON'T use type="hidden" because IE doesn't like hidden inputs -->
			<input id="hidden" type="text" style="display:none;"></li>
			<li><a href="#" data-filter=".A" id="ajaxTest">A</a></li>
             
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Update</a></li>                         
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR-->

<div class="container">
  <div class="row content">
    <div class="tab-content">
      <div id="updateTab" class="tab-pane fade in active">
        <div class="col-sm-6">
          <h3>Press The Button to update</h3>
          <div class="row">
            <div class="col-sm-4">
            {{-- <form id="form" action="{{  route('settings.create') }}" method="get"> --}}            
              <button class="btn btn-success btn-block">ALL</button>            
              {{-- </form> --}}
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">A</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">B</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">C</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">D</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">E</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">F</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">G</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">H</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">I</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">J</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">K</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">L</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">M</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
        </div>


        <div class="col-sm-6">
          <h3>Press The Button to update</h3>
          <div class="row">
              <div class="col-sm-4">
                <button class="btn btn-success btn-block">N</button>
              </div>
              <div class="col-sm-8">
                <p>Message:</p>
              </div>            
            </div>
            <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">O</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">P</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">Q</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">R</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">S</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">T</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">U</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">V</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">W</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">X</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">Y</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">Z</button>
            </div>
            <div class="col-sm-8">
              <p>Message:</p>
            </div>            
          </div>
        </div>        
      </div>
      <div id="menu1" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Some content in menu 1.</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Some content in menu 2.</p>
      </div>
    </div>
  </div>
</div>
@endsection