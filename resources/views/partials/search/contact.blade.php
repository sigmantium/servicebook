    <script>
        jQuery(document).ready(function($) {
            var contactEngine = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {   url: '/search/contact?contact=%QUERY%',
                    wildcard: '%QUERY%'
                }
            });

            contactEngine.initialize();

            $("#{!!$contactNameField!!}").typeahead({
                hint: true,
                highlight: true,
                minLength: 2
            }, {
                source: contactEngine.ttAdapter(),
                name: 'contact_list',
                displayKey: 'name',
                valueKey: 'id',
                templates: {empty: ['<div class="empty-message">No Contact Found... <button type="button" class="btn btn-primary" onclick="showContactModal();return false;">New</button></div>']}
            });

            $("#{!!$contactNameField!!}").on("typeahead:selected typeahead:autocompleted typeahead:close", function(e,datum) {
                console.log(datum);
                $("#{!!$contactIdField!!}").val(datum['id']);
                if ($("#{!!$returnContactEmailField!!}").val() != "") {
                    $("#{!!$returnContactEmailField!!}").val(datum['email']);
                }
                if ($("#{!!$returnContactPhoneField!!}").val() != "") {
                    $("#{!!$returnContactPhoneField!!}").val(datum['phone']);
                }
            });
        });

        function showContactModal()
        {
            $('#modalCreateContact').load('../contacts/newPartial');//load a view into a modal
            $('#contactModal').modal('show'); //show the modal

        };
    </script>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="contactModal" style="top:2%">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Create New Contact</h4>
                </div>
                <div class="modal-body">
                    <iframe id="contactModalContent" style="border:0px;width:100%"></iframe>
                </div>
            </div>
        </div>
    </div>

