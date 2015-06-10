@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Service Booking</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'services']) !!}
                        @include('services.partials.serviceForm', ['submitButtonText' => 'Create Booking'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')

