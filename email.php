<?php
//get data from form  
$name = $_POST['Esmk fi discord'];
$email= $_POST['Esmk fi game'];
$name = $_POST['>9adeh 3omrk fi dinya']
$name = $_POST['9adeh min se3a t7il']
$name = $_POST['9adeh andk taleb fi blast']
$message= $_POST['backstory'];
$message= $_POST['chnia bech tfidna ki tched leader'];
$to = "aziz165said@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>