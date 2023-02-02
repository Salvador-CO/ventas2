<?php
require __DIR__ . '/ticket/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

function abre_cajon()
{
    /*Conectamos con la impresora*/
    $nombre_impresora = trim(file(__DIR__ . '/impresora.ini')[0]);
    $connector = new WindowsPrintConnector($nombre_impresora);
    $printer = new Printer($connector);
    /*No imprimimos nada, solamente abrimos cajón*/
    $printer->cut();
    $printer->pulse();
    $printer->close();
   
}

abre_cajon();
?>