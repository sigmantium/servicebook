@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">USERS <span class="glyphicon glyphicon-plus" onclick="location='/users/create'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Enabled</th>
                                <th>Admin</th>
                            </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tr @if ($user->enabled == 1) class="success" @else class="danger" @endif>
                                    <th><span class="glyphicon glyphicon-pencil" onclick="location='/users/{{$user->id}}/edit'"></span></th>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if ($user->enabled == 1) Yes @else No @endif</td>
                                    <td>@if ($user->admin == 1) Yes @else No @endif</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection