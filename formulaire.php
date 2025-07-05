<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "alexmukos315@gmail.com";
  $subject = "Demande via site web - $nom";
  $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    header("Location: merci.html");
    exit;
} else {
    echo "❌ Une erreur est survenue. Veuillez réessayer.";
}
} else {
  header("Location: index.html");
  exit;
}
?>