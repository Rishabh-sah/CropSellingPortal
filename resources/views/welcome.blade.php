<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="google-translate-customization" content="2a346d14a229c668-7e7397a8cc152430-g725eaceb7864f0fd-12" ></meta>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{asset('js/timer.js')}}"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        body:before{
            
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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 1000vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-center {
                position: absolute;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body >
        <div id="google_translate_element">
        </div>
        
        <script type="text/javascript">
        function googleTranslateElementInit(){
         new google.translate.TranslateElement({pageLanguage:'en',layout:google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element');
        }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            <div class="content">
            <div class='container'style='font-weight: bold;padding-top:10px'>
                    @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                    @endif
            </div>
            <div class="title m-b-md">
                Online Crop Selling
            </div>
            </div><br><br>
        <!-- <div class='content'> 
        Time Left :: 
        <input id="minutes" type="text" style="width: 20px; 
             border: none; font-size: 16px;  
            font-weight: bold; color: black;"><font size="5"> : 
                        </font> 
        <input id="seconds" type="text" style="width: 20px; 
                        border: none; font-size: 16px; 
                        font-weight: bold; color: black;"> 
            </div>                  -->
            <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-center links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

        

    </body>
           
</html>


