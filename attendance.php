

<html>
<head>
    
    <style>
        .chair{
            background-color: red;
            
        }
        .tes15{
            background-color:green;
        }
        
        
        
    td{border-style: solid;
    border-width: 5px;
    align-content: center;
        border-radius: 20px;
     font-size: 25;    
        }
    
    
    </style>
    </head>
<body>
<?php
$x="60";
$temp=1;
echo  "<table cellspacing=50 cellpadding=50>";
    for($j=0;$j<$x/5;$j++){
        echo "<tr class='chair'>";

            for($i=0;$i<5;$i++){
        
        echo "<td class='tes".$temp."'>".$temp."</td>";
                $temp++;
                if($temp==$x+1)
                    break;
                            }
        
        
        echo "</tr>";
    }
echo  "</table>";
?>
</body>

</html>