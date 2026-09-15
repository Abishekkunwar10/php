<?php
$num=10;
$count=0;
for($i=1;$i<=$num;$i++)
    {
        if($num%$i)
            {
                $count+=1;
            }
    }
    if($count==2)
        {
            echo "Prime number";
        }
        else{
            echo "Composite number";
        }
?>