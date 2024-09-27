php <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získanie hodnôt z formulára
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Kontrola, či sú všetky polia vyplnené
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        http_response_code(400);
        exit;
    }

    // reCAPTCHA secret key a odpoveď od klienta
    $recaptchaSecret = '6LfXvE8qAAAAAGDNHzk6wDQ8f1PgUzVoq3HkMv9T';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Pošleme požiadavku na Google reCAPTCHA API na overenie
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

print_r($responseKeys);


    // Skontrolujeme, či reCAPTCHA bola úspešná
    if (intval($responseKeys["success"]) !== 1) {
        echo "Please complete the CAPTCHA.";
        http_response_code(400);
        exit;
    }

    // Ak reCAPTCHA bola úspešná, pokračujeme s odoslaním e-mailu
    $to = "jozef.mikus@cpm.sk"; // Sem vložte e-mail príjemcu
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Pokus o odoslanie e-mailu
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
    } else {
        echo "There was an error sending the email.";
        http_response_code(500);
    }
} else {
    echo "Please submit the form.";
}
?>
