@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">New Booking</div>

				<div class="panel-body">
					{!! Form::open(['class' => 'form-horizontal']) !!}
						<div class="col-md-6">
							<div class="form-group">
								{!! Form::Label('rego', 'Rego:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('rego', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('make', 'Make:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Select('make', $makes,null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('model', 'Model:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Select('model', $makes,null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('year', 'Year:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::SelectYear('year', '1960', '2015', '2015', ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('series', 'Series:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('series', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('vin', 'VIN:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('vin', null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								{!! Form::Label('company', 'Company:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('company', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('department', 'Department:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('department', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('fleet', 'Fleet:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('fleet', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('contact', 'Contact:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('contact', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::Label('phone', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
								<div class="col-sm-10">
									{!! Form::Text('phone', null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-mg-12">
							<div class="form-group input-group-md">{!! Form::submit('Create Booking',['class' => 'btn btn-primary form-control']) !!}</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
