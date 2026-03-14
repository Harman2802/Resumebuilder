<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../assest/class/database.class.php';
require '../assest/class/function.class.php';

require '../assest/packages/phpmailer/src/Exception.php';
require '../assest/packages/phpmailer/src/PHPMailer.php';
require '../assest/packages/phpmailer/src/SMTP.php';

if($_POST){
 
    $post=$_POST;

 if($post['email_id']){

    
    $email_id=$db->real_escape_string($post['email_id']);
   

   $result=$db->query("SELECT id,your_name FROM users WHERE (email_id='$email_id')");
   
   $result = $result->fetch_assoc();

if($result){
$otp = rand(100000,999999);    
$mail = new PHPMailer(true);

try {
                     
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'preet999sahil@gmail.com';                     
    $mail->Password   = 'bvgv wchh gxze ryka';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    

   
    $mail->setFrom('pharman909@gmail.com', 'Resume builder');
    $mail->addAddress($email_id);     
             
   
    $mail->isHTML(true);                                  
    $mail->Subject = 'Forgor Password';
    $mail->Body    = 'Your 6 Digit Verification Code : <b>'.$otp.'</b>';
    $mail->send();
  
    $fn->setSession('otp',$otp);
    $fn->setSession('email',$email_id);

    $fn->redirect('../verification.php');


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $fn->setError($mail->ErrorInfo); 
    $fn->redirect('../forgot-password.php'); 
    
}
   
}else{
    $fn->setError($email_id.' is not registered'); 
    $fn->redirect('../forgot-password.php'); 
    

}


}

else{
    $fn->setError('Please enter Email Id !');
  $fn->redirect ('../forgot-password.php');
}
}


else{
    $fn->redirect('../forgot-password.php');
}