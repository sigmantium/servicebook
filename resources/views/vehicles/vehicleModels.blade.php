@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">VEHICLE MODELS <span class="glyphicon glyphicon-plus" onclick="location='/vehicles/createModel'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>MAKE</th>
                                <th>MODEL</th>
                            </tr>
                            </thead>
                            @foreach ($models as $model)
                                <tr>
                                    <td>{{$model->id}}</td>
                                    <td>{{$model->make->name}}</td>
                                    <td>{{$model->name}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
