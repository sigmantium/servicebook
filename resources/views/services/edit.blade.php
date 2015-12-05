@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    {!! Form::Model($service,['method' => 'PUT', 'action' => ['ServicesController@update', $service->id]]) !!}
                </div>

                @include('services.partials.serviceForm', ['submitButtonText' => 'Update Service'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')
