@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">New Booking</div>

				<div class="panel-body">
					{!! Form::open() !!}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group input-group-xs">
								{!! Form::Label('rego', 'Rego:') !!}
								{!! Form::Text('rego', null, ['class' => 'form-control']) !!}
								{!! Form::Label('make', 'Make:') !!}
								{!! Form::Text('make', null, ['class' => 'form-control']) !!}
								{!! Form::Label('model', 'Model:') !!}
								{!! Form::Text('model', null, ['class' => 'form-control']) !!}
								{!! Form::Label('year', 'Year:') !!}
								{!! Form::SelectYear('year', '1960', '2015', '2015', ['class' => 'form-control']) !!}
								{!! Form::Label('series', 'Series:') !!}
								{!! Form::Text('series', null, ['class' => 'form-control']) !!}
								{!! Form::Label('vin', 'VIN:') !!}
								{!! Form::Text('vin', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="col-lg-12 col-md-6">
							<div class="form-group input-group-xs">
								{!! Form::Label('company', 'Company:') !!}
								{!! Form::Text('company', null, ['class' => 'form-control']) !!}
								{!! Form::Label('department', 'Department:') !!}
								{!! Form::Text('department', null, ['class' => 'form-control']) !!}
								{!! Form::Label('fleet', 'Fleet:') !!}
								{!! Form::Text('fleet', null, ['class' => 'form-control']) !!}
								{!! Form::Label('contact', 'Contact:') !!}
								{!! Form::Text('contact', null, ['class' => 'form-control']) !!}
								{!! Form::Label('phone', 'Phone:') !!}
								{!! Form::Text('phone', null, ['class' => 'form-control input-group-xs']) !!}
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-mg-6">
							<div class="form-group input-group-sm">{!! Form::submit('Create Booking',['class' => 'btn btn-primary form-control']) !!}</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
