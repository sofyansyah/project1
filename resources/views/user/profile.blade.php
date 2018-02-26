@extends('layouts.master')

@section('content')

<div class="container">

 @include('includes.profile-card')


 @include('includes.artwork')
  


</div>

@endsection
@section('js')
<script src="{{asset('js/masonry.js')}}"></script>
<script>
  // external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var grid = document.querySelector('.grid');

var msnry = new Masonry( grid, {
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true
});

imagesLoaded( grid ).on( 'progress', function() {
  // layout Masonry after each image loads
  msnry.layout();
});
</script>
@endsection