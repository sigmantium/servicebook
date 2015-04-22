@extends('app')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">VEHICLE MAKES <span class="glyphicon glyphicon-plus" onclick=""></span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <tbody class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>REFERANCE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($makes as $make)
                                <tr>
                                    <td>{{$make->id}}</td>
                                    <td>{{$make->name}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
