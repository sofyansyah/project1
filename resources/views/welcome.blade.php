@extends('layouts.master')
@section('content')
<style type="text/css">
    .jumbotron{
        margin-top: -21px;
        height: 350px!important;
    }
    .content{
        background-color: #fafafa;
        padding: 25px 15px;
    }
    .content2 .thumbnail{
        border: none;
        background-color: #fafafa;
        padding: 25px 0;
        
    }
    .content1 .thumbnail{
        border:none;
        background-color: #ff665526;
    }
    .thumbnail{
        height: 350px!important;
    }
    .title{
        margin-bottom: 20px;
    }
    .title h4, .content h4{
        font-weight: bold;
        color: #ff6655;
    }
    p{
        color: #777;
    }
</style>

<div class="jumbotron banner">
<div class="container">
    <p style="color: #ff6655;">
        Introductions
    </p>
    <h2>LOREM IPSUM</h2>
    <div class="col-md-6 offset-2 nopadding">
    <p style="font-size: 18px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
    </p>
    </div>
</div>
</div>

<div class="container">

    <div class="col-md-8 col-md-offset-2 title text-center">
        <h4>How It Works</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
        </p>

    </div>

    <div class="col-md-12 content">

        <div class="col-md-6 content1">
            <div class="thumbnail">

            </div>
        </div>

        <div class="col-md-6 content2">
            <div class="thumbnail">
                <h4>Features</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

            </div>
        </div>

        <div class="col-md-6 content1 pull-right">
            <div class="thumbnail">

            </div>
        </div>

        <div class="col-md-6 content2">
            <div class="thumbnail">
                <h4>Features</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

            </div>
        </div>


        <div class="col-md-6 content1">
            <div class="thumbnail">

            </div>
        </div>

        <div class="col-md-6 content2">
            <div class="thumbnail">
                <h4>Features</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

            </div>
        </div>
    </div>

</div>
@endsection