@extends('layouts.app1')

@section('content')

<div id="google_translate_element">
        </div>
        
        <script type="text/javascript">
        function googleTranslateElementInit(){
         new google.translate.TranslateElement({pageLanguage:'en',layout:google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element');
        }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id='form'>
             <div class="panel-heading" id='form' style='font-size:50px;text-align:center'>
                Registration Desk
                </div>
                <!-- <div class="panel-heading" id='form' style='text-align:center;'>Register</div> -->
                    <!-- start of the form -->
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                        <!-- name start -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- name Ends -->
                        <!-- email start -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- email end-->
                        <!-- Phone No.start -->
                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-6">
                            
                                <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Phone No.end -->
                        <!-- Address start -->
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">                            
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" >
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Address end-->
                        <!-- pincode start -->
                        <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                            <label for="pincode" class="col-md-4 control-label">Pin Code</label>
                            <div class="col-md-6">
                            
                                <input id="pin" type="tel" class="form-control" name="pin" value="{{ old('pin') }}">

                                @if ($errors->has('pin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- pincode ends -->
                        <!--Role Start-->
                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Select Role</label>
                            <div class='col-md-6'>
                            <select id="role" class='form-control'  name="role" >
                                <option value='2'>Buyer</option>
                                <option value='3'>Farmer</option>
                                <option value='4'>Warehouse Provider</option>
                                <option value='5'>Logistics Provider</option>
                            </select>
                        </div>
                            </div>
                            <!-- Role End -->
                        <!-- Password start -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- password ends -->
                        <!-- Conpass start -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- Conpass end -->             
                        <!-- Register button Start-->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" style='left:70px'>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <!-- Register Button ends -->
                        <!-- Login route -->
                        <div class='form-group'><div class="col-md-6 col-md-offset-4">
                        Already Registered? <a href="/login">Click here!</a></div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection