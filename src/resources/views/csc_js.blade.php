<script type="text/javascript">
    function getCountry() {
        var html = '<option value="0">Select Country</option>';
        $('#csc_country').html(html);

        $.ajax({
            url: '{{ url("/country") }}'
            , dataType: 'json'
            , success: function(response) {
                //console.log('success', response);
                $.each(response, function(id, name) {
                    html += '<option value="' + id + '">' + name + '</option>';
                });
                $('#csc_country').html(html);

            }
            , error: function(error) {
                console.log('error', error);
            }
        });
    }

    function getState(country) {
        var html = '<option value="0">Select State</option>';
        $('#csc_state').html(html);

        $('#csc_city').html('<option value="0">Select City</option>');

        if (country == 0) {
            return false;
        }
        $.ajax({
            url: '{{ url("/state") }}/' + country
            , dataType: 'json'
            , success: function(response) {
                //console.log('success', response);
                $.each(response, function(id, name) {
                    html += '<option value="' + id + '">' + name + '</option>';
                });
                $('#csc_state').html(html);


            }
            , error: function(error) {
                console.log('error', error);
            }
        });
    }

    function getCity(state) {
        var html = '<option value="0">Select City</option>';
        $('#csc_city').html(html);

        if (state == 0) {
            return false;
        }
        $.ajax({
            url: '{{ url("/city") }}/' + state
            , dataType: 'json'
            , success: function(response) {
                //console.log('success', response);
                $.each(response, function(id, name) {
                    html += '<option value="' + id + '">' + name + '</option>';
                });
                $('#csc_city').html(html);

            }
            , error: function(error) {
                console.log('error', error);
            }
        });
    }

</script>
