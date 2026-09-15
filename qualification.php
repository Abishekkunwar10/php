<!DOCTYPE html>
<html>
<head>
    <title>Qualification Form</title>
</head>

<body>

<form method="post">

    <label>Highest Qualification:</label>

    <select name="qualification" onchange="this.form.submit()">
        <option value="">-- Select --</option>
        <option value="SEE">SEE</option>
        <option value="+2">+2</option>
        <option value="Bachelor">Bachelor</option>
        <option value="Master">Master</option>
    </select>

    <br><br>

<?php

// Store qualifications in order
$qualifications = ["SEE", "+2", "Bachelor", "Master"];

if (isset($_POST['qualification'])) {

    $selected = $_POST['qualification'];

    // Find the position of selected qualification
    $position = array_search($selected, $qualifications);

    // Generate fields from SEE up to selected qualification
    for ($i = 0; $i <= $position; $i++) {

        echo $qualifications[$i] . ": ";
        echo "<input type='text' name='qualification[]'>";
        echo "<br><br>";
    }
}

?>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>