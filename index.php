<?php 
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hola mundo!</h1>');
$mpdf->WriteHTML('<br /><b>Este es mi primer documento PDF con PHP</b>');
$mpdf->Output();


?>