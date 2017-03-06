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
            <li class="active"><a data-toggle="tab" href="#updateTab"><i class="fa fa-music"></i> Update Music</a></li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-microphone"></i> Update Karaoke</a></li>			
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Advance</a></li>                         
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
              <p id="ALL"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">A</button>
            </div>
            <div class="col-sm-8">
              <p id="A"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">B</button>
            </div>
            <div class="col-sm-8">
              <p id="B"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">C</button>
            </div>
            <div class="col-sm-8">
              <p id="C"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">D</button>
            </div>
            <div class="col-sm-8">
              <p id="D"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">E</button>
            </div>
            <div class="col-sm-8">
              <p id="E"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">F</button>
            </div>
            <div class="col-sm-8">
              <p id="F"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">G</button>
            </div>
            <div class="col-sm-8">
              <p id="G"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">H</button>
            </div>
            <div class="col-sm-8">
              <p id="H"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">I</button>
            </div>
            <div class="col-sm-8">
              <p id="I"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">J</button>
            </div>
            <div class="col-sm-8">
              <p id="J"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">K</button>
            </div>
            <div class="col-sm-8">
              <p id="K"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">L</button>
            </div>
            <div class="col-sm-8">
              <p id="L"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">M</button>
            </div>
            <div class="col-sm-8">
              <p id="M"></p>
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
                <p id="N"></p>
              </div>            
            </div>
            <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">O</button>
            </div>
            <div class="col-sm-8">
              <p id="O"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">P</button>
            </div>
            <div class="col-sm-8">
              <p id="P" id="P"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">Q</button>
            </div>
            <div class="col-sm-8">
              <p id="Q"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">R</button>
            </div>
            <div class="col-sm-8">
              <p id="R"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">S</button>
            </div>
            <div class="col-sm-8">
              <p id="S"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">T</button>
            </div>
            <div class="col-sm-8">
              <p id="T"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">U</button>
            </div>
            <div class="col-sm-8">
              <p id="U"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">V</button>
            </div>
            <div class="col-sm-8">
              <p id="V"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">W</button>
            </div>
            <div class="col-sm-8">
              <p id="W"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">X</button>
            </div>
            <div class="col-sm-8">
              <p id="X"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">Y</button>
            </div>
            <div class="col-sm-8">
              <p id="Y"></p>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success btn-block">Z</button>
            </div>
            <div class="col-sm-8">
              <p id="Z"></p>
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