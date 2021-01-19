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
    <select name="country" id="csc_country" onchange="getState(this.value)">
        <option value="0">Select Country</option>
    </select>
    <br>
    <br>
    <label for="state"> State : </label>
    <select name="state" id="csc_state" onchange="getCity(this.value)">

        <option value="0">Select State</option>
    </select>
    <br>
    <br>
    <label for="city"> City : </label>
    <select name="city" id="csc_city">
        <option value="0">Select City</option>
    </select>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@include('csc::csc_js')
</html>
