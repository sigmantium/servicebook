@extends('app')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">VEHICLE MAKES <span class="glyphicon glyphicon-plus" onclick="location='/vehicles/createMake'"></span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>MAKE</th>
                                </tr>
                                </thead>
                                @foreach ($makes as $make)
                                <tr>
                                    <td>{{$make->id}}</td>
                                    <td>{{$make->name}}</td>
                                </tr>
                                @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
