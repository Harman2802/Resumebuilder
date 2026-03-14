<?php

require '../assest/class/database.class.php';
require '../assest/class/function.class.php';


if($_POST){
 
    $post=$_POST;

 if($post['your_name'] && $post['email_id']){

    $your_name=$db->real_escape_string($post['your_name']);
    $email_id=$db->real_escape_string($post['email_id']);
    $password=md5($db->real_escape_string($post['password']));

   $authid =  $fn->Auth()['id'];
   $result=$db->query("SELECT COUNT(*) as user FROM users WHERE (email_id='$email_id' && id!=$authid)");

   $result = $result->fetch_assoc();

if($result['user']){
        $fn->setError($email_id.' is already registered !'); 
        $fn->redirect('../account.php'); 
        die();
   
    }
  
if($password!=''){

    $db->query("UPDATE users SET your_name='$your_name',email_id='$email_id',password='$password' WHERE id=$authid");

}else{
    $db->query("UPDATE users SET your_name='$your_name',email_id='$email_id' WHERE id=$authid");
  }

    $fn->setAlert('Account is Updated !'); 
    $fn->redirect('../account.php'); 

}else{
    $fn->setError('Please fill the form !');
  $fn->redirect ('../account.php');
}

}else{
    $fn->redirect('../account.php');
}