@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Company</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'companies']) !!}
                        @include('companies.partials.companyForm', ['submitButtonText' => 'Create Company'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')

@section('warning')
    @if ( URL::previous() != URL::current() )
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Heads Up!</strong> Companies are disabled by default. You need to edit the company and then enable.
                        </div>
                    </div>
                </div>
            </div>
    @endif
@endsection
