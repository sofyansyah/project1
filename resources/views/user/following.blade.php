
@extends('layouts.master')

@section('content')
<div class="container">
@include('include.profile-card')
<div class="col-md-12 nopadding">

@forelse ($following as $fol)
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
			<img src="{{asset('/img/avatar/'. $fol->photo)}}" class="img-circle" width="50" />
				{{$fol->name}}
			</div>
		</div>
	</div> 
	@empty
	@endforelse

</div>
</div>
@endsection