<?php
require('fpdf181/fpdf.php');
include 'core/init.php';
$phase=$_SESSION['phase'];
class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial', 'B',15);
		
		
		$this->Image('Images/logo.jpg',10,25,25);
		$this->Ln(5);
		$this->SetFont('Arial', 'B',12);
		$this->Cell(90,5,'',0,0);
		$this->Cell(55,5,'KENYA TAEKWONDO FEDERATION (KTF)',0,0);
		$this->Cell(70,5,'',0,1);
		
		$this->Cell(65,10,'',0,0);
		$this->Cell(71,10,'Headquarters: Kenya national Sports Council Offices- Msa Road',0,0);
		$this->Cell(0,10,'',0,1);
		
		$this->Cell(100,10,'',0,0);
		$this->Cell(50,10,' P. O Box 61002-00200, Nairobi.',0,0);
		$this->Cell(0,10,'',0,1);
		
		$this->Cell(120,10,'',0,0);
		$this->Cell(50,10,'Tel: 074498539',0,0);
		$this->Cell(0,10,'',0,1);
		
		$this->Cell(125,10,'',0,0);
		$this->Cell(50,10,'NAIROBI',0,0);
		$this->Cell(0,10,'',0,1);

		$this->Cell(199,1,'',1,1);
		//----------------------------------------------get name
		     
		
		date_default_timezone_set('Africa/Nairobi');
	    $now = new DateTime();
	    $time = $now->format('H:i:s');
	    $date = $now->format('d-m-Y');
		$wad=$_GET['c'];

        $this->Ln(5);
		$this->SetFont('Arial','B',11);
		$this->Cell(5,5,'',0,0);
		$this->Cell(100,5,'Finanancial statement as at  '.$date,0,0);
		$this->Cell(40,5,'',0,1);
		$this->Cell(5,2,'',0,0);
		$this->Cell(100,2,'',0,0);
		$this->Cell(40,2,'',0,1);
		
		$this->SetFont('Arial','B',8);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(50,50,100);
		 
		 $this->Cell(20,5,'Date',1,0,'',true);
		 $this->Cell(25,5,'Money in(Kshs)',1,0,'',true);
		$this->Cell(25,5,'Money Out(Kshs)',1,0,'',true);
		
		$this->Cell(25,5,'Ref. number',1,0,'',true);
		
		$this->Cell(45,5,'Giver/Receiver',1,0,'',true);
		$this->Cell(58,5,'Description',1,1,'',true);
		
		
		
		
		
	}
	function Footer(){
		//Go to 1.5cm from bottom
		$this->SetY(-15);
		
		$this->SetFont('Arial','',7);
		
		$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,1,'C');
		$this->Cell(0,5,'Software by: @samSoft(0726159307)',0,0,'R');
		

		
	}
}
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages('{pages}');

$pdf->AddPage();

$pdf->SetFont('Arial','',9);			 
$sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $current_balance=$row['amount'];
                  
                  }			 
 $sql =$sql="SELECT * FROM  money_in_out";
       $result=mysqli_query($con,$sql) or die(mysql_error());
       if(!$result){
	    }
	    $in=0;
	    $out=0;
	while($row=mysqli_fetch_array($result))
                   {    
                   	    $dt=$row['transaction_date'];
                    $moneyin=$row['amount_in'];
                    $moneyout=$row['amount_out'];
                    $ref=$row['ref_number'];
                    $giver=$row['giver_receiver'];
                    $desc=$row['comment'];
                    $in=$moneyin+$in;
                    $out=$moneyout+$out;

     $pdf->Cell(20,5,$dt,1,0);           
	 $pdf->Cell(25,5,$moneyin,1,0);
	 $pdf->Cell(25,5,$moneyout,1,0);
	 
	 $pdf->Cell(25,5,$ref,1,0);
	 
	 $pdf->Cell(45,5,$giver,1,0);
	 $pdf->Cell(58,5,$desc,1,1);
	 
	 
	 
	 
 }

     $pdf->Cell(20,5,'Total',1,0);
	 $pdf->Cell(25,5,$in,1,0);
	 $pdf->Cell(25,5,$out,1,1);

     $pdf->SetFont('Arial','B',12);
     $pdf->Cell(110,5,'',0,1);
     $pdf->Cell(113,5,'',0,0);
     $pdf->Cell(60,5,'Current Balance (Kshs)',1,0);
	 $pdf->Cell(25,5,$current_balance,1,1);
    



$pdf->Output();

?>