<?
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'nellie@hello-nellie.com'; 
$subject = 'Message from Hello-Nellie.com';
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

//mail(To Email, Subject, body)
mail($to, $subject, $body);
header("Location: thanks.php");
?>