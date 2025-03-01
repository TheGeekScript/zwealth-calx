<?php
// require '../vendor/autoload.php';

// use TCPDF as TCPDF;
require_once('../tcpdf/tcpdf.php');
require_once('mail_headers.php');

// Get form data
$email = $_POST['swp_email'];
$data  = json_decode($_POST['swp_emailData'], true); // Decode the JSON string
$calcEmailType = $_POST['swp_calctype']; // Calculator type

// Validate the data
if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
    die('<div class="alert alert-danger alert-dismissible fade show" role="alert">Error: Invalid data format.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
}

// Customize email subject and content based on calculator type
$subject = '';
$html = '';

$html = '
<table cellspacing="0" cellpadding="10" border="1" style="font-size:11px">
    <tr>
        <th>DETAILS</th>
        <th>VALUE</th>
    </tr>
    <tr>
        <td>Invested Amount (Rs.)</td>
        <td>'.$data['investedAmount'].'</td>
    </tr>
    <tr>
        <td>Total Withdrawal (Rs.)</td>
        <td>'.$data['totalWithdrawal'].'</td>
    </tr>
    <tr>
        <td>Final Value (Rs.)</td>
        <td>'.$data['finalValue'].'</td>
    </tr>
</table>
';

// Output the HTML content
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$pdfContent = $pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'zwealth-calcx.pdf', 'FI');

// Save PDF to a local directory
$pdfFileName = 'zwealth-calculation-results-' . time() . '.pdf'; // Unique filename
$pdfFilePath = __DIR__ . '/../pdfs/' . $pdfFileName; // Save in a "pdfs" directory
$pdf->Output($pdfFilePath, 'F'); // Save to file

// Send email with PDF attachment
$to = $email;
$subject = 'Systematic Withdrawal Plan';
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
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Email sent successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Failed to send email. Please try again.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}
?>