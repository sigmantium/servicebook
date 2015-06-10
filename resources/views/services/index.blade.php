@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">DEPARTMENTS <span class="glyphicon glyphicon-plus" onclick="location='/departments/create'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Company</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Enabled</th>
                            </tr>
                            </thead>
                            @foreach ($departments as $department)
                                <tr @if ($department->enabled == true) class="success" @else class="danger" @endif>
                                    <th><span class="glyphicon glyphicon-pencil" onclick="location='/departments/{{$department->id}}/edit'"></span></th>
                                    <td>{{$department->company->name}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>@if ($department->primaryContact){{$department->primaryContact->name}} @else No Contact Set @endif</td>
                                    <td>{{$department->phone}}</td>
                                    <td>{{$department->address}}<br/>{{$department->suburb}} {{$department->postcode}}<br/>{{$department->state}}</td>
                                    <td>@if ($department->enabled == 1) Yes @else No @endif</td>
                                </tr>
                                <tr>
                                    <td colspan="7">Notes: {{$department->notes}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection