@php
$follows = DB::table('follower')->where('follow_user', '=', $user->id)->count();
$following = DB::table('follower')->where('user_id', '=', $user->id)->count();
$follow = DB::table('follower')->where('user_id',Auth::user()->id)->where('follow_user',$user->id)->first();
$art= DB::table('artworks')->join('users', 'artworks.user_id', '=', 'users.id')
->where('artworks.user_id', $user->id)
->select('artworks.*','users.name as user_name', 'users.avatar as user_ava', 'users.job')
->orderBy('id', 'desc')
->get();

@endphp
<style type="text/css">
  .banner{
    height: 200px; margin-bottom: 3%; background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(51, 51, 51, 0.52) 100%), url('/img/guitar.jpeg'); 

  }
  .fitur li{
   display: inline-block;
   padding: 0 5px!important;

 }
 .rank-label-container {
  margin-top: -29px;
  margin-left: 60px;
  /* z-index: 1000; */
  text-align: center;
}

.label.label-default.rank-label {
  background-color: transparent;

}
.form-control{
  max-width: 100%;
}

.profile-name{
  font-size: 30px!important;
  font-weight: bold;
  font-family: 'roboto';
  margin-top: 0;
  float: left;
  padding-right: 20px;
}
.follow{
  margin: 5px 0!!important;
}
</style>

<div class="col-md-10 col-md-offset-1 nopadding" style="margin-bottom: 3%;">
  <div class="panel panel-default" style="margin-bottom: 0;border: none!important;">
    <div class="panel-body" style="background-image: url({{asset('/img/banner/'. $user->banner)}}); border: none!important;">

     <div class="col-md-3 pull-right text-right" style="padding: 10px;">
      <img src="{{asset('/img/avatar/'.$user->avatar)}}" class="img-circle" width="120" />
    </div>

    <div class="col-md-9 pull-left">
     <div class="col-md-12 nopadding">
      <h4 class="profile-name">{{$user->name}}</h4>
      @if ($user->name == Auth::user()->name)
      @else
      @if(count($follow) > 0)
      <a href="{{url('unfollow/'.$follow->id)}}" class="btn btn-success" style="margin: 5px 0!important;"> Followed </a>
      @else
      <a href="{{url('follow/'.$user->id)}}" class="btn btn-info" style="margin: 5px 0!important;"> Follow</a>
      @endif
      {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Send a message</button>
      <a href="{{url('/'. $user->name. '/send-message')}}" class="btn btn-primary">Send a Message</a>--}}

      @endif
    </div>
    <br>
    @if($user->job == null)
    <p>{{$user->job}}</p>

    @else
    @endif

    <p>"{{$user->bio}}"</p>


    <!-- <a href="{{url('/group/tes')}}" class="btn btn-warning">team</a> -->

    <ul class="sub-menu-profile text-left" style="margin-left: 0;">
      <!-- <p style="padding: 1px 10%; color: #aaa;">"{{$user->bio}}"</p> -->
      <li style="padding-left: 0!important;">10{{--$art->count()--}} <a href="{{url('profile/'.$user->name)}}">Artwork</a></li>
      <li>20{{--$following--}} <a href="{{url('profile/'.$user->name.'/following')}}">Following</a></li>
      <li>45{{--$follows--}} <a href="{{url('profile/'.$user->name.'/followers')}}">Followers</a></li>
    </ul>

    <p>Team Member of <span style="color: #ff6655; font-weight: bold;"> 1 Day 1 Artworks</span></p>

  </div>

  {{--<div class="rank-label-container">
  <span class="label label-default rank-label"><img src="{{asset('img/emoticon/'.$stats->emoticon)}}" width="30"></span>
</div>--}}
<!-- <a href="{{'/'. $user->name. '/profile-edit'}}" class="btn btn-warning">Edit Profile</a> -->

{{--<div class="col-md-12">
<ul class="sub-menu-profile text-center">
  <li class="text-center">

    @if( $user->instagram != '' )
    <a target="_blank" href="https://instagram.com/{!! $user->instagram !!}"  class="urls-bio">
     <i class="fa fa-instagram" aria-hidden="true"></i>
   </a> 
   @endif

   @if( $user->facebook != '' ) 
   <a target="_blank" href="https://facebook.com/{!! $user->facebook !!}"  class="urls-bio">
     <i class="fa fa-facebook" aria-hidden="true"></i>
   </a>
   @endif

   @if( $user->twitter != '' )  
   <a target="_blank" href="https://twitter.com/{!! $user->twitter !!}"  class="urls-bio">
    <i class="fa fa-twitter" aria-hidden="true"></i>
  </a>
  @endif

  @if( $user->web != '' )  
  <a target="_blank" href="{!! e( $user->web ) !!}" class="urls-bio">
    <i class="fa fa-pinterest-p" aria-hidden="true"></i> 
  </a>
  @endif

</li>

</ul>
</div>--}}
</div>
</div>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <form action="{{url('post-send-message/'. $user->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="panel-body">
          <div class="form-group">
            <label>Send Message</label>
            <textarea class="form-control" name="message"></textarea><br>
            <label></label>
            <button type="submit" name="" class="btn btn-primary">Send</button>
          </div>

        </div>
      </form>
    </div>

  </div>

</div>
</div>

</div>
