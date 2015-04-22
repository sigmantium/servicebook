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
					<h3 class="panel-title">Todays Bookings</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
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
							<tr>
								<td>1BAN 561</td>
								<td>Honda</td>
								<td>Accord</td>
								<td>Michael</td>
							</tr>
							<tr>
								<td>1CDS 123</td>
								<td>Holden</td>
								<td>Commodore</td>
								<td>Peter Garret</td>
							</tr>
							<tr>
								<td>3324</td>
								<td>10/21/2013</td>
								<td>3:03 PM</td>
								<td>$724.17</td>
							</tr>
							<tr>
								<td>3323</td>
								<td>10/21/2013</td>
								<td>3:00 PM</td>
								<td>$23.71</td>
							</tr>
							<tr>
								<td>3322</td>
								<td>10/21/2013</td>
								<td>2:49 PM</td>
								<td>$8345.23</td>
							</tr>
							<tr>
								<td>3321</td>
								<td>10/21/2013</td>
								<td>2:23 PM</td>
								<td>$245.12</td>
							</tr>
							<tr>
								<td>3320</td>
								<td>10/21/2013</td>
								<td>2:15 PM</td>
								<td>$5663.54</td>
							</tr>
							<tr>
								<td>3319</td>
								<td>10/21/2013</td>
								<td>2:13 PM</td>
								<td>$943.45</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<a href="#">View All Bookings</a>
					</div>
				</div>
			</div>
		</div> <!-- Todays Bookings -->
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
		</div> <!-- Active Jobs Donut -->
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
				{ label: 'Services', value: 20 },
				{ label: 'Repairs', value: 10 },
				{ label: 'Disposals', value: 5 }
			],
			colors: [ "#3333D6", "#4DFF4D","#FF5050"]

		});
	</script>
@endsection

@section('warning')
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> {{ Auth::user()->name }} is already accessing this page!
			</div>
		</div>
	</div>
@endsection

@section('breadcrumb')
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Library</a></li>
		<li class="active">Data</li>
	</ol>
@endsection