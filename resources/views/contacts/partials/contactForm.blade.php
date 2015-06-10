
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::Label('name', 'Name:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('company', 'Company:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                @if(isset($contact))
                    {!! Form::Text('companyName', $contact->company->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
                @else
                    {!! Form::Text('companyName', null, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
                @endif
                    {!! Form::Hidden('companyId', null, ['id' => 'companyId']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('department', 'Department:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                @if(isset($contact))
                    {!! Form::Text('departmentName', $contact->department->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Department Name']) !!}
                @else
                    {!! Form::Text('departmentName', null, ['id' => 'departmentName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Department Name']) !!}
                @endif
                {!! Form::Hidden('departmentId', null, ['id' => 'departmentId']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('phone', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('phone', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('mobile', 'Mobile:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('mobile', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('fax', 'Fax:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('fax', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::Text('email', null, ['class' => 'form-control']) !!}
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
    var companyEngine = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {   url: '/search/company?company=%QUERY%',
            wildcard: '%QUERY%'
        }
    });
    var departmentEngine = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {   url: '/search/department?company='+$("#companyId").val+'&department=%QUERY%',
            wildcard: '%QUERY%'
        }
    });


    companyEngine.initialize();
    departmentEngine.initialize();
    $("#departmentName").typeahead({
        hint: true,
        highlight: true,
        minLength: 2
    }, {
        source: departmentEngine.ttAdapter(),
        name: 'Department_list',
        displayKey: 'name',
        valueKey: 'id',
        templates: {empty: ['<div class="empty-message">Unable to find any</div>']}
    });
    $("#companyName").typeahead({
        hint: true,
        highlight: true,
        minLength: 2
    }, {
        source: companyEngine.ttAdapter(),
        name: 'Company_list',
        displayKey: 'name',
        valueKey: 'id',
        templates: {empty: ['<div class="empty-message">Unable to find any</div>']}
    });
    $(document).bind('keypress keydown keyup', function(e){
        if(e.keyCode == 13) {
            e.preventDefault(); }
    });
    $("#companyName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
        console.log(datum.id);
        $("#companyId").val(datum.id);
    });
    $("#departmentName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
        console.log(datum.id);
        $("#departmentId").val(datum.id);
    });
});
</script>