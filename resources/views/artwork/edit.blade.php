@extends('layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8">
		<div class="panel panel-default">
		<div class="panel-heading" style="border:none;"><h3 class="text-center" style= "color: #f60;">Edit Artwork</h3></div>
			<div class="panel-body">
				<form action="{{url('post-edit-artwork/'. $art->id)}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="col-md-6">

						<div class="form-group">
							<input type="text" name="title" class="form-control" placeholder="{{$art->title}}">
						</div>
						{{--<div class="form-group">
						<label for="sel1"></label>
						<select class="form-control" id="sel1">
							<option>Mural</option>
							<option>Illustration</option>
							<option>Web Design</option>
							<option>4</option>
						</select>
					</div>--}}
					<div class="form-group">
						<textarea class="form-control" placeholder="{{$art->description}}" rows="5" name="description" style="font-family: 'sanfrancisco-displayregular'!important;"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="tag" class="form-control" placeholder="{{$art->tag}}">
					</div>
				</div>
				<div class="col-md-6">
					<img src="{{asset('img/artwork/'. $art->image_normal)}}" width="100%" / style="margin-bottom: 10px;">
					
					<button type="submit" class="btn btn-primary" style="width: 100%">Edit</button>
				</div>
			</form>
		</div>

	</div>

</div>

<div class="col-md-4">
@include('include.side-bar')
</div>
</div>

@endsection