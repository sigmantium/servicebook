@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Department</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'departments']) !!}
                        @include('departments.partials.departmentForm', ['submitButtonText' => 'Create Department'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')

