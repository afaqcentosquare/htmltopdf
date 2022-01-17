<?php
use Spipu\Html2Pdf\Html2Pdf;

$html = file_get_contents('https://swnovels.com/second-marriage/r90519.html');

$html2pdf = new html2pdf();
$html2pdf->writeHTML($html); // pass in the HTML
$html2pdf->output('myPdf.pdf', 'D');
?>