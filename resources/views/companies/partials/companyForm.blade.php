
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::Label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('account', '30 Day Account:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10 pull-left">
                {!! Form::Checkbox('account', 1, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('notes', 'Notes:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::TextArea('notes', null, ['class' => 'form-control', 'rows'=>'5']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="form-group input-group-md">{!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}</div>
    </div>
</div>
