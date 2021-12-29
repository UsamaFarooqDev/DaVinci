<?php
if(isset($_POST['submit_msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $msg = "From .$name. \nEmail .$email. \nPhone Number .$phone. \nMessage .$message.";
mail("ceo@braavosrealestate.com","New Message From Da Vinci Tower",$message);
header('../index.html');
}

?>