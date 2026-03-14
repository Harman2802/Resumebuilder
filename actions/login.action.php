<?php

require '../assest/class/database.class.php';
require '../assest/class/function.class.php';


if($_POST){
 
    $post=$_POST;

 if($post['email_id'] && $post['password']){

    
    $email_id=$db->real_escape_string($post['email_id']);
    $password=md5($db->real_escape_string($post['password']));

   $result=$db->query("SELECT id,your_name FROM users WHERE (email_id='$email_id' && password= '$password')");
   
   $result = $result->fetch_assoc();

   if($result){
    
       $fn->setAuth($result);
       $fn->setAlert('logged in !');
       $fn->redirect('../myresumes.php');
}else{
    $fn->setError('Inncorrect email id or password !'); 
    $fn->redirect('../login.php'); 
    

}


}

else{
    $fn->setError('Please fill the form !');
  $fn->redirect ('../login.php');
}
}


else{
    $fn->redirect('../login.php');
}