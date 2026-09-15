<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<h2>Generate the Multiplication Table</h2>

<form method="post">
    From:
    <input type="number" name="from" required>

    <br><br>

    To:
    <input type="number" name="to" required>

    <br><br>

    <input type="submit" name="generate" value="Generate">
</form>

<?php
if (isset($_POST['generate'])) {

    $from = $_POST['from'];
    $to = $_POST['to'];

    echo "<h2>The multiplication table of $from</h2>";

    for ($i = 1; $i <= $to; $i++) {
        echo "$from × $i = " . ($from * $i) . "<br>";
    }
}
?>

</body>
</html>