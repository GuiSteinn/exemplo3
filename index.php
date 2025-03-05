<?php

require_once __DIR__ . '/vendor/autoload.php';

// Criar uma instância do mPDF
$mpdf = new \Mpdf\Mpdf();

$html = '
    <h1>Hello,</h1>
    <p>Este é um exemplo de PDF gerado com a biblioteca mPDF.</p>
    <p>Aqui está uma foto do Messi:</p>
    <img src="https://assets.goal.com/images/v3/bltd58c4d60ecd9275e/GOAL_-_Blank_WEB_-_Facebook_-_2023-06-13T135350.847.png?auto=webp&format=pjpg&width=1080&quality=60" alt="Lionel Messi" style="width: 300px;">
';

// Adicionar o conteúdo HTML ao PDF
$mpdf->WriteHTML($html);

// Saída do PDF para o navegador
$mpdf->Output();

?>