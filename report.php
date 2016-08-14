<?php
require("fpdf/fpdf.php");
require_once("includes/db.php");
if(!empty($_POST['submit']) )
{$criteria=$_POST['criteria'];
     
	 
	 if($criteria=='users')
	 {
		 echo $criteria;
	   $SQL="select * from users order by id";
		$result=mysqli_query($link,$SQL);
	
	 }
		}
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Employee List', 1, 0,C);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(25,7,"Employee ID");
$pdf->Cell(30,7,"Employee Name");
$pdf->Cell(50,7,"E-mail Address");
$pdf->Cell(30,7,"Contact No.");
$pdf->Cell(50,7,"Address");
$pdf->Ln();
$pdf->Ln();
 while($rows=mysqli_fetch_array($result))
        {

			$pdf->SetFont('Arial', '', 10);
            $id = $rows[0];
            $name = $rows[1]." ".$rows[2];
            $email = $rows[3];
            $phone = $rows[4];
            $address = $rows[5];
            $pdf->Cell(25,7,$id);
            $pdf->Cell(30,7,$name);
            $pdf->Cell(50,7,$email);
            $pdf->Cell(30,7,$phone);
            $pdf->Cell(50,7,$address);
            $pdf->Ln(); 
        }

ob_end_clean();
$pdf->Output();

	

?>