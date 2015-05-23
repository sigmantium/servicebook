@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Service Status</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'services/serviceStatuses']) !!}
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('status', 'Status:') !!}
                                    {!! Form::Text('status', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-sm">{!! Form::submit('Create Status',['class' => 'btn btn-primary form-control']) !!}</div>
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