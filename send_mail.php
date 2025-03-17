<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "twoj_email@gmail.com"; // <-- TU WPISZ SWÓJ EMAIL
    $subject = "Nowy zapis na wyścig!";
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $race = htmlspecialchars($_POST['race']);
    $message = htmlspecialchars($_POST['message']);
    
    $body = "Nowa osoba zapisana na wyścig:\n\n";
    $body .= "Imię i nazwisko: $name\n";
    $body .= "Email: $email\n";
    $body .= "Wyścig: $race\n";
    $body .= "Dodatkowe informacje: $message\n";

    $headers = "From: zapisy@twojastrona.pl"; // Możesz zmienić nadawcę

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Dziękujemy za zapisanie się! Skontaktujemy się z Tobą wkrótce.</h2>";
    } else {
        echo "<h2>Wystąpił błąd podczas wysyłania zgłoszenia. Spróbuj ponownie później.</h2>";
    }
}
?>
