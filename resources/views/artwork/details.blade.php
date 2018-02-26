@extends ('layouts.master')

@section ('content')

<style type="text/css">
	.fiture-like li{
		display: inline-block;
		padding: 0 10px;
	}
	.fiture-like i{
		font-size: 18px;
	}

	#images{
		margin: 0 auto; 
		background-size: 100%;
		background-repeat: 
		no-repeat; height: 500px;
		background-position: center;
	}
</style>

<div class="container">
	<div class="col-md-5"  style="overflow-y: scroll; max-height: 500px;">
		<div class="col-md-12 nopadding">
			<img src="{{asset('img/avatar/'. $art->user_avatar)}}" width="60" class="img-circle" style="float:left; margin-right: 10px;">	
			<h4 style="margin-bottom: 0;">{{$art->user_name}}</h4>
			<span style="color: #aaa;">{{$art->created_at->diffForHumans()}}</span>
		</div>
		<div class="col-md-12 nopadding">
			<h3>{{$art->title}}</h3>
			<p>{{$art->description}}</p>
		</div>

		<ul class="fiture-like">
			<li>30 <i class="fa fa-heart-o"></i></li>
			<li>100 <i class="fa fa-comment-o"></i></li>
			<li><i class="fa fa-upload"></i></li>
		</ul>
		<br>

		<div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
			<div class="col-md-1 nopadding">
				<img src="{{asset('img/avatar/'. $art->user_avatar)}}" width="35" class="img-circle">
			</div>
			<div class="col-md-11">	
				<h4 style="margin: 0;">{{$art->user_name}}</h4>
				<p style="margin: 0; font-size: 14px;">lorem ipsum sir dolo amet</p>
				<span style="color: #aaa; font-size: 12px;">{{$art->created_at->diffForHumans()}}</span>
			</div>			
		</div>

		<div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
			<div class="col-md-1 nopadding">
				<img src="{{asset('img/avatar/'. $art->user_avatar)}}" width="35" class="img-circle">
			</div>
			<div class="col-md-11">	
				<h4 style="margin: 0;">{{$art->user_name}}</h4>
				<p style="margin: 0;">lorem ipsum sir dolo amet</p>
				<span style="color: #aaa; font-size: 12px;">{{$art->created_at->diffForHumans()}}</span>
			</div>			
		</div>

		<div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
			<div class="col-md-1 nopadding">
				<img src="{{asset('img/avatar/'. $art->user_avatar)}}" width="35" class="img-circle">
			</div>
			<div class="col-md-11">	
				<h4 style="margin: 0;">{{$art->user_name}}</h4>
				<p style="margin: 0;">lorem ipsum sir dolo amet</p>
				<span style="color: #aaa; font-size: 12px;">{{$art->created_at->diffForHumans()}}</span>
			</div>			
		</div>

		<div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
			<div class="col-md-1 nopadding">
				<img src="{{asset('img/avatar/'. $art->user_avatar)}}" width="35" class="img-circle">
			</div>
			<div class="col-md-11">	
				<h4 style="margin: 0;">{{$art->user_name}}</h4>
				<p style="margin: 0;">lorem ipsum sir dolo amet</p>
				<span style="color: #aaa; font-size: 12px;">{{$art->created_at->diffForHumans()}}</span>
			</div>			
		</div>

		<div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
			<div class="col-md-1 nopadding">
				<img src="{{asset('img/avatar/'. $art->user_avatar)}}" width="35" class="img-circle">
			</div>
			<div class="col-md-11">	
				<h4 style="margin: 0;">{{$art->user_name}}</h4>
				<p style="margin: 0;">lorem ipsum sir dolo amet</p>
				<span style="color: #aaa; font-size: 12px;">{{$art->created_at->diffForHumans()}}</span>
			</div>			
		</div>

		<div class="col-md-12 nopadding comments">
			<p>0 Comments</p>
			<div class="input-group">

				<input id="email" type="text" class="form-control" name="email" placeholder="Please comment in here..">
				<a href="#" class="input-group-addon" style="border:none; background-color: #ff6655; color: #fff; ">Comment</a>
			</div>
		</div>

	</div>

	<div class="col-md-7 text-center">
		<div id="images" style="background-image: url({{asset('/img/artwork/'. $art->img_normal)}}); "></div>
	</div>
</div>


@endsection