<?php  
for($x=0; $x <= 1337; $x++){
    
    if($x > 0 && $x <= 20){
        echo ("<i> $x </i> <br/>");
    }
        else if($x==42){
        echo "Hello LaPlateforme_";
        echo "<br/>";
}
    else if ($x >=25 && $x <=50){
        echo("<u> $x </u> <br/>");
    }


else{
    echo ("$x <br/>");
}
}
?>