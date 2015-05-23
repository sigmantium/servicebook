
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::Label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('company', 'Parent Company:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                @if(isset($department))
                    {!! Form::Text('companyName', $department->company->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
                @else
                    {!! Form::Text('companyName', null, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
                @endif
                    {!! Form::Hidden('companyId', null, ['id' => 'companyId']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('phone', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('phone', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('address', 'Address:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('address', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('suburb', 'Suburb:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('suburb', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('postcode', 'Postcode:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('postcode', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('state', 'State:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('state', null, ['class' => 'form-control']) !!}
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

<script>
jQuery(document).ready(function($) {
    var engine = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {   url: '/search/company?company=%QUERY%',
            wildcard: '%QUERY%'
        }
    });


    engine.initialize();

    $("#companyName").typeahead({
        hint: true,
        highlight: true,
        minLength: 2
    }, {
        source: engine.ttAdapter(),
        name: 'Company_list',
        displayKey: 'name',
        valueKey: 'id',
        templates: {empty: ['<div class="empty-message">unable to find any</div>']}
    });
    $(document).bind('keypress keydown keyup', function(e){
        if(e.keyCode == 13) {
            e.preventDefault(); }
    });
    $("#companyName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
        console.log(datum.id);
        $("#companyId").val(datum.id);
    });
});
</script>