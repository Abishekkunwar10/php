<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment2</title>
</head>
<body>
    <form method="POST">
        <select name="Qualification" id="Qlf">
            <option value="">Select Qualification</option>
            <option value="1">SEE/SLC</option>
            <option value="2">+2</option>
            <option value="3">Bachelor</option>
            <option value="4">Master</option>
            <option value="5">M.phil</option>
            <option value="6">Phd</option>
        </select>
        <input type="submit" name="btnSubmit" value="Generate">
    </form>
    
</body>
</html>
<?php
    $qualification = ["SEE/SLC", "+2", "Bachelor", "Master", "M.phil", "Phd"];
    if(isset($_POST['btnSubmit']))
        {
            $num = $_POST['Qualification'];

            for ($i=0; $i<$num; $i++) { 
               echo "<label for='id_$i'>Enter GPA for $qualification[$i]</label>" ." " . "<input type='text' id='id_$i'>" . "<br>";
            }
        }
?>