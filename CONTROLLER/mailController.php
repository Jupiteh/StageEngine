<?php


$offerID = $_GET['offerID'];
$login = $_GET['login'];

// Récupère l'email de l'entreprise
$getEmail = $bdd->prepare("SELECT email FROM offer WHERE offerID='$offerID'");
$getEmail->execute();
$result = $getEmail->fetch();
$email = $result[0];

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
  $mail->addAttachment($_FILES['file']['tmp_name'][1], $_FILES['file']['name'][1]);    // Optional name  

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $_POST['subject'];
  $mail->Body    = $_POST['message']; // '<div style="border:2px solid red;"><b>in bold!</b></div>';
  $mail->AltBody = $_POST['message'];

  if (!$mail->send()) {
  ?>
    <script>
      $(document).ready(function() {
        $("#error-message").show();
      });
    </script>
  <?php
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
  ?>
    <script>
      $(document).ready(function() {
        $("#sent-message").show();
      });
    </script>
  <?php

    // Passe l'état à 'postulé' quand l'email est envoyé
    // $setApply = $bdd->prepare("UPDATE `wishlist` SET `apply`=1 WHERE offerID='$offerID' AND login='$login'");
    // $setApply->execute();

    // REDIRECT
    // header('Location: ../VUE/account.php');
    header('refresh:2;url=../VUE/indexFront.php');
  }

  // Recacher le loader
  // Le JS n'est pas dans un fichier externe pour pouvoir enlever le loader au moment ou le mail a été envoyé
  ?>
  <script>
    $(document).ready(function() {
      $("#loader").hide();
    });
  </script>
<?php
}
