<style type="text/css">
  .like li{
    display: inline-block;
    padding: 5px;

  }
  .navbar{
    margin-bottom: 0!important;
  }
  .filter li{
    display: inline-block;
    padding: 0 5px;
  }
  .filter, .fitur{
    margin-bottom: 0!important;
  }
  .fitur li{
   display: inline-block;
   padding: 0 4px 0 2px!important;


 }
 .col-md-3{
  padding-right: 4px;
  padding-left: 4px;
  padding-bottom: 0px;
  margin-bottom: 5px;
  
}
.text-left li{
 display: inline-block;
}
.art-body{
 padding: 5px 10px!important;
 margin-bottom: 0!important
}

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

h4{
  font-size: 16px!important;
}
.submenu{
  background-color: #fff;
  border-bottom: 1px solid #e9e9e9;
  z-index: 99;
}
.submenu li h4{
  color: #3a8bbb;
  font-size: 14px!important;
}
.mask {
  height: 220px;
  overflow: hidden;
}
.panel{
  border: none!important;
}

.image-hover{
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.image-hover:hover .overlay{
  opacity: 1;

}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.text{
  color: white;
  font-size: 20px;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: left;
  width: 100%;
  padding: 20px;
}
.text p{
  color: white;
  width: 100%;
}


</style>
<div class="container nopadding">

 <!--  <div class="grid">  -->
 <div class="col-md-12">
  @forelse($art as $arts)
  @php
  {{--$like = App\Like::where( 'artwork_id', $arts->id )->where('user_id',Auth::user()->id)->first(); --}}
  $urlUser = $arts->user_name;
  @endphp


   <!--  <div class="grid-sizer"></div>
   <div class="grid-item"> -->

    <div class="col-md-3">
      <div class="panel panel-default" style="margin-bottom: 5px; padding:5px;">
        <div class="panel-body nopadding">
       <!--  <div class="col-md-4 text-right">
           <i class="fa fa-ellipsis-h fa-lg" style="color:#aaa;padding: 5px 0;"></i>
         </div> -->
         <div class="image-hover">       
          <img src="{{asset('img/artwork/'. $arts->img_small)}}" width="100%" class="image">
          <div class="overlay">
            <div class="text">
              <a href="#" data-toggle="modal" data-target="#myModal{{$arts->id}}">
                <p>{{$arts->title}}</p></a>
                <p style="font-size: 12px;">{{$arts->description}}</p>
                <p style="font-size: 15px;">by {{$arts->user_name}}</p>
                <div class="col-md-12 like" style="padding-bottom: 10px;">
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal{{$arts->id}}" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-body">
            <div class="col-md-12">
              <div class="col-md-5"  style="overflow-y: scroll; max-height: 500px;">
                <div class="col-md-12 nopadding">
                  <img src="{{asset('img/avatar/'. $arts->user_avatar)}}" width="60" class="img-circle" style="float:left; margin-right: 10px;"> 
                  <h4 style="margin-bottom: 0;">{{$arts->user_name}}</h4>
                  <span style="color: #aaa;">{{$arts->created_at->diffForHumans()}}</span>
                </div>
                <div class="col-md-12 nopadding">
                  <h3>{{$arts->title}}</h3>
                  <p>{{$arts->description}}</p>
                </div>

                <ul class="fiture-like">
                  <li>30 <i class="fa fa-heart-o"></i></li>
                  <li>100 <i class="fa fa-comment-o"></i></li>
                  <li><i class="fa fa-upload"></i></li>
                </ul>
                <br>


                <div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
                  <div class="col-md-1 nopadding">
                    <img src="{{asset('img/avatar/'. $arts->user_avatar)}}" width="35" class="img-circle">
                  </div>
                  <div class="col-md-11"> 
                    <h4 style="margin: 0;">{{$arts->user_name}}</h4>
                    <p style="margin: 0;">lorem ipsum sir dolo amet</p>
                    <span style="color: #aaa; font-size: 12px;">{{$arts->created_at->diffForHumans()}}</span>
                  </div>      
                </div>

                <div class="col-md-12" style="border-bottom: 1px solid #ddd; padding: 10px 0; margin-bottom: 10px;">
                  <div class="col-md-1 nopadding">
                    <img src="{{asset('img/avatar/'. $arts->user_avatar)}}" width="35" class="img-circle">
                  </div>
                  <div class="col-md-11"> 
                    <h4 style="margin: 0;">{{$arts->user_name}}</h4>
                    <p style="margin: 0;">lorem ipsum sir dolo amet</p>
                    <span style="color: #aaa; font-size: 12px;">{{$arts->created_at->diffForHumans()}}</span>
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
                <div id="images" style="background-image: url({{asset('/img/artwork/'. $arts->img_normal)}}); "></div>
              </div>
            </div>
          </div>
          <div class="modal-footer" style="border:none;">

          </div>
        </div>

      </div>
    </div>

    @empty
    @endforelse

  </div>
</div>
</div>
