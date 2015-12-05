<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-info">{{--Customer Details--}}
        <div class="panel-heading" role="tab" id="contactDetails" onclick="$('#collapseContact').collapse('toggle')">Contact Details</i></span></div>
        <div id="collapseContact" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="contactDetails">
            <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::Label('company', 'Company:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Text('companyName', $service->company->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Parent Company Name']) !!}
                                {!! Form::Hidden('companyId', $service->company->id, ['id' => 'companyId']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::Label('department', 'Department:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Text('departmentName', $service->department->name, ['id' => 'companyName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Department Name']) !!}
                                {!! Form::Hidden('departmentId', $service->department->id, ['id' => 'departmentId']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::Label('contact', 'Contact:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Text('contactName', $service->contact->name, ['id' => 'contactName', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Contact Name']) !!}
                                {!! Form::Hidden('contactId', $service->contact->id, ['id' => 'contactId']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::Label('phone', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Text('phone', $service->contact->phone, ['class' => 'form-control', 'id' => 'phone']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Text('email', $service->contact->email, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::Label('fleet', 'Fleet:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::Text('fleet', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>{{--Customer Details--}}
    <div class="panel panel-warning">{{--Vehicle Details--}}
        <div class="panel-heading" role="tab" id="contactDetails" onclick="$('#collapseVehicle').collapse('toggle')">Vehicle Details</div>
        <div id="collapseVehicle" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="contactVehicle">
            <div class="panel-body">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        {!! Form::Label('rego', 'Rego:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('rego', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('make', 'Make:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('make', $service->make->name, ['id' => 'make', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Make']) !!}
                            {!! Form::Hidden('makeId', $service->make->id, ['id' => 'makeId']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('model', 'Model:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('model', $service->model->name, ['id' => 'model','name'=>'model', 'class' => 'form-control typeahead tt-input', 'type' => 'text', 'placeholder'=>'Model']) !!}
                            {!! Form::Hidden('modelId', $service->model->id, ['id' => 'modelId']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('series', 'Series:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('series', null, ['id'=>'series','class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('year', 'Year:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('year', null, ['id'=>'year','class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('transmission', 'Transmission:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('transmission', null, ['id'=>'transmission','class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('body', 'Body:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('body', null, ['id'=>'body','class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('vin', 'Vin:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('vin', null, ['id'=>'vin','class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        {!! Form::Label('assetNumber', 'Asset Number:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('assetNumber', $service->assetNumber,  ['id' => 'assetNumber', 'class' => 'form-control input-small']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('notes', 'Vehicle Notes:', ['class' => 'col-sm-12 control-label']) !!}
                        <div class="input-group col-lg-6 col-md-12">
                            {!! Form::TextArea('notes', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>{{--Vehicle Details--}}
    <div class="panel panel-success">{{--Job Details--}}
        <div class="panel-heading" role="tab" id="jobDetails" onclick="$('#collapseJob').collapse('toggle')">Job Details</div>
        <div id="collapseJob" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="contactVehicle">
            <div class="panel-body">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        {!! Form::Label('date', 'Date:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('date', $service->date, ['id' => 'date','class' => 'form-control input-small']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('method', 'Method:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Select('method', array('Drop-Off'=>'Drop-Off', 'Pick-Up'=>'Pick-Up', 'Onsite'=>'Onsite'), $service->method, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('available', 'Available:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            <div class="input-group bootstrap-timepicker timepicker">
                                {!! Form::Text('available', $service->available,  ['id' => 'available', 'class' => 'form-control input-small']) !!}
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('due', 'Due By:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            <div class="input-group bootstrap-timepicker timepicker">
                                {!! Form::Text('due', $service->due,  ['id' => 'due', 'class' => 'form-control input-small']) !!}
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('priority', 'Priority:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Select('priority', ['Low'=>'Low','Medium'=>'Medium','High'=>'High','Urgent'=>'Urgent'], $service->priority, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('speedo', 'Speedo:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                           {!! Form::Text('speedo', $service->speedo,  ['id' => 'speedo', 'class' => 'form-control input-small']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('orderNumber', 'Order Number:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Text('orderNumber', $service->orderNumber,  ['id' => 'orderNumber', 'class' => 'form-control input-small']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('disposal', 'Disposal:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::CheckBox('disposal','1',$service->disposal, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('type', 'Type:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::Select('type', ['Service'=>'Service','Repair'=>'Repair','Both'=>'Both'], $service->type, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::Label('description', 'Job Description:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="input-group col-lg-12 col-md-12">
                            {!! Form::TextArea('serviceNotes', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>{{--Job Details--}}
    <div class="panel panel-danger">{{--Invoice Details--}}
        <div class="panel-heading" role="tab" id="jobDetails" onclick="$('#collapseInvoice').collapse('toggle')">Invoice Details</div>
        <div id="collapseInvoice" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="contactVehicle">
            <div class="panel-body">
                <div class="col-lg-12 col-md-12">
                    {!! Form::Label('invoiceItems', 'Invoice Items:', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="form-group">
                        <div class="input-group col-lg-12 col-md-12">
                            {!! Form::TextArea('serviceNotes', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="input-group col-lg-12 col-md-12">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default" aria-label="Bold"><span class="glyphicon glyphicon-book"></span></button>
                            </div>
                            {!! Form::Text('partNo', null, ['class' => 'form-control', 'placeholder'=>'Part Number']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Service</button>
                    </div>
                </div>
            </div>
        </div>
    </div>{{--Invoice Details--}}
</div>

<div class="col-lg-12 col-md-12">
    <div class="form-group input-group-md">{!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}</div>
</div>

{!! Form::Hidden('_token',  csrf_token() ) !!}
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
                        q += '?make='+$("#makeId").val()+'&model='+$("#model").val();
                    }
                    else{
                        q += '?model='+$("#model").val();
                    }
                    return q;
                }
            }
        });

        modelEngine.initialize();
        makeEngine.initialize();
        $("#model").typeahead({
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

        $("#make").typeahead({
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

        $("#make").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum);
            $("#makeId").val(datum['id']);
            $("#make").val(datum['name']);
        });

        $("#model").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
            console.log(datum);
            $("#modelId").val(datum['id']);
            $("#model").val(datum['name']);
        });
    });
    $(function() {
        $( "#date" ).datepicker({
            beforeShowDay: $.datepicker.noWeekends,
            beforeShow: function() {
                setTimeout(function(){
                    $('.ui-datepicker').css('z-index', 99999999999999);
                }, 0);
            },
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            style: "z-index=1000",
            changeYear: true
    } );

    });
</script>