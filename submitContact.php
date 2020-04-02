
<?php
include 'methods.php';
include "class.phpmailer.php";
include "class.smtp.php";

$contactName = $_POST['contactName'];
//$contactEmail = $_POST['contactEmail'];
$contactPhone = $_POST['contactPhone'];
$contactConstructionType = $_POST['contactConstructionType'];
$contactMesaage = $_POST['contactMesaage'];

$html = '';
$html .= '<table><tbody>';
$html .= '<tr><td>Name </td><td>'.$contactName.'</td></tr>';
$html .= '<tr><td>Phone </td><td>'.$contactPhone.'</td></tr>';
//$html .= '<tr><td>Email </td><td>'.$contactEmail.'</td></tr>';
$html .= '<tr><td>Type  </td><td>'.$contactConstructionType.'</td></tr>';
$html .= '<tr><td>Message </td><td>'.$contactMesaage.'</td></tr>';
$html .= '</tbody></table>';

$to = 'praveenkembhavi@sandstoneconstruct.com';
$subject = 'Enquiry from ' . $contactName ;
$from = 'praveenkembhavi@sandstoneconstruct.com';

$mail = new PHPMailer(); // create a new object
          $mail->IsSMTP(); // enable SMTP
          $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
          $mail->SMTPAuth = true; // authentication enabled
          $mail->Host = "sandstoneconstruct.com";
          $mail->Port = 587; // or 587
          $emailk='no reply';
          $mail->IsHTML(true);  
          $mail->Username = "noreply@sandstoneconstruct.com";
          $mail->Password = "noreply@123";
          $mail->AddReplyTo("noreply@sandstoneconstruct.com", 'Name',0);
          $mail->SetFrom("noreply@sandstoneconstruct.com", 'Name',0);
          $mail->FromName = $from;
          $mail->Subject = $subject;
          $mail->Body =$html;
          $mail->AddAddress($to);
          $mail->IsHTML(true); 
          
           if($mail->Send())
           {
           echo "<script>window.location.href='contact.html?a=success'</script>";
           }
           else
           {
             echo "<script>window.location.href='contact.html?a=failure'</script>";
           }




 
?>