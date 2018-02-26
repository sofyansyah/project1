<script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
  </script>

  <style>
    @media (min-width: 768px){

    }
    .navbar-right li a{
      color: #777!important;
    }
    .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 160px;
      /*    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
      z-index: 1;
    }

    .dropdown-content li {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content li:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }
    .navbar-left input[type=text] {
      width: 100%;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 2px;
      font-size: 14px;
      background-color: white;
      background-image: url('/img/search.svg');
      background-size: 20px;
      background-position: 10px 10px; 
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
      margin:10px;
    }
    .form-control {
      height: 30px;
      max-width: 100%!important;
    }
    .nav > li > a {
      padding: 10px;
      font-family: 'Roboto'!important;
    }

/*input[type=text]:focus {
    width: 100%;
  }*/
</style>

<nav class="navbar" style="border-radius: 0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      @if (Auth::guest())
      <a class="navbar-brand" href="{{url('/')}}" style="margin: 0 auto;padding: 5px 20px 5px 0"><img src="{{asset('img/logo.svg')}}" width="40"></a>
      @else
      <a class="navbar-brand" href="{{url('/home')}}" style="margin: 0 auto; padding: 5px 20px 5px 0;"><img src="{{asset('img/logo.svg')}}" width="40"></a>
      @endif
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     @if (Auth::guest())
     <ul class="nav navbar-nav navbar-left">
      <li class="menu"><a href="{{url('/')}}">Home</a></li>
      <li class="menu"><a href="#">Explore</a></li>
      <li class="menu"><a href="{{url('/blog')}}">Blog</a></li>
    </ul>
    @else
    <ul class="nav navbar-nav navbar-left">
     <!--  <li><input type="text" name="search" class="form-control"></li> -->
   </ul>
   @endif

   @if (Auth::guest())
   <ul class="nav navbar-nav navbar-right">
    <li class="menu"><a href="{{url('/register')}}">Sign Up</a></li>
    <li class="menu"><a href="#" data-toggle="modal" data-target="#myModal">Sign In</a></li>
  </ul>
  @else
  <ul class="nav navbar-nav navbar-right">
    <li class="menu"><a href="{{url('/home')}}">Home</a></li>
    <li class="menu"><a href="{{url('/explore')}}">Explore</a></li>
    <li class="menu"><a href="{{url('/upload')}}">Upload</a></li>
    <li class="menu"><a href="{{url('/blog')}}">Blog</a></li>
    @if(Auth::user()->avatar==null)
    <li class="dropdown" style="margin: 0 5px;"><a href="{{url('profile/' .Auth::user()->name)}}"><i class="fa fa-user"></i></a>
      <ul class="dropdown-content">
        <li><a href="{{url('/'. Auth::user()->name. '/profile-edit')}}">Edit Profile</a></li>
        <li><a href="{{'/'. Auth::user()->name. '/inbox'}}">Inbox</a></li>
        <li class="menu">
          <a href="{{ url('/logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </li>
  @else
  <li class="dropdown" style="margin: 0 5px;"><a href="{{url('profile/' .Auth::user()->name)}}"><img src="{{asset('img/avatar/' .Auth::user()->avatar)}}" width="30" class="img-circle" ></a>
    <ul class="dropdown-content">
      <li><a href="{{url('/'. Auth::user()->name. '/profile-edit')}}">Edit Profile</a></li>
      <li><a href="{{url('/'. Auth::user()->name. '/inbox')}}">Inbox</a></li>
      <li class="menu">
        <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout
      </a>

      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
</li>
@endif

</ul>
@endif
</div>
</div>
</nav>


<!-- Modal -->


@yield('js')
<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>
<!-- <script>
  var search_bar = $('#searching_for');
  search_bar.on('keypress', function(e){
    if(e.which==13)
    {
      if(search_bar.val() != "")
        window.location = "{{url('/search/')}}/" +encodeURIComponent(search_bar.val());
    }
  });
</script> -->