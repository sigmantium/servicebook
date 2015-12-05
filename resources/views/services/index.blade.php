@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Services <span class="glyphicon glyphicon-plus" onclick="location='/services/create'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Rego</th>
                            </tr>
                            </thead>
                            @foreach ($services as $service)
                                <tr class="success">
                                    <th><span class="glyphicon glyphicon-pencil" onclick="location='/services/{{$service->id}}/edit'"></span> {!! $service->rego !!}</th>
                                </tr>
                                <tr>
                                    <td colspan="7">Notes: {{$service->notes}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection