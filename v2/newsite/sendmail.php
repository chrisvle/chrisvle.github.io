$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//build email content
$emailSubject = "From github website";
$mailContent = "From: " . $email . "\r\n" . $name . "\r\n" . $message;

//send mail
if(mail('christophervule@gmail.com',$emailSubject,$mailContent))
    echo "mail send successful";
else
    echo "mail send fail";
