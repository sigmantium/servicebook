@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Contact</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'contacts']) !!}
                        @include('contacts.partials.contactForm', ['submitButtonText' => 'Create Contact'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('errors.formErrors')

