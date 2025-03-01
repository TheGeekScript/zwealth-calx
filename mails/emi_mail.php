<?php
// require '../vendor/autoload.php';

// use TCPDF as TCPDF;
require_once('../tcpdf/tcpdf.php');

// Get form data
$email = $_POST['emi_email'];
$data  = json_decode($_POST['emi_emailData'], true); // Decode the JSON string
$bcc = 'web.chaitra@gmail.com';
$calcEmailType = $_POST['emi_calctype']; // Calculator type

// Validate the data
if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
    die('<div class="alert alert-danger alert-dismissible fade show" role="alert">Error: Invalid data format.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
}

// Customize email subject and content based on calculator type
$subject = '';
$html = '';

// Generate PDF
class MYPDF extends TCPDF {
    // Page header
    public function Header() {
        // Logo
        $image_file = '../img/logo_black.png'; // Path to your logo
        $this->Image($image_file, 10, 10, 70, '', 'PNG', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, 'ZWealth.in', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->Ln(10); // Line break
            //---------------------------set watremark----------------------
    // get the current page break margin
    //$bMargin = $this->getBreakMargin();
    // get current auto-page-break mode
    //$auto_page_break = $this->AutoPageBreak;
    // disable auto-page-break
    //$this->SetAutoPageBreak(false, 0);
    // set bacground image
    //$img_file = '../img/invoice-bg.jpg';
    //$this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
    // restore auto-page-break status
    //$this->SetAutoPageBreak($auto_page_break, $bMargin);
    // set the starting point for the page content
    //$this->setPageMark();
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-20);
        // Set font
        $this->SetFont('helvetica', '', 8);
        $footertext = '<hr>Address: Mumbai, India | Email: info@zwealth.in | Mobile: +91 83568 41979';
        $this->writeHTML($footertext, true, true, true, true);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'B', 'M');
    }
}

$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false, false, 'abc', 'def', 'info@zwealth.in', '+91 83568 41979', 'Mumbai, India');
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ZWealth');
$pdf->SetTitle('ZWealth Finance');
$pdf->SetSubject('ZWealth');
$pdf->SetKeywords('ZWealth');

// set default header data
$pdf->SetHeaderData('../img/logo_black.png', '50');
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins('10', '30', '10');
$pdf->SetHeaderMargin('10');
$pdf->SetFooterMargin('30');

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 30);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>false, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

//Handle Calculator Results
switch ($calcEmailType) {
    case 'emiHomeLoan':
        $subject = 'Home Loan EMI Results';
        $html = '
        <table cellspacing="0" cellpadding="10" border="1" style="font-size:11px">
            <tr>
                <th>DETAILS</th>
                <th>VALUE</th>
            </tr>
            <tr>
                <td>Principal Amount (₹)</td>
                <td>'.$data['principalAmount'].'</td>
            </tr>
            <tr>
                <td>Rate of Interest (Annual %)</td>
                <td>'.$data['interestRate'].'</td>
            </tr>
            <tr>
                <td>Loan Tenure (Years)</td>
                <td>'.$data['loanTenure'].'</td>
            </tr>
            <tr>
                <td>Monthly EMI (₹)</td>
                <td>'.$data['monthlyEMI'].'</td>
            </tr>
            <tr>
                <td>Interest Amount (₹)</td>
                <td>'.$data['interestAmount'].'</td>
            </tr>
            <tr>
                <td>Total Payable (₹)</td>
                <td>'.$data['totalPayable'].'</td>
            </tr>
        </table>
        ';
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
        die('<div class="alert alert-danger alert-dismissible fade show" role="alert">Error: Invalid calculator type.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
}

// Output the HTML content
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$pdfContent = $pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'zwealth-calcx.pdf', 'FI');

// Save PDF to a local directory
$pdfFileName = 'calculation-results-' . time() . '.pdf'; // Unique filename
$pdfFilePath = __DIR__ . '/../pdfs/' . $pdfFileName; // Save in a "pdfs" directory
$pdf->Output($pdfFilePath, 'F'); // Save to file

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
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Email sent successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Failed to send email. Please try again.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}
?>