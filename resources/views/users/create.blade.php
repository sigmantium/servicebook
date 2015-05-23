@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New User</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'users']) !!}
                        <div class="form-group">
                            {!! Form::Label('password', 'Password:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        @include('users.partials.userForm', ['submitButtonText' => 'Create User'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')

