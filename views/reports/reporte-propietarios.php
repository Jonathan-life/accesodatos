<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../models/Propietario.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    $propietario = new Propietario();
    $listaPropietarios = $propietario->getAll();

    ob_start();
    include __DIR__ . '/../contents/content-report-propietario.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(15, 10, 15, 10));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('Reporte_Propietarios.pdf');
} catch (Html2PdfException $e) {
    if (isset($html2pdf)) {
        $html2pdf->clean();
    }
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
