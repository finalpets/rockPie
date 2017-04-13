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
          <h3>Select the Letter Below</h3>
            <select id="select_letter" class="selectpicker show-tick" title="Choose one of the following...">
              @foreach($letters as $letter)
                  <option>{{ $letter->letter }}</option>
              @endforeach
            </select>
            <button class="btn btn-success" id="update_letter">UPDATE</button>
            <button class="btn btn-danger" id="delete_letter">DELETE</button>
            <p id="update_Loading"></p>            
        </div>

        <div class="col-sm-6">
          {{-- <h3>Press The Button to DELETE</h3>         --}}


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