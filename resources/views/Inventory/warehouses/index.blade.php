@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">WAREHOUSES <span class="glyphicon glyphicon-plus" onclick="location='/warehouses/create'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Enabled</th>
                            </tr>
                            </thead>
                            @foreach ($warehouses as $warehouse)
                                <tr @if ($warehouse->enabled == 1) class="success" @else class="danger" @endif>
                                    <th><span class="glyphicon glyphicon-pencil" onclick="location='/warehouses/{{$warehouse->id}}/edit'"></span></th>
                                    <td>{{$warehouse->id}}</td>
                                    <td>{{$warehouse->name}}</td>
                                    <td>{{$warehouse->address}}</td>
                                    <td>@if ($warehouse->enabled == 1) Yes @else No @endif</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection