@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CONTACTS <span class="glyphicon glyphicon-plus" onclick="location='/contacts/create'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Department</th>
                                <th>Phone</th>
                                <th>Mobile</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Enabled</th>
                            </tr>
                            </thead>
                            @foreach ($contacts as $contact)
                                <tr @if ($contact->enabled == true) class="success" @else class="danger" @endif>
                                    <th><span class="glyphicon glyphicon-pencil" onclick="location='/contacts/{{$contact->id}}/edit'"></span></th>
                                    <td>{{$contact->nameLink}}</td>
                                    <td>{{$contact->company->name}}</td>
                                    <td>{{$contact->department->name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->mobile}}</td>
                                    <td>{{$contact->fax}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>@if ($contact->enabled == 1) Yes @else No @endif</td>
                                </tr>
                                <tr>
                                    <td colspan="7">Notes: {{$contact->notes}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection