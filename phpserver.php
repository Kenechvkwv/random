<?php
foreach($_SERVER as $k => $v){
    echo $k . '-';
    if(!is_array($v)){
        echo $v;
    }
    echo '<br/>';
}
?>

