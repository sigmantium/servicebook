@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Warehouse</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'warehouses']) !!}
                        @include('inventory.warehouses.partials.warehouseForm', ['submitButtonText' => 'Create Warehouse'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')
