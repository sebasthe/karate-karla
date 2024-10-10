<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formularfelder sicher erfassen
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // E-Mail-Einstellungen
    $to = "karla.meier@example.com"; // Ihre E-Mail-Adresse
    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email";

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        // Erfolgreiche Nachricht
        echo "Vielen Dank für Ihre Nachricht! Ich werde mich so schnell wie möglich bei Ihnen melden.";
    } else {
        // Fehlermeldung
        echo "Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";
    }
} else {
    // Bei direktem Zugriff ohne POST-Daten
    echo "Ungültiger Zugriff.";
}
?>
