<?php
    require('fpdf.php');

    $firstname = "";
    $lastname = "";
    $eventname = "";
    $location = "";
    $datetime = "";

    if (isset($_GET["eventname"])) 
        $eventname =  $_GET["eventname"];

    if (isset($_GET["firstname"])) 
        $firstname =  $_GET["firstname"];

    if (isset($_GET["lastname"])) 
        $lastname =  $_GET["lastname"];

    if (isset($_GET["location"])) 
        $location =  $_GET["location"];

    if (isset($_GET["datetime"])) 
        $datetime =  $_GET["datetime"];

    $pdf = new FPDF();
    $pdf->AddPage();

    for ($i = 0; $i<=3; $i++) {
        
        $pdf->Image('img/ticket-template.png',5,5+($i*65),200,60,'PNG');
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, $eventname);
        $pdf->Ln(10);
        $pdf->Cell(40, 10, $location);
        $pdf->Ln(20);
        $pdf->SetX(40);
        $pdf->Cell(40, 10, $firstname." ".$lastname);
        $pdf->Ln(15);
        $pdf->SetX(90);
        $pdf->Cell(40, 10, $datetime);

        $pdf->Ln(20);
    }

    $pdf->Output();
?>