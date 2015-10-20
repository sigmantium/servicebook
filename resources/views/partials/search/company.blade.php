    <script>
        jQuery(document).ready(function($) {
            var companyEngine = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {   url: '/search/company?company=%QUERY%',
                    wildcard: '%QUERY%'
                }
            });

            companyEngine.initialize();
            $("#{!!$companyNameField!!}").typeahead({
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

            $("#{!!$companyNameField!!}").on("typeahead:selected typeahead:autocompleted typeahead:close", function (e, datum) {
                console.log(datum);
                $("#{!!$companyIdField!!}").val(datum['id']);
            });
        });
    </script>