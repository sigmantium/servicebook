@extends('app')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">INVENTORY ITEMS <span class="glyphicon glyphicon-plus" onclick="location='/inventory/create'"></span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PART NO.</th>
                                    <th>DESCRIPTION</th>
                                    <th>TYPE</th>
                                    <th>COST</th>
                                    <th>SELL</th>
                                    <th>STOCK O.H.</th>
                                    <th>COST O.H.</th>
                                </tr>
                                </thead>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->partNumber}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->type->name}}</td>
                                    <td>{{$item->cost}}</td>
                                    <td>{{$item->sell}}</td>
                                    <td>{{$item->stockOnHand}}</td>
                                    <td>{{$item->costOnHand}}</td>
                                </tr>
                                @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
