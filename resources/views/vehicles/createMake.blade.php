@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Vehicle Make</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'vehicles/vehicleMakes']) !!}
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('name', 'Make:') !!}
                                    {!! Form::Text('name', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-sm">{!! Form::submit('Create Make',['class' => 'btn btn-primary form-control']) !!}</div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')