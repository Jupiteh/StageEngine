<!-- LINK -->
<?php require_once 'link.php' ?>

<!-- Db -->
<?php require_once '../MODEL/linkDb.php' ?>
<!-- Db -->

<!-- MAIL CONTROLLER -->
<?php require_once '../CONTROLLER/mailController.php' ?>
<!-- MAIL CONTROLLER -->

<!-- NAVBAR -->
<?php
require_once 'navbar.php'
?>

<!-- JS -->
<script type="text/javascript" src="../assets/js/mail.js"></script>






<img src="../assets/gif/loaderNoir.gif" id="loader" class='display-none'>

<div class="row mail-form">
	<div class="col-md-9 col-md-offset-2">
		<form role="form" class='mail-form-balise' method="post" enctype="multipart/form-data">
			<!-- Message d'erreur -->
			<div style='border:3px solid red;' class='display-none' id='error-message'>
				<h4><b>Erreur lors de l'envois de l'e-mail.</b></h4>
			</div>
			<!-- Message de réussite -->
			<div style="border:3px solid green;" class='display-none' id='sent-message'>
				<h4><b>Le mail a bien été envoyé.</b></h4>
			</div>

			<h3><b>Postulation par email:</b></h3></br>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="email">Email entreprise:</label>
					<input type="email" class="form-control" id="email" name="emailDisabled" value='<?= $email ?>' placeholder="Email entreprise..." maxlength="50" disabled>
					<!-- J'ajoute un hidden input contenant lui aussi le mail car l'input disabled d'au dessus ne peux être POST -->
					<input type="email" class="form-control" id="email" name="email" value='<?= $email ?>' placeholder="Email entreprise..." maxlength="50" hidden>
				</div>
			</div></br>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="subject">Objet:</label>
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Objet..." maxlength="50" required>
				</div>
			</div></br>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="name">Message:</label>
					<textarea class="form-control" type="textarea" id="message" name="message" placeholder="Insérez votre message ici..." maxlength="6000" rows="4" required></textarea>
				</div></br>
			</div></br>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="name">Votre CV:</label>
					<input name="file[]" multiple="multiple" class="form-control" type="file" id="cv" required>
				</div></br>
			</div></br>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="name">Votre Lettre de motivation:</label>
					<input name="file[]" multiple="multiple" class="form-control" type="file" id="lettre" required>
				</div></br>
			</div></br>
			<div class="row">
				<div class="col-sm-9 form-group">
					<button method='post' type="submit" id='send-mail' name="sendmail" class="btn btn-lg btn-success btn-block">Envoyer l'E-mail:</button>
				</div>
			</div>
		</form>
	</div>
</div>

<style>
	#loader {
		position: absolute;
		padding-top: 15%;
		padding-left: 40%;

	}
</style>


<?php
// if (isset($_POST['sendmail'])) {
// 	require '../assets/lib/mailer/PHPMailerAutoload.php';
// 	require '../assets/lib/mailer/credential.php';


// 	$mail = new PHPMailer;

// 	$mail->SMTPDebug = 0;                               // Enable verbose debug output

// 	$mail->isSMTP();                                      // Set mailer to use SMTP
// 	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// 	$mail->SMTPAuth = true;                               // Enable SMTP authentication
// 	$mail->Username = EMAIL;                 // SMTP username
// 	$mail->Password = PASS;                           // SMTP password
// 	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// 	$mail->Port = 587;                                    // TCP port to connect to
// 	$mail->SMTPOptions = array(
// 		'ssl' => array(
// 			'verify_peer' => false,
// 			'verify_peer_name' => false,
// 			'allow_self_signed' => true
// 		)
// 	);
// 	$mail->setFrom(EMAIL, 'Stage Engine');
// 	$mail->addAddress($_POST['email']);     // Add a recipient

// 	$mail->addReplyTo(EMAIL);
// 	// print_r($_FILES['file']); exit;
// 	// for ($i = 0; $i < count($_FILES['file']['tmp_name']); $i++) {
// 	// $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
// 	// }
// 	$mail->addAttachment($_FILES['file']['tmp_name'][0], $_FILES['file']['name'][0]);    // Optional name

// 	$mail->isHTML(true);                                  // Set email format to HTML

// 	$mail->Subject = $_POST['subject'];
// 	$mail->Body    = $_POST['message']; // '<div style="border:2px solid red;"><b>in bold!</b></div>';
// 	$mail->AltBody = $_POST['message'];

// 	if (!$mail->send()) {
// 		echo "Erreur lors de l'envois de l'e-mail.";
// 		// echo 'Mailer Error: ' . $mail->ErrorInfo;
// 	} else {
// 		echo '<div style="border:2px solid red;"><h4><b>Le message a bien été envoyé.</b></h4></div>';
// 		sleep(5);
// 		// header('Location: ../VUE/account.php');
// 	}
// }
?>

<!--FOOTER-->
<?php require_once 'footer.php' ?>