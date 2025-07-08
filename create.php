<?php 

$file = "Faisal.txt";

if (file_exists($file)){
    
    echo 'Good the [ '. $file . ' ] is found';
    file_put_contents($file,'this file got changed');

} else {

    echo 'Sorry the [ '. $file . ' ] is not found but I created it';
    file_put_contents($file,'created by php');
}
?>
