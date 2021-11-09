<?php
$x=array(200, 204, 173, 98, 171, 404, 459);
$index=0;
while ($index<=6){
if ($x[$index]%2 === 0) {
    echo ($x[$index]."est pair <br/>");
}
else{
    echo ($x[$index]."est impair <br/>");
}
$index++;
}

?>