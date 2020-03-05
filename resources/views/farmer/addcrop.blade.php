Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@Rishabh-sah 
Rishabh-sah
/
Business-Incubator
1
01
 Code Issues 0 Pull requests 1 Actions Projects 0 Wiki Security Insights Settings
Business-Incubator/resources/views/path/addproperty.blade.php
 BabliSah done
99a273b on Oct 15, 2019
We found potential security vulnerabilities in your dependencies.
Only the owner of this repository can see this message.

49 lines (44 sloc)  1.51 KB
  
  
@extends('layouts.app ')
@section('content')
<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
   
</head>
<body>
      {!!Form::open(['action'=>'CropController@store','method'=>'POST'])!!}
      {{Form::label('name','Crop Name')}}
      {{Form::text('name','',['class'=>'form-control','placeholder'=>'Crop Name'])}}
      <br />
      {{Form::label('Quantity','quantity')}}
      {{Form::text('Quantity','',['class'=>'form-control','placeholder'=>'Quantity(in tons)'])}}
      <br />
      {{Form::label('Harvest_date','Harvest_date')}}
      {{Form::date('harvest_date','',['class'=>'form-control','placeholder'=>'Date of Harvest'])}}
      <br />
      <br />
      {{Form::label('Price','Price')}}
      {{Form::number('Price','',['class'=>'form-control','placeholder'=>'Price'])}}
      <br>
      {{Form::label('Image','Image')}}
      {{Form::file('image','',['class'=>'form-control'])}}
      <br />
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!!Form::close()!!}
@endsection