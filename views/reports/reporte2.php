<?php

//Este

//require_once dirname(__FILE__).'/../vendor/autoload.php';
require_once '../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf; //core = nucleo libreria
use Spipu\Html2Pdf\Exception\Html2PdfException; //Identificaon errores
use Spipu\Html2Pdf\Exception\ExceptionFormatter; //Formatear PDF

try {
    ob_start();
    include_once '../../public/css/estilos-reportes.css';
    include_once '../contents/content-report2.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(15, 5, 15, 5));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('jonathan.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

