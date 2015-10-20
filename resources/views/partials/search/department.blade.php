    <script>
        jQuery(document).ready(function($) {
            var departmentEngine = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '/search/department?department=%QUERY%',
                    wildcard: '%QUERY%',
                    replace: function () {
                        var q = '/search/department';
                        if ($("#{!!$companyIdField!!}").val()) {
                            q += '?company=' + $("#{!!$companyIdField!!}").val() + '&department=' + $("#{!!$departmentNameField!!}").val();
                        }
                        else {
                            q += '?department=' + $("#{!!$departmentNameField!!}").val();
                        }
                        return q;
                    }
                }
            });

            departmentEngine.initialize();

            $("#{!!$departmentNameField!!}").typeahead({
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

            $("#{!!$departmentNameField!!}").on("typeahead:selected typeahead:autocompleted typeahead:close", function (e, datum) {
                console.log(datum);
                $("#{!!$departmentIdField!!}").val(datum['id']);
            });
        });
    </script>