<?php

    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    $mpdf ->WriteHTML('<h1>Hello,</h1>');

    $mpdf -> Output();



?>