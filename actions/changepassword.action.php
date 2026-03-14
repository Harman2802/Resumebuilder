<?php

require '../assest/class/database.class.php';
require '../assest/class/function.class.php';

 
if($_POST){
 
    $post=$_POST;

 if($post['password']){

    
    $password=md5($db->real_escape_string($post['password']));
    $email = $fn->getSession('email');

 $db->query("UPDATE users SET password='$password' WHERE email_id='$email'");


  $fn->setAlert('Password Badl Gya hai !');
  $fn->redirect ('../login.php');

 }else{
    $fn->setError('Please Enter Fresh Password !');
    $fn->redirect ('../change-password.php');
}
}


else{
    $fn->redirect('../change-password.php');
}