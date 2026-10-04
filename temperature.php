<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Temperature Converter - Youssef Ali</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        h1 {
            text-align: center;
            margin-top: 0;
        }

        .formula {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .result {
            margin-top: 25px;
            padding: 15px;
            background: #f2f2f2;
            border-radius: 6px;
            text-align: center;
            font-size: 18px;
        }

        .footer {
            text-align: center;
            color: #666;
            font-size: 13px;
            margin-top: 30px;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>Fahrenheit to Celsius Converter</h1>

    <p class="formula">
        Formula: °C = (°F - 32) × 5/9
    </p>

    <form method="POST">

        <label for="fahrenheit">Temperature in Fahrenheit</label>

        <input
            type="number"
            step="any"
            id="fahrenheit"
            name="fahrenheit"
            required
        >

        <input
            type="submit"
            value="Convert Temperature"
        >

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fahrenheit = escapeshellarg($_POST["fahrenheit"]);

    $command = "python3 temperature.py $fahrenheit";

    $output = shell_exec($command);

    echo '<div class="result">';
    echo htmlspecialchars($output);
    echo '</div>';
}

?>

    <div class="footer">
        Created by Youssef Ali<br>
        CPS 5745 - Visualization Design and Development<br>
        <?php echo date("F j, Y"); ?>
    </div>

</div>

</body>

</html>
