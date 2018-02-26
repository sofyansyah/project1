<style type="text/css">
	.social-media li{
		display: inline-block;
	}
	.page-footer{
		background-color: #ff6655;
		color: #fff;
		padding: 20px 0;
		margin-top: 40px;
	}	
	.page-footer a, .page-footer p{
		color: #fff;
	}
	.btn{
		padding: 5.4px 12px;
	}
	.social-media li .fa{
		font-size: 26px;
	}
	.footer-menu li{
		padding: 5px 0;
	}
</style>
<!--Footer-->
<footer class="page-footer">

	<!--Footer Links-->
	<div class="container" style="padding: 20px 0;">
		<div class="row">

			<!--First column-->
			<div class="col-md-3">

				<img src="{{asset('img/logo_white.png')}}" width="130">
			</div>
			<!--/.First column-->

			<!--Second column-->
			<div class="col-md-3">
				<ul class="footer-menu">
				<li><a href="{{url('/about')}}">About</a></li>
					<li><a href="#!">Help</a></li>
					<li><a href="#!">Contact</a></li>
					<li><a href="#!">Terms & Conditions</a></li>
					<li><a href="#!">Privacy Policy</a></li>
				</ul>
			</div>
			<!--/.Third column-->
			<div class="col-md-3">
				<ul class="social-media">
					<li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<!-- <li><a href="#!"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> -->
				</ul>
			</div>

			<!--/.fourth column-->
			<div class="col-md-3">
				<p>Subcribe to our newsletter</p>

				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email Address">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								OK
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--/.Footer Links-->

		<!--Copyright-->
		
	</div>
	<!-- <div class="text-center" style="padding: 5px 0 0; border-top:1px solid #fafafa;">
		© 2017 Copyright <a href=""> Dkvdaily </a>
	</div> -->


	<!--/.Copyright-->
</footer>
<!--/.Footer-->