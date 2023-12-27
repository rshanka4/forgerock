<?php
class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $message;
    public $headers;
    public $smtp;

    public function send() {
        $this->headers = "From: $this->from_name <$this->from_email>\r\n";
        $this->headers .= "Reply-To: $this->from_email\r\n";
        $this->headers .= "MIME-Version: 1.0\r\n";
        $this->headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        if (isset($this->smtp)) {
            // Use SMTP to send email
            $mail_result = mail($this->to, $this->subject, $this->message, $this->headers);
            // Additional SMTP configuration code would go here if using SMTP
        } else {
            // Send email using standard mail() function
            $mail_result = mail($this->to, $this->subject, $this->message, $this->headers);
        }

        if ($mail_result) {
            return 'Email successfully sent!';
        } else {
            return 'Email sending failed!';
        }
    }
}
?>
