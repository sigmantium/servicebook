@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit User</div>
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::Model($user,['method' => 'PUT', 'action' => ['UsersController@update', $user->id]]) !!}
                            {!! Form::Label('enabled', 'Enabled:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10 pull-left">
                                {!! Form::Checkbox('enabled', 1, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        @include('users.partials.userForm', ['submitButtonText' => 'Update User'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')
