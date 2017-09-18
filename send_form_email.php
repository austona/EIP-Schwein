<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "benzanton@live.com";
    $email_subject = "Nachricht von EIP-Schwein";
 
    function died($error) {
        // your error code can go here
        echo "Es wurden Fehler in dem Formular gefunden:";
        echo "Diese Fehler werden unten angzeigt.<br /><br />";
        echo $error."<br /><br />";
        echo "Bitte gehen Sie zurück und beheben die Fehler.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Es scheint, als gäbe es ein Problem mit dem Formular, dass sie abgesendet haben.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Es scheint, als wäre die E-Mail Adresse ungültig.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'Es scheint als wäre der Name ungültig.<br />';
  }
 
 
  if(strlen($message) < 2) {
    $error_message .= 'Es scheint als wäre Ihre Nachricht zu kurz.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Vielen Dank für Ihre Nachricht. Wir werden Ihr Anliegen so schnell wie möglich bearbeiten.
 
<?php
 
}
?>