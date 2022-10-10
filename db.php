<?php 
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud'
);


if (isset($conn)){
   echo "BD conectada";
}
else{
    echo "Noooooo";
}
 

?>