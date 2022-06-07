<?php


require_once("../vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<h3>Detalhes do Compromisso</h3>');


$mpdf->Output();



?>