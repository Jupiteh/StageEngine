<?php

// Lors de l'envois

if (isset($_POST['sendmail'])) {
  require '../assets/lib/mailer/PHPMailerAutoload.php';
  require '../assets/lib/mailer/credential.php';


  $mail = new PHPMailer;

  $mail->SMTPDebug = 0;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = EMAIL;                 // SMTP username
  $mail->Password = PASS;                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to
  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );
  $mail->setFrom(EMAIL, 'Stage Engine');
  $mail->addAddress($_POST['email']);     // Add a recipient

  $mail->addReplyTo(EMAIL);
  // print_r($_FILES['file']); exit;
  // for ($i = 0; $i < count($_FILES['file']['tmp_name']); $i++) {
  // $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
  // }
  $mail->addAttachment($_FILES['file']['tmp_name'][0], $_FILES['file']['name'][0]);    // Optional name

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $_POST['subject'];
  $mail->Body    = $_POST['message']; // '<div style="border:2px solid red;"><b>in bold!</b></div>';
  $mail->AltBody = $_POST['message'];

  if (!$mail->send()) {
    echo "<div style='border:2px solid red;'><h4>Erreur lors de l'envois de l'e-mail.</b></h4></div>";
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    echo '<div style="border:2px solid green;"><h4><b>Le message a bien été envoyé.</b></h4></div>';

    // Passe l'état à 'postulé' quand l'email est envoyé
    // $setApply = $bdd->prepare("UPDATE `wishlist` SET `apply`=1 WHERE offerID='$offerID' AND login='$login'");
    // $setApply->execute();

    // REDIRECT
    // sleep(5);
    // header('Location: ../VUE/account.php');
  }

  // Recacher le loader
  // Le JS n'est pas dans un fichier externe pour pouvoir enlever le loader au moment ou le mail a été envoyé
?>
  <script>
    $(document).ready(function() {

      $("#loader").addClass('display-none');
    });
  </script>
<?php
}