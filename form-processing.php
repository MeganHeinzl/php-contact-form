<?php
@session_start();
$error = '';
$errorflag = 0;
$myemail = 'me@meganheinzl.com';


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

    $name = trim($_POST['name']);
    $email_address = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if($name == '' || !preg_match('/^[A-Za-z\x{00C0}-\x{00FF}][A-Za-z\x{00C0}-\x{00FF}\'\-]+([\ A-Za-z\x{00C0}-\x{00FF}][A-Za-z\x{00C0}-\x{00FF}\'\-]+)*/u', $name)
    ){
        $errorflag++;
        $error = $error . "<p>Please tell me your name.</p>";
        $_SESSION['errormessage'] = $error;

    }
    if($email_address == '' || !preg_match(
        "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
        $email_address) || !filter_var($email_address,FILTER_VALIDATE_EMAIL)){
        $errorflag++;
        $error = $error . "<p>Please enter a valid email address.</p>";
        $_SESSION['errormessage'] = $error;
    }
    if($subject == ''){
        $errorflag++;
        $error = $error . "<p>Please enter a subject for your message.</p>";
        $_SESSION['errormessage'] = $error;
    }

    if($message == ''){
        $errorflag++;
        $error = $error . "<p>Please enter a message.</p>";
        $_SESSION['errormessage'] = $error;

    }
    if($errorflag > 0){
        header("location: contact.php"); 
        die();
    }else{
            $to = $myemail;
            $email_subject = "$subject";
            $email_body = "Name: $name \n ".
            "Email: $email_address\n Please do not reply to this message. \n Message: \n $message\n";
            $headers = "From: noreply@meganheinzl.com\n";
            $headers .= "Reply-To: $email_address\n";
            $headers .= "Cc: $email_address";
            mail($to,$email_subject,$email_body,$headers);
            //redirect to the 'thank you' page
            $_SESSION['success'] = "<p>Message sent successfully. You should receive an email confirmation. Please check your spam box if you do not see it. Thanks for getting in touch! I will get back to you shortly.</p>";
            header('Location: contact.php');
            die();
    
    }


}else{
    $error = $error . "<p>Something went wrong! Please try again.</p>";
    $_SESSION['errormessage'] = $error;
    header("location: contact.php"); 
    die();
}

?>