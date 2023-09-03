<?php
$name= $_POST['name'];
$visitor_email = $_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];


$emmail_from = 'info@paramte2.github.io/web/';

$email_subject ='New Form Submission';

$email_body = "User Name: $name.\n". 
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message .\n";
                

$to = 'hariompandeyg2000@gmail.com';


$headers = "From: $email_from \r\n";


$header .=  "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

// Database Connection

/*$conn = new mysqli('localhost','root','','dcu');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registraion(name,email,subject,message)values(?,?,?,?)");
    $stmt->bind_param()
}
*/
?>
