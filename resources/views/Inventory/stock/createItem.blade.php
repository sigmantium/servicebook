@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Item</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'inventory/itemTypes']) !!}
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('partNumber', 'Part Number:') !!}
                                    {!! Form::Text('partNumber', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('description', 'Description:') !!}
                                    {!! Form::Text('description', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('cost', 'Cost:') !!}
                                    {!! Form::Text('cost', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('sell', 'RRP:') !!}
                                    {!! Form::Text('sell', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group input-group-xs">
                                    {!! Form::Label('stocked', 'Stocked:') !!}
                                    {!! Form::Text('description', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group input-group-sm">{!! Form::submit('Create Type',['class' => 'btn btn-primary form-control']) !!}</div>
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