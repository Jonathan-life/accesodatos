<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();

    // Ruta absoluta al archivo CSS
    include_once __DIR__ . '/../../public/css/estilos-reportes.css';

    // Ruta absoluta al archivo que contiene el contenido HTML del reporte
    include_once __DIR__ . '/../contents/content-report2.php';

    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(15, 5, 15, 5));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);

    // Salida del PDF al navegador
    $html2pdf->output('jonathan.pdf');
} catch (Html2PdfException $e) {
    if (isset($html2pdf)) {
        $html2pdf->clean();
    }
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
