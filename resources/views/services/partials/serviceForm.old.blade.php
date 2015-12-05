<div class="col-lg-4 col-md-4">
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
    <div class="form-group">
        {!! Form::Label('speedo', 'KM:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('speedo', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-4">
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
        {!! Form::Label('orderNumber', 'Order Number:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('orderNumber', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-4">
    <div class="form-group">
        {!! Form::Label('status', 'Status:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('status', $statuses, 'Booking', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('priority', 'Priority:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('priority', ['low','normal','high'], 'normal', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('date', 'Date:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('date', null, ['class' => 'form-control datepicker','placeholder' => 'Pick the date of the booking']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('due', 'Due:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Text('due', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('method', 'Method:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('method', ['pickup','dropoff','onsite'], 'dropoff', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('type', 'Type:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::Select('type', ['service','repair','both'], 'service', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::Label('disposal', 'Disposal:', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::CheckBox('disposal', null, false, ['class' => 'form-control']) !!}
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

<script>
    $(document).ready(function() {
        $('#date').datepicker({
            changeMonth: true,
            changeYear: true
        });
    } );
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
            remote: {   url: '/search/department?company='+$("#companyId").val()+'&department=%QUERY%',
                wildcard: '%QUERY%'
            }
        });
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
            remote: {   url: '/search/vehicleModel?make='+$("#makeId").val()+'&model=%QUERY%',
                wildcard: '%QUERY%'
            }
        });
        var contactEngine = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {   url: '/search/contact?company='+$("#companyId").val()+'&contact=%QUERY%',
                wildcard: '%QUERY%'
            }
        });


        companyEngine.initialize();
        departmentEngine.initialize();
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
        $("#contactName").typeahead({
            hint: true,
            highlight: true,
            minLength: 2
        }, {
            source: contactEngine.ttAdapter(),
            name: 'contact_list',
            displayKey: 'name',
            valueKey: 'id',
            templates: {empty: ['<div class="empty-message">Unable to find any</div>']}
        });
        $("#companyName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum.id);
            $("#companyId").val(datum.id);
        });
        $("#departmentName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum.id);
            $("#departmentId").val(datum.id);
        });
        $("#vehicleMakeName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum.id);
            $("#makeId").val(datum.id);
        });
        $("#vehicleModelName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum.id);
            $("#modelId").val(datum.id);
        });
        $("#contactName").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum.id);
            $("#contactId").val(datum.id);
        });
    });
</script>