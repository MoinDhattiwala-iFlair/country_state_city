<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country State City</title>
</head>
<body>
    <label for="country"> Country : </label>
    <select name="country" id="country" onchange="getState(this.value)">
        <option value="0">Select Country</option>
    </select>
    <br>
    <br>
    <label for="state"> State : </label>
    <select name="state" id="state" onchange="getCity(this.value)">
        <option value="0">Select State</option>
    </select>
    <br>
    <br>
    <label for="city"> City : </label>
    <select name="city" id="city">
        <option value="0">Select City</option>
    </select>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    getCountry();

    function getCountry() {
        var html = '<option value="0">Select Country</option>';
        $('#country').html(html);
        $.ajax({
            url: '{{ url("/country") }}'
            , dataType: 'json'
            , success: function(response) {
                //console.log('success', response);
                $.each(response, function(id, name) {
                    html += '<option value="' + id + '">' + name + '</option>';
                });
                $('#country').html(html);
            }
            , error: function(error) {
                console.log('error', error);
            }
        });
    }

    function getState(country) {
        var html = '<option value="0">Select State</option>';
        $('#state').html(html);
        $('#city').html('<option value="0">Select City</option>');
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
                $('#state').html(html);

            }
            , error: function(error) {
                console.log('error', error);
            }
        });
    }

    function getCity(state) {
        var html = '<option value="0">Select City</option>';
        $('#city').html(html);
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
                $('#city').html(html);
            }
            , error: function(error) {
                console.log('error', error);
            }
        });
    }

</script>
</html>
