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
            @if(isset($service))
                {!! Form::Text('vehicleMakeName', $service->vehicleMake->name, ['id' => 'vehicleMakeName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Make']) !!}
            @else
                {!! Form::Text('vehicleMakeName', null, ['id' => 'vehicleMakeName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Make']) !!}
            @endif
            {!! Form::Hidden('makeId', null, ['id' => 'makeId']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('model', 'Model:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            @if(isset($service))
                {!! Form::Text('vehicleModelName', $service->vehicleModel->name, ['id' => 'vehicleModelName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Model']) !!}
            @else
                {!! Form::Text('vehicleModelName', null, ['id' => 'vehicleModelName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Model']) !!}
            @endif
            {!! Form::Hidden('modelId', null, ['id' => 'modelId']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('method', 'Method:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('method', array('Drop-Off', 'Pick-Up', 'Onsite'), 'Drop-Off', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('available', 'Available:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            <div class="input-group bootstrap-timepicker timepicker">
                {!! Form::Text('available', null,  ['id' => 'available', 'class' => 'form-control input-small']) !!}
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>

        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('due', 'Due By:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            <div class="input-group bootstrap-timepicker timepicker">
                {!! Form::Text('due', null,  ['id' => 'due', 'class' => 'form-control input-small']) !!}
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>

        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('priority', 'Priority:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('priority', ['Low','Medium','High','Urgent'], 'Low', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('disposal', 'Disposal:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::CheckBox('disposal', '',0, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        {!! Form::Label('company', 'Company:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            @if(isset($service))
                {!! Form::Text('companyName', $service->company->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
            @else
                {!! Form::Text('companyName', null, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
            @endif
            {!! Form::Hidden('companyId', null, ['id' => 'companyId']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('department', 'Department:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            @if(isset($service))
                {!! Form::Text('departmentName', $service->department->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Department Name']) !!}
            @else
                {!! Form::Text('departmentName', null, ['id' => 'departmentName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Department Name']) !!}
            @endif
            {!! Form::Hidden('departmentId', null, ['id' => 'departmentId']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('contact', 'Contact:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            @if(isset($service))
                {!! Form::Text('contactName', $service->contact->name, ['id' => 'contactName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Contact Name']) !!}
            @else
                {!! Form::Text('contactName', null, ['id' => 'contactName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Contact Name']) !!}
            @endif
            {!! Form::Hidden('contactId', null, ['id' => 'contactId']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('phone', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('phone', null, ['class' => 'form-control', 'id' => 'phone']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('fleet', 'Fleet:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('fleet', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('type', 'Type:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('type', ['Service','Repair','Both'], 'Service', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <hr>
    <div class="form-group">
        {!! Form::Label('description', 'Job Description:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-lg-12 col-md-12">
           {!! Form::TextArea('serviceNotes', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="form-group input-group-md">{!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}</div>
    </div>
</div>
@include('partials.search.company', ['companyNameField'=>'companyName','companyIdField' => 'companyId'])
@include('partials.search.contact', ['contactNameField'=>'contactName','contactIdField' => 'contactId', 'returnContactPhoneField' => 'phone', 'returnContactEmailField' => 'email'])
@include('partials.search.department', ['companyIdField' => 'companyId', 'departmentNameField' => 'departmentName', 'departmentIdField' => 'departmentId'])
<script>
    $('#due').timepicker();
    $('#available').timepicker();
    jQuery(document).ready(function($) {

            var makeEngine = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {   url: '/search/vehicleMake?make=%QUERY%',
                wildcard: '%QUERY%'
            }
        });
        var modelEngine = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {   url: '/search/vehicleModel?model=%QUERY%',
                wildcard: '%QUERY%',
                replace: function () {
                    var q = '/search/vehicleModel';
                    if ($("#companyId").val()) {
                        q += '?make='+$("#makeId").val()+'&model='+$("#vehicleModelName").val();
                    }
                    else{
                        q += '?model='+$("#vehicleModelName").val();
                    }
                    return q;
                }
            }
        });

        modelEngine.initialize();
        makeEngine.initialize();
        $("#vehicleModelName").typeahead({
            hint: true,
            highlight: true,
            minLength: 2
        }, {
            source: modelEngine.ttAdapter(),
            name: 'Model_list',
            displayKey: 'name',
            valueKey: 'id',
            templates: {empty: ['<div class="empty-message">Unable to find any</div>']}
        });

        $("#vehicleMakeName").typeahead({
            hint: true,
            highlight: true,
            minLength: 2
        }, {
            source: makeEngine.ttAdapter(),
            name: 'make_list',
            displayKey: 'name',
            valueKey: 'id',
            templates: {empty: ['<div class="empty-message">Unable to find any</div>']}
        });

        $("#vehicleMakeName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum);
            $("#makeId").val(datum['id']);
        });

        $("#vehicleModelName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum);
            $("#modelId").val(datum['id']);
        });
    });
</script>