<?php
$con = new mysqli('localhost','root','','test');
if($con){
    echo 'succesful';
}else{
    echo die(mysqli_error());
}

?>
