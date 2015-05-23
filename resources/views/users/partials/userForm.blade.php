
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::Label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('admin', 'Admin User:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10 pull-left">
                {!! Form::Checkbox('admin', 1, null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="form-group input-group-md">{!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}</div>
    </div>
</div>
