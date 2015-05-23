@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New KM Schedule</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'vehicles/scheduleKMs']) !!}
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('schedule', 'Schedule(kms):') !!}
                                    {!! Form::Text('schedule', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-sm">{!! Form::submit('Create KM Schedule',['class' => 'btn btn-primary form-control']) !!}</div>
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