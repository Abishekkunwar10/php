<!DOCTYPE html>
<html>
<head>
    <title>Qualification Form</title>
</head>
<body>

<form method="post">
    <label>Highest Qualification:</label>

    <select name="qualification" onchange="this.form.submit()">
        <option value="">-- Select Qualification --</option>
        <option value="SEE">SEE</option>
        <option value="+2">+2</option>
        <option value="Bachelor">Bachelor</option>
        <option value="Master">Master</option>
    </select>

    <br><br>

    <?php
    if (isset($_POST['qualification'])) {

        $qualification = $_POST['qualification'];

        echo "<label>Enter your $qualification details:</label>";
        echo "<input type='text' name='qualification_details'>";
    }
    ?>

    <br><br>
    <input type="submit" value="Submit">

</form>

</body>
</html>