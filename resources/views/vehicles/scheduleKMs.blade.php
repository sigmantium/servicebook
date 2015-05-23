@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Schedule KM's <span class="glyphicon glyphicon-plus" onclick="location='/vehicles/createScheduleKMs'"></span></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Schedule</th>
                            </tr>
                            </thead>
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{$schedule}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
