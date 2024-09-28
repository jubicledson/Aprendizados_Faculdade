


<?php
    include('errors.php');
    $verifica = new TryExcept;
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];   
    if (isset($_POST['soma'])){
        $verifica->erroSoma($number1, $number2);
    }elseif(isset($_POST['sub'])){
        $verifica->erroSub($number1, $number2);
    }
    elseif(isset($_POST['mult'])){
        $verifica->erroMult($number1, $number2);
    }else{
        $verifica->erroDiv($number1, $number2);
    }
   
  
?>