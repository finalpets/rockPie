@extends('layout.master')
@section('title','| Home Page')

@section('content')
<div id="app">    
    <h1>@{{ program_name }}</h1>
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
<input type="text" name="search" placeholder="Enter the Music">
<hr>


<audio id="player">
 <source :src="music"
         type='audio/mp4'>
 <!-- The next two lines are only executed if the browser doesn't support MP4 files -->
 <!-- The next line will only be executed if the browser doesn't support the <audio> tag-->
 <p>Your user agent does not support the HTML5 Audio element.</p>
</audio>

<button class="btn btn-success" v-on:click="playMusic">PLAY</button>
</div>
<hr>



@endsection


@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data: {
    program_name: 'RockPie',
    music: '{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}'
  },
  methods: {
    playMusic: function () {
        document.getElementById('player').play();
    }
  }
})
</script>
@endsection
 