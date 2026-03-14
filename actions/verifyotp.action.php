<?php

require '../assest/class/database.class.php';
require '../assest/class/function.class.php';


if($_POST){
 
    $post=$_POST;

 if($post['otp']){

    
    $otp=$post['otp'];

  if($fn->getSession('otp')==$otp){
    $fn->setAlert('Email Correct !');
    $fn->redirect('../change-password.php');


  }else{
    $fn->setError('Wrong OTP  !');
    $fn->redirect('../verification.php');
  }
}

else{
    $fn->setError('Please Enter 6 Digit Code Sended To Your Email Id ');
  $fn->redirect ('../verification.php');
}
}


else{
    $fn->redirect('../verification.php');
}