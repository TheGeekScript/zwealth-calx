<?php
require 'vendor/autoload.php';

use TCPDF as TCPDF;

// Get form data
$email = $_POST['email'];
$emailData = $_POST['emailData'];
$bcc = array('web.chaitra@gmail.com');
$calcEmailType = $_POST['calcEmailType']; // Calculator type

// Parse email data into an associative array
$data = [];
$lines = explode("\n", $emailData);
foreach ($lines as $line) {
    if (strpos($line, ': ') !== false) {
        list($key, $value) = explode(': ', $line, 2); // Split into key and value
        $data[$key] = $value;
    }
}

// Customize email subject and content based on calculator type
$subject = '';
$html = '';

//Handle Calculator Results
switch ($calcEmailType) {
    case 'emiHomeLoan':
        $subject = 'Home Loan EMI Results';
        $html = <<<EOD
        <h1>Home Loan Calculation Results</h1>
        <p>Principal Amount (₹): {$data['Principal Amount']}</p>
        <p>Rate of Interest (Annual %): {$data['Rate of Interest']}</p>
        <p>Loan Tenure (Years): {$data['Loan Tenure']}</p>
        <p>Monthly EMI: {$data['Monthly EMI']}</p>
        <p>Interest Amount: {$data['Interest Amount']}</p>
        <p>Total Payable: {$data['Total Payable']}</p>
        EOD;
        break;

    case 'emiCarLoan':
        $subject = 'Car Loan EMI Results';
        $html = <<<EOD
        <h1>Car Loan Calculation Results</h1>
        <p>Principal Amount (₹): {$data['Principal Amount']}</p>
        <p>Rate of Interest (Annual %): {$data['Rate of Interest']}</p>
        <p>Loan Tenure (Years): {$data['Loan Tenure']}</p>
        <p>Monthly EMI: {$data['Monthly EMI']}</p>
        <p>Interest Amount: {$data['Interest Amount']}</p>
        <p>Total Payable: {$data['Total Payable']}</p>
        EOD;
        break;

    default:
        die('<div class="alert alert-danger">Error: Invalid calculator type.</div>');
}

// Generate PDF
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);
$pdf->writeHTML($html, true, false, true, false, '');
$pdfContent = $pdf->Output('zwealth-calcx-results.pdf', 'S'); // Save PDF content as a string

// Send email with PDF attachment
$to = $email;
$message = 'Please find the attached PDF with your loan calculation results.';

// Set headers for CC and BCC
$headers = 'From: no-reply@zwealth.in' . "\r\n";
if (!empty($cc)) {
    $headers .= 'Cc: ' . $cc . "\r\n";
}
if (!empty($bcc)) {
    $headers .= 'Bcc: ' . $bcc . "\r\n";
}

$boundary = md5(time());
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
$body .= chunk_split(base64_encode($message)) . "\r\n";

$body .= "--$boundary\r\n";
$body .= "Content-Type: application/pdf; name=\"loan-results.pdf\"\r\n";
$body .= "Content-Disposition: attachment; filename=\"loan-results.pdf\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
$body .= chunk_split(base64_encode($pdfContent)) . "\r\n";
$body .= "--$boundary--";

if (mail($to, $subject, $body, $headers)) {
    echo '<div class="alert alert-success">Email sent successfully!</div>';
} else {
    echo '<div class="alert alert-danger">Failed to send email. Please try again.</div>';
}
?>