@extends('app')

@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard <small>Job Overview</small></h1>
		</div>
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">@if ($date == date('d-m-Y'))Today @else {!! $date !!}@endif Bookings</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive"><!-- Todays Bookings -->
						<table class="table table-bordered table-hover table-striped">
							<thead>
							<tr>
								<th>Rego</th>
								<th>Make</th>
								<th>Model</th>
								<th>Name</th>
							</tr>
							</thead>
							<tbody>
							@foreach ( $bookings as $booking)
								<tr onclick="window.location.href='services/{!!$booking->id!!}/edit'">
									<td>{!!$booking->rego!!}</td>
									<td>{!!$booking->make->name!!}</td>
									<td>{!!$booking->model->name!!}</td>
									<td>{!!$booking->contact->name!!}</td>
								</tr>
								<tr onclick="window.location.href='services/{!!$booking->id!!}/edit'">
									<td colspan="4">{!!$booking->serviceNotes!!}</td>
								</td>
							@endforeach
							</tbody>
						</table>
					</div>
					<div class="btn-group btn-group-xs" role="group" aria-label="Day Select">
						<button type="button" class="btn btn-default" onclick="window.location.href='/?booking_date={!! Carbon\Carbon::createFromFormat('d-m-Y', $date)->subDays(1)->format('d-m-Y')!!}'"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button>
						<button type="button" class="btn btn-default" onclick="window.location.href='/?booking_date={!! date('d-m-Y')!!}'">Today</button>
						<button type="button" class="btn btn-default" onclick="window.location.href='/?booking_date={!! Carbon\Carbon::createFromFormat('d-m-Y', $date)->addDays(1)->format('d-m-Y')!!}'"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
					</div>
					<div class="text-right">
						<a href="/services">View All Bookings</a>
					</div>
				</div>
			</div>
		</div> <!-- Active Jobs Donut -->
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Active Jobs</h3>
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
					<div class="text-right">
						<a href="#">View Details</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<span class="badge">just now</span>
							<i class="fa fa-fw fa-calendar"></i> Calendar updated
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">4 minutes ago</span>
							<i class="fa fa-fw fa-comment"></i> Commented on a post
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">23 minutes ago</span>
							<i class="fa fa-fw fa-truck"></i> Order 392 shipped
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">46 minutes ago</span>
							<i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">1 hour ago</span>
							<i class="fa fa-fw fa-user"></i> A new user has been added
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">2 hours ago</span>
							<i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">yesterday</span>
							<i class="fa fa-fw fa-globe"></i> Saved the world
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">two days ago</span>
							<i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
						</a>
					</div>
					<div class="text-right">
						<a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div> <!-- Tasks -->
	</div>
</div>
	<!-- script -->
	<script>
		new Morris.Donut({
			// ID of the element in which to draw the chart.
			element: 'morris-donut-chart',
			// Chart data records -- each entry in this array corresponds to a point on
			// the chart.
			data: [
				{ label: 'Services', value: {!! $count_list[0]->Services_Count + $count_list[0]->Both_Count !!} },
				{ label: 'Repairs', value: {!!   $count_list[0]->Repairs_Count + $count_list[0]->Both_Count !!} },
				{ label: 'Disposals', value: {!! $count_list[0]->Disposal_Count !!} }
			],
			colors: [ "#3333D6", "#4DFF4D","#FF5050"]

		});
	</script>
@endsection
