@extends('app')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ITEM TYPES <span class="glyphicon glyphicon-plus" onclick="location='/inventory/createItemType'"></span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TYPE</th>
                                </tr>
                                </thead>
                                @foreach ($types as $type)
                                <tr>
                                    <td>{{$type->id}}</td>
                                    <td>{{$type->name}}</td>
                                </tr>
                                @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
