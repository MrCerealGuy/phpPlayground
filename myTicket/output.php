<?php
    require('fpdf.php');

    $firstname = "";
    $lastname = "";

    if (isset($_GET["firstname"])) 
        $firstname =  $_GET["firstname"];

    if (isset($_GET["lastname"])) 
        $lastname =  $_GET["lastname"];

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, $firstname." ".$lastname);
    $pdf->Output();
?>