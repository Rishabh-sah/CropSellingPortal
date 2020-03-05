@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($crop) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($crop as $crp)
                                <tr>
                                    <td>{{$crp->name}}</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['CropController@destroy', $crop->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no crops</p>
                    @endif
                    <button class='btn btn-primary' onclick="location.href='/AddCrop'">ADD CROP</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection