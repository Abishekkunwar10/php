<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication_table</title>
</head>
<body>
    <form method="POST">
        from: <input type="number" name="from" required>
        <br><br>
        to:
    <input type="number" name="to" required>
    <br><br>
    <input type="submit" name="generate" value="generate">
</form>

<?php 
if(isset($_POST['generate']))
    {
        $from= $_POST['from'];
        $to=$_POST['to'];
        for($from;$from<=$to;$from++)
            {
                for($i=1;$i<=10;$i++)
                    {
                        echo "$from * $i =". ($from*$i),"<br>";
                    
                    }
                 echo   "<br>";
            }
    }
    ?>
    
    
</body>
</html>