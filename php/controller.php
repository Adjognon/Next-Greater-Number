<?php

include './NextGreaterNumber.php';

if(isset($_POST['number']) AND trim($_POST['number']) !== '' AND intval(trim($_POST['number'])) !== 0){
    $number = $_POST['number'];
    $NextGreaterNumber = new NextGreaterNumber($number);
    $output = $NextGreaterNumber->find();
    header('Location: ../index.php?v='.$number.'&n='.$output);
}else{
    header('Location: ../index.php');
}

?>