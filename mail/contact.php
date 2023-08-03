<?php
if(empty($_POST['name']) || empty($_POST['number']) || empty($_POST['evento']) || empty($_POST['ubication']) || empty($_POST['packageb']) || empty($_POST['date']) || empty($_POST['invitation']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$number = strip_tags(htmlspecialchars($_POST['number']));
$evento = strip_tags(htmlspecialchars($_POST['evento']));
$ubication = strip_tags(htmlspecialchars($_POST['ubication']));
$packageb = strip_tags(htmlspecialchars($_POST['packageb']));
$date = strip_tags(htmlspecialchars($_POST['date']));
$invitation = strip_tags(htmlspecialchars($_POST['invitation']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "adrianempre@gmail.com"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $number\n\nnumber: $evento\n\nevento: $ubication\n\nubication: $packageb\n\npackageb: $date\n\ninvitation: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
