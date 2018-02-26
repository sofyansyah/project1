@extends ('layouts.master')

@section ('content')
<style type="text/css">
	.blog-author li{
		display: inline-block;
		padding: 5px 15px;
	}
</style>

<div class="container">

	<p>Date</p>
	<h3><b>LOREM IPSUM DOLOR SIT AMET.</b></h3>
<div class="col-md-8">
	<ul class="blog-author">

		<li>Author</li>
		<li>Section</li>
		<li>Comment</li>

	</ul>
	
		<div class="col-md-12 nopadding" style="border-bottom: 1px solid #ddd; padding-bottom: 20px; margin-bottom: 20px;">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="col-md-12 nopadding">
			<p style="float: left;">Comments</p>
			<p style="float: right;">Share</p>
			<textarea class="form-control">Write a respons</textarea>
		</div>
	</div>

	<div class="col-md-4">
			<h4>Poular</h4>
			<hr>
			<ol>
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</li>
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur  </p>
				</li>
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
					
				</li>
			</ol> 

		</div>

</div>
@endsection
