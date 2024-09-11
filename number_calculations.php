<html>
<head>
    <title>Number Calculations</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body align="left">

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);
    
    // Function to calculate factorial
    function factorial($n) {
        if ($n === 0) {
            return 1;
        }
        return $n * factorial($n - 1);
    }

    $square = $number * $number;
    $cube = $number * $number * $number;
    $fact = factorial($number);
    ?>

    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Square</th>
                <th>Cube</th>
                <th>Factorial</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "$number"; ?></td>
                <td><?php echo "$square"; ?></td>
                <td><?php echo "$cube"; ?></td>
                <td><?php echo "$fact"; ?></td>
            </tr>
        </tbody>
    </table>
    
    <?php
}
?>

</body>
</html>
