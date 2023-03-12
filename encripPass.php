<?php

$var1 = "jordan";
//** 4 son los parametros abmitidos  */
$options= array("cost" => 4);
$pwd  = password_hash($var1, PASSWORD_BCRYPT, $options);


$var2= "jordan";
echo '<br/>';
echo '<br/>';
if(password_verify($var1, $pwd) ){
    echo 'son iguales';
}else {
    echo 'No son iguales';
    echo '<br/>';
    echo $var1;
    echo '<br/>';
    echo $pwd;
}


?>