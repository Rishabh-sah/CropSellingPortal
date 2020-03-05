<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>registration form</title>
<link rel="icon" href="vesitlogo.png" type="image/x-icon">
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
.Registration-form
{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 400px;
height: 820px;
padding: 80px 40px;
box-sizing: border-box;
background: rgba(0,0,0,.7);
border-radius:5%;
top: 500px;
bottom: 500px;
}
.avatar {
/*position: absolute;
width: 80px;
height: 80px;
border-radius: 10%;
overflow: hidden;
top: calc(-60px/2);
left: calc(50% - 40px);*/
position: absolute;
width: 120px;
height: 100px;
border-radius: 10%;
overflow: hidden;

top: calc(-100px/2);
left: calc(50% - 60px);
}
.Registration-form h2 {
margin: 0;
padding: 0 0 20px;
color: #fff;
text-align: center;
text-transform: uppercase;
}
.Registration-form p
{
margin: 0;
padding: 0;
font-weight: bold;
color: #fff;
}
.Registration-form input
{
width: 100%;
margin-bottom: 20px;
}
.Registration-form input[type="text"],
.Registration-form input[type="password"],
.Registration-form input[type="number"],
.Registration-form input[type="tel"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 17px;
color: #fff;
font-size: 16px;
}
.Registration-form input[type="submit"] {
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
.Registration-form a
{
color: #fff;
font-size: 14px;
font-weight: bold;
text-decoration: none;
}
input[type="checkbox"] {

width: 20%;
}
#btn {
    background-color: #8AB4F8;
    border: none;
    color: black;
    padding: 7px 140px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 7px;
    position : absolute;
    top: calc(+1450px/2);
    left: calc(50% - 170px);
    font-family:"Times New Roman";
    
    }
		 
#btn:hover{
			background-color: transparent;
			color: white;
			
			}
a:hover, a:active {
  background-color: #8AB4F8;
  color:black;
  padding: 8px;
  border-radius: 5px;
}
</style>

</head>
<body>
<div class="Registration-form">
<img src="images/veslogo.png" class="avatar">
<h2>Registration Form</h2>
<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
<p style="color:white">

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="color:white">
	NAME:<input type="text" name="Name" style = "color:white" class="required" required >
	@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif</div><br>


<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="color:white">
        EMAIL-ID:
     <input type="text" name="email_id" style = "color:white" required> 
     <br>
     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
     </div>

     <div class="form-group{{ $errors->has('phoneno') ? ' has-error' : '' }}" style="color:white">
	PHONE NUMBER:<input type="tel" maxlength="10" name="Phone number" style = "color:white" required>
	<br>
	  
     ADDRESS:
     <input type="text" color="red" name="address" style = "color:white" required> 
     <br>
     PINCODE: 
     <input type="number" name="pincode" max="999999" style = "color:white" required> 
	 <br>
     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
         INPUT PASSWORD:<input type="password" name="input_password" style = "color:white" required >
         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
	CONFIRM PASSWORD:<input type="password" name="confirm_password" style = "color:white" required><br>
	DTE APPLICATION ID:<input type="text" name="dte_id" style = "color:white" required><br>
	PERCENTAGE:<input type="number" name="marks" min="1" max="100" style = "color:white" required><br>
	APPLICATION NUMBER:<input type="text" name="Application_no." style = "color:white" required>
<<<<<<< HEAD:resources/views/auth/registration.blade.php
<button formaction ="registration2.html"  id="btn"><b>Next</b></button>
=======
    <div>
<button type='submit'  id="btn"><b>Next</b></button><br><br><br></div>
<a href="/login">Already Registered? Click here!</a>

>>>>>>> b33613ef5b1fac0dc04154f5486be4441e14532f:resources/views/auth/register0.blade.php
</p>
</form>
</div>
</body>
</html>