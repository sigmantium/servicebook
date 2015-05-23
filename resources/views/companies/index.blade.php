@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">COMPANIES <span class="glyphicon glyphicon-plus" onclick="location='/companies/create'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Account</th>
                                <th>Enabled</th>
                            </tr>
                            </thead>
                            @foreach ($companies as $company)
                                <tr @if ($company->enabled == 1) class="success" @else class="danger" @endif>
                                    <th><span class="glyphicon glyphicon-pencil" onclick="location='/companies/{{$company->id}}/edit'"></span></th>
                                    <td>{{$company->id}}</td>
                                    <td>{{$company->name}}</td>
                                    <td>@if ($company->account == 1) Yes @else No @endif</td>
                                    <td>@if ($company->enabled == 1) Yes @else No @endif</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection