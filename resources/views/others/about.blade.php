@extends('layouts.master')

@section('content')
<style type="text/css">
.jumbotron{
		margin-top: -21px;
		height: 350px!important;
	}
	.thumbnail{
		border:none;
		background-color: #ff665526;
	}
	.about-content{
		text-align: center;
	}
	.visi-misi .thumbnail{
		padding: 25px 15px;
		height: 350px;
	}
	.team-user .thumbnail{
		background-color: #fff;
		padding: 15px 20px;
	}
	.visi-content .thumbnail, .misi-content .thumbnail{
		padding: 25px 15px;
		height: 163px;
	}
	p{
		color: #777;
	}
	h4, h3{
		color: #ff6655;
		font-weight: bold;
	}
	.team{
		padding: 35px 15px;
		background-color: #fafafa;
		margin-left: 2.6px;
		margin-right: 2.6px;

	}
	.team-user .user-name{
		font-weight: bold;
		font-size: 16px;
	}
	.team-user .user-position{
		font-size: 12px;
	}
</style>

<div class="jumbotron banner">
	<div class="container-fluid">
		<h2>Banner</h2>
		<div class="col-md-6 offset-2 nopadding">
			<p style="font-size: 18px;">

			</p>
		</div>
	</div>
</div>

<div class="container">

	<div class="col-md-8 col-md-offset-2 about text-center" style="margin-bottom: 50px;">
		<h4>Tentang DKVDaily</h4>
		<p class ="about-content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
			<br><br>
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
		</p>


	</div>
	<div class="row">
		<div class="col-md-6 visi-misi">
			<div class="thumbnail">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					<br><br>
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
				</p>
			</div>
		</div>

		<div class="col-md-6 visi-content text-center">
			<div class="thumbnail">
				<h3>
					VISI
				</h3>
			</div>
		</div>

		<div class="col-md-6 misi-content text-center">
			<div class="thumbnail">
				<h3>
					MISI
				</h3>
			</div>
		</div>

	</div>

	<div class="row team">
		<div class="col-md-4 team-user">
			<div class="thumbnail" >
				<img src="{{asset('img/heri.png')}}" class="img-circle" width="80">
				<p class="user-name">Username</p>
				<p class="user-position">Founder</p>
				<p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
			</div>

		</div>

		<div class="col-md-4 team-user">
			<div class="thumbnail" >
				<img src="{{asset('img/heri.png')}}" class="img-circle" width="80">
				<p class="user-name">Username</p>
				<p class="user-position">Founder</p>
				<p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
			</div>

		</div>

		<div class="col-md-4 team-user">
			<div class="thumbnail" >
				<img src="{{asset('img/heri.png')}}" class="img-circle" width="80">
				<p class="user-name">Username</p>
				<p class="user-position">Founder</p>
				<p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
			</div>

		</div>

		<div class="col-md-4 team-user">
			<div class="thumbnail" >
				<img src="{{asset('img/heri.png')}}" class="img-circle" width="80">
				<p class="user-name">Username</p>
				<p class="user-position">Founder</p>
				<p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
			</div>

		</div>

		<div class="col-md-4 team-user">
			<div class="thumbnail" >
				<img src="{{asset('img/heri.png')}}" class="img-circle" width="80">
				<p class="user-name">Username</p>
				<p class="user-position">Founder</p>
				<p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
			</div>

		</div>

		<div class="col-md-4 team-user">
			<div class="thumbnail" >
				<img src="{{asset('img/heri.png')}}" class="img-circle" width="80">
				<p class="user-name">Username</p>
				<p class="user-position">Founder</p>
				<p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
			</div>

		</div>

		
	</div>
</div>

@endsection