@extends('layouts.master')
@section('css_styles')
<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
<style type="text/css">
	.like li{
		display: inline-block;
		padding: 5px;
	}
	.dropzone{
		padding: 0;
		min-height: 300px;
	}
	/* bootstrap-tagsinput.css file - add in local */
	.form-control{
		max-width: 100%;
	}
	.bootstrap-tagsinput {
		background-color: #fff;
		border: 1px solid #ccc;
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		display: inline-block;
		padding: 4px 6px;
		color: #555;
		vertical-align: middle;
		border-radius: 4px;
		width: 100%;
		line-height: 22px;
		cursor: text;
	}
	.bootstrap-tagsinput input {
		border: none;
		box-shadow: none;
		outline: none;
		background-color: transparent;
		padding: 0 6px;
		margin: 0;
		width: auto;
		max-width: inherit;
	}
	.bootstrap-tagsinput.form-control input::-moz-placeholder {
		color: #777;
		opacity: 1;
	}
	.bootstrap-tagsinput.form-control input:-ms-input-placeholder {
		color: #777;
	}
	.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
		color: #777;
	}
	.bootstrap-tagsinput input:focus {
		border: none;
		box-shadow: none;
	}
	.bootstrap-tagsinput .tag {
		margin-right: 2px;
		color: white!important;
	}
	.bootstrap-tagsinput .tag [data-role="remove"] {
		margin-left: 8px;
		cursor: pointer;
		color: #fff!important;
	}
	.bootstrap-tagsinput .tag [data-role="remove"]:after {
		content: "x";
		padding: 0px 2px;
	}
	.bootstrap-tagsinput .tag [data-role="remove"]:hover {
		box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	}
	.bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
		box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
	}
</style>
@endsection
@section('content')

<div class="container nopadding">
	<div class="col-md-12 nopadding">
		<div class="panel panel-default">
			<div class="panel-heading" style="border:none;"><h3 class="text-center" style= "color: #f60;">Upload</h3></div>
			<div class="panel-body">
				<form action="{{url('post-artwork')}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
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
						<textarea class="form-control" placeholder="Description" rows="5" name="description" style="font-family: 'sanfrancisco-displayregular'!important;" required></textarea>
					</div>
					<div class="form-group">
						<input type="text" value="" data-role="tagsinput" placeholder="Add tags" name="tag" class="form-control" />
					</div>
				</div>
				<div class="col-md-6 col-sm-6 form-actions">
				<!-- 	<div class="dropzone" id="myId">
						<div class="dz-default dz-message"><span>Drop in here</span>
						</div>
					</div> -->
					
					<!-- <div class="form-actions"></div> -->
					<div class="image" width="100%" style="height: 405px; background-color: #eee;"><img id="myImg1" width="100%" /></div>
					<div class="form-group">
						<input type="file" name="image" class="form-control" placeholder="Image" id="img1">
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="width: 100%">Upload</button>
				</div>

			</form>
		</div>
	</div>

</div>
{{--<div class="col-md-4" style="padding-right: 0;">
@include('include.side-bar')
</div>--}}

</div>

@endsection
@section('js')
<script src="{{asset('js/tags.js')}}"></script>
<script src="{{asset('js/dropzone.js')}}"></script>
<script type="text/javascript">
	var baseUrl = "{{ url('dropzone') }}";
	var token = "{{ csrf_token() }}";

	Dropzone.autoDiscover = false;
	var myDropzone = new Dropzone("div#myId", {
		url: baseUrl,
		params: {
			_token: token
		},
		init: function () {
			$(this.element).addClass("dropzone");

			this.on("success", function (file) {                    
				$(".form-actions").append("<input type='hidden' name='image' value='"+file.name+"'>");
			});
		},
	    paramName: 'file', // The name that will be used to transfer the file
	    maxFilesize: 2, // MB
	    addRemoveLinks: true
	});
</script>
<script type="text/javascript">
$(function () {
    $("#img1").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg1').attr('src', e.target.result);
};
</script>
@endsection