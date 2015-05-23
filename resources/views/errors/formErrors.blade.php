@section('error')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Error: </strong> {{$error}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection