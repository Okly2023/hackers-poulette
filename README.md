
# Poulette_Hackers

This project consists of a contact form (`forme.html`) and a server-side script (`send.php`) that sends an email with the form data using PHPMailer.

## Files

### forme.html

This is the main contact form. It includes fields for name, last name, gender, email, country, subject, and message. It uses jQuery to handle the form submission, prevent the default form submission event, and send the form data to `send.php` using AJAX.

### send.php

This script handles the server-side processing of the form. It uses the PHPMailer library to send an email with the form data. The email is sent via SMTP using a Gmail account.

## Usage

To use this project, you need to have a server environment with PHP installed. You also need to install the PHPMailer library using Composer.

1. Clone or download this repository.
2. Install PHPMailer using Composer: `composer require phpmailer/phpmailer`.
3. Open `forme.html` in your browser to view the form.
4. Fill out the form and submit it. The form data will be sent to `send.php`, which will send an email with the form data.

## Note

Please replace the email credentials in `send.php` with your own.

## Dependencies

- [PHPMailer](https://github.com/PHPMailer/PHPMailer)
- [jQuery](https://jquery.com/)