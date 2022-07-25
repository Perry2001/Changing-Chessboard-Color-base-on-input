<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   
<?php


if(isset($_GET['color1'])) {
    $color=$_GET['color1'];
    $background = $color;

     
if(isset($_GET['color2'])){
    $color2=$_GET['color2'];
    $background2 = $color2;
    
        for($row=1;$row<=8;$row++){
        
                echo "<tr>";
                
                    for($col=1;$col<=8;$col++){
                        $total=$row+$col;
                        if($total%2==0){
                            echo "<td height=30px width=30px bgcolor= $background></td>";
                        } else {
                            echo "<td height=30px width=30px bgcolor= $background2> </td>";
                            }
                    }
               }          echo "</tr>";
            }
        }
    ?>
</table>

