<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'commercial@simc-france.fr';
$subject = 'Message provenant du site internet '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Merci de nous avoir contacter. Nous vous répondrons dans les plus bref délais.Etant très réactif, sans réponse de notre part sous 48H, N hésitez pas a nous contacter par téléphone.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message non-envoyé,merci de nous contacter à commercial@simc-france.fr');
		window.location = 'index.html';
	</script>
<?php
}
?>