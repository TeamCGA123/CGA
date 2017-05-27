<?php
	
	include('MPDF57/mpdf.php');
	
	$html="
	<html>
<head>
	<title>Certficate</title>
	<style>
	#name{
		text-align:center;
			font-weight:bolder;
			font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;
			font-size:36px;
			
	}
	#container{
			font-size:24px;
	}
	</style>
 </head>
 
 <body>
          <header id='name'>Character Certificate</header>
    <div id='container'>
               <p>This is to certify that I know Mr/Miss <span style='text-decoration:underline'>XXXX </span>
                  was the student of <span style='text-decoration:underline'>Malnad College of Engineering</span>
                  during the year <span style='text-decoration:underline'>2014-2018</span> and his/her character was 
                  satisfactory.</p>
    </div> 
 </body>
 
 </html>
 ";
 
 $mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->SetDisplayMode('fullpage');
 
$mpdf->Output();
 
?>