<!-- <?php
include_once "config.php";
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div>
        <label for="current">Amount:
            <input type="number" name="current" id="current">
        </label>
        <select name="first_currency" id="first_currency" class="currency">
            <option value="">-Select-</option>
            <option value="Dollar">Dollar</option>
            <option value="Euro">Euro</option>
            <option value="Ruble">Ruble</option>
            <option value="Rupee">Rupee</option>
        </select>
        <button id="change"><></button>
        <select name="second_currency" id="second_currency" class="currency">
            <option value="">-Select-</option>
            <option value="Dollar">Dollar</option>
            <option value="Euro">Euro</option>
            <option value="Ruble">Ruble</option>
            <option value="Rupee">Rupee</option>
        </select>
        <label for="next">Amount:
            <input type="number" name="next" id="next">
        </label>
    </div>
</body>
<script src="./JS/script.js"></script>
</html>