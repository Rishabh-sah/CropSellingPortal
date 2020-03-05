<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 
        CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
<title>login form</title>
<link rel="icon" src="images/veslogo.png" type="image/x-icon">
<style>
body{
margin: 0;
padding: 0;
}
body:before{
content: '';
position: fixed;
width: 100vw;
height: 100vh;
background-image: url("images/build.png");
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
-webkit-filter: blur(5px);
-moz-filter: blur(5px);
-o-filter: blur(5px);
-ms-filter: blur(5px);
filter: blur(5px);
}
.Login-form
{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
height: 400px;
padding: 80px 40px;
box-sizing: border-box;
background: rgba(0,0,0,.8);
border-radius:7%;
}
.avatar {
position: absolute;
width: 120px;
height: 100px;
border-radius: 10%;
overflow: hidden;

top: calc(-100px/2);
left: calc(50% - 60px);
}
.Login-form h2 {
margin: 0;
padding: 0 0 20px;
color: #fff;
text-align: center;
text-transform: uppercase;
}
.Login-form p
{
margin: 0;
padding: 0;
font-weight: bold;
color: #fff;
}
.Login-form input
{
width: 100%;
margin-bottom: 20px;
}
.Login-form input[type="text"],
.Login-form input[type="password"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 17px;
color: #fff;
font-size: 16px;
}
.Login-form input[type="submit"] {
height: 30px;
color: #fff;
font-size: 15px;
background: red;
cursor: pointer;
border-radius: 25px;
border: none;
outline: none;
margin-top: 15%;
}
.Login-form a
{
color: #fff;
font-size: 14px;
font-weight: bold;
text-decoration: none;
}
 #btn {
         background-color: #8AB4F8;
         border: none;
         color: black;
         padding: 7px 20px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
		 border-radius: 7px;
		 position : absolute;
		 top: calc(+470px/2);
		 left: calc(50% - 50px);
		 font-family:"Times New Roman";
		 
         }
		 
#btn:hover{
			background-color: transparent;
			color: white;
			
			}
	a:link, a:visited {
  background-color: transparent;
  color: white;
  padding: 7px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:7px;
  position : absolute;
		 top: calc(+590px/2);
		 left: calc(50% - 100px);
		 font-family:"Times New Roman";
}

a:hover, a:active {
  background-color: #8AB4F8;
  color:black;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
    
                <div class="navbar-header">
                   
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   <a class="navbar-brand" href="{{ url('/') }}">
                   <img src='https://www.latestlaws.com/media/2019/02/c01d458630da7d287abbc4470b488c19.png' width="50">
                    {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class="Login-form">
<img src="images/veslogo.png" class="avatar">
<h2>Login</h2>
<form method="POST" action="{{ route('login') }}" >
<p style="color:white">
<div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-6" style="color:white">
                    USERNAME:<input type="text" name="user_name" style = "color:white" required ><br>
    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6" style="color:white">
	PASSWORD:<input type="password" name="password" style = "color:white" required><br>
    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
</div>
<!-- <button formaction ="" id="btn" id="btn"><b>Login</b></button> -->
<button type="submit" id='btn'>Login</button>
  <br><br>
 <a href="/register">Not registered? Click here!</a>
</p>
</form>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>