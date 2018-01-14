
<?php/*
if(isset($_POST['c_email'])) {
     
    
    $email_to = "tashaxxxxxx@gmail.com";
     
    $email_subject = "website mail";
     
     
    function died($error) {
        
        echo "Žao nam je, ali pojavila se greška/e u vašoj poruci. ";
        echo "Greške se nalaze ispod.<br /><br />";
        echo $error."<br /><br />";
        echo "Molimo, pokušajte ponovo.<br /><br />";
        die();
    }
     
    
    if(!isset($_POST['c_name']) ||
        !isset($_POST['c_email']) ||
        !isset($_POST['c_message'])) {
        died('Žao nam je, ali pojavila se greška/e u vašoj poruci.');       
    }
     
    $first_name = $_POST['c_name']; // required
    $email_from = $_POST['c_email']; // required
    $message = $_POST['c_message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Email adresa koju ste unjeli nije ispravna.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Ime koje ste unjeli nije ispravno.<br />';
  }
  
  if(strlen($message) < 2) {
    $error_message .= 'Poruke koju pokušavate poslati nije ispravna.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Detalji formulara su ispod.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Ime: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Poruka: ".clean_string($message)."\n";
     
     

$headers = 'Od: '.$email_from."\r\n".
'Odgovori: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 

 
Hvala vam na javljanju. Odgovorit ćemo Vam u najkraćem mogućem roku!
 
<?php
}
die();
*/?>
