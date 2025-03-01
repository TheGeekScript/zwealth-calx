<?php $bcc = 'web.chaitra@gmail.com'; 

// Generate PDF
class MYPDF extends TCPDF {
    // Page header
    public function Header() {
        // Logo
        $image_file = '../img/logo.png'; // Path to your logo
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
$pdf->SetHeaderData('../img/logo.png', '50');
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
?>