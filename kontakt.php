<?php
require_once 'recaptcha/autoload.php';
$recaptcha = new \ReCaptcha\ReCaptcha('6LcxdOEUAAAAACOzpaQsmwaDmv8WifForacLqmC8');
$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                  ->verify($gRecaptchaResponse, $remoteIp);
if ($resp->isSuccess()) {
    // Verified!
} else {
    $errors = $resp->getErrorCodes();
}
?>



<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form method="post" action=mail.php>
	<div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
	
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
	
	<div>
        <label for="name">Sujet :</label>
        <input type="text" id="name" name="subject">
    </div>
	
    <div>
	<label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
      <div class="g-recaptcha" data-sitekey="6LcxdOEUAAAAAPtrP9cV2DSO6wwSWDVUTprjEzi0"></div>
      <br/>
      <input type="submit" value="Envoyer">
    </form>
  </body>
</html>

<?php
$titre    = "Test formulaire email\n";
$tete     = "From: moi@mondomaine.com\n";
$tete    .= "Content-Type: text/html;charset=\"utf-8\"";
 
$message = '<form method="post" action="https://www.kirghizasia.com/kontakt.php"><input type="hidden" name="test" value="100" /><input type="submit" value="valider"></form>';
 
mail("kirghizasia@gmail.com", $titre, $message, $tete);
  ?>  
