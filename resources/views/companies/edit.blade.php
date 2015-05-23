@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Company</div>
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::Model($company,['method' => 'PUT', 'action' => ['CompaniesController@update', $company->id]]) !!}
                            {!! Form::Label('enabled', 'Enabled:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10 pull-left">
                                {!! Form::Checkbox('enabled', 1, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        @include('companies.partials.companyForm', ['submitButtonText' => 'Update Company'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')
