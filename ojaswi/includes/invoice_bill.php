<?php
session_start();
include_once("../fpdf.php");

if($_GET["sales_date"] && $_GET["invoice_no"])
{
	$pdf=new FPDF();
	$pdf->AddPage(); 
		
	$pdf->SetFont("Arial","B",16);
	$pdf->Cell(190,10,"",0,1,"C");
	$pdf->SetFont("Arial",null,12);

	$pdf->Cell(50,10,"Sales Date",0,0);
	$pdf->Cell(50,10,":".$_GET["sales_date"],0,1);
	 $pdf->Cell(50,10,":".$_GET["invoice_no"],0,0);
	 $pdf->Cell(50,10,"Customer Name",0,0);
	$pdf->Cell(50,10,":".$_GET["customer_name"],0,1);
	$pdf->Cell(50,10,"",0,1);

	$pdf->Cell(10,10,"#",1,0,"C");
	$pdf->Cell(70,10,"Product Name",1,0,"C");
	$pdf->Cell(30,10,"Quantity",1,0,"C");
	$pdf->Cell(40,10,"Price",1,0,"C");
	$pdf->Cell(40,10,"Total(rs)",1,1,"C");

	for($i=0; $i < count($_GET["product_name"]);$i++)
	{
		$pdf->Cell(10,10,($i+1),1,0,"C");
		$pdf->Cell(70,10,$_GET["product_name"][$i],1,0,"C");
		$pdf->Cell(30,10,$_GET["qty"][$i],1,0,"C");
		$pdf->Cell(40,10,$_GET["price"][$i],1,0,"C");
		$pdf->Cell(40,10,($_GET["qty"][$i]*$_GET["price"][$i]),1,1,"C");
	}
	$pdf->Cell(50,10,"",0,1);
	
	$pdf->Cell(70,10,"Sub Total",0,0);
	$pdf->Cell(50,10,":".$_GET["sub_total"],0,1);
	$pdf->Cell(70,10,"Discount",0,0);
	$pdf->Cell(50,10,":".$_GET["discount"],0,1);
	$pdf->Cell(70,10,"Net Total",0,0);
	$pdf->Cell(50,10,":".$_GET["net_total"],0,1);
	$pdf->Cell(70,10,"Paid",0,0);
	$pdf->Cell(50,10,":".$_GET["paid"],0,1);
	$pdf->Cell(70,10,"Due",0,0);
	$pdf->Cell(50,10,":".$_GET["due"],0,1);

	$pdf->Cell(180,10,"Signature",0,0,"R");

	$pdf->Output("../pdf_invoice/PDF_INVOICE_".$_GET["invoice_no"].".pdf","F");
	
	$pdf->Output();
}
?>