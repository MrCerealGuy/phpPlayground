<?php
    require('fpdf.php');

    $tickets = "";

    if (isset($_GET["tickets"]))
        if(empty($_GET["tickets"]))
            $tickets = 0;
        else
            $tickets = intval($_GET["tickets"]);

    $pdf = new FPDF();
    $pdf->AddPage();

    for ($i = 0; $i<$tickets; $i++) {

        if ($i != 0 && ($i % 4) == 0)
            $pdf->AddPage();
        
        $pdf->Image('img/ticket-template.png',5,5+(($i % 4)*65),200,60,'PNG');

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetTextColor(255,255,255);

        $pdf->Cell(40, 10, $_GET["eventname"]);
        $pdf->Ln(10);
        $pdf->Cell(40, 10, $_GET["location"]);
        $pdf->Ln(20);
        $pdf->SetX(40);
        $pdf->Cell(40, 10, $_GET["firstname"]." ".$_GET["lastname"]);
        $pdf->Ln(15);
        $pdf->SetX(90);
        $pdf->Cell(40, 10, $_GET["datetime"]);

        $pdf->Ln(20);
    }

    $pdf->Output();
?>