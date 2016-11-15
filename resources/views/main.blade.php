@extends('layout.master')
@section('title','| Home Page')

@section('content')
<h1>Hello World</h1>
<button class="btn btn-primary">Button</button>

<div id="app">
    <h2>@{{ message }}</h2>
</div>
@endsection


@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
})
</script>
@endsection
 