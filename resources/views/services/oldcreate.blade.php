@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">New Booking</div>

				<div class="panel-body">
					{!! Form::open(['class' => 'form-horizontal']) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
