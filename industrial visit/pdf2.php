<?php  
function fetch_data()  
{  
$output = '';  

    
    
    
    
      $conn = mysqli_connect("localhost", "root", "" ,"industrial visit");  
$sql = "SELECT student.name,student.usn,student.branch,student.year,student.cname,faculty.fname,faculty.fid,faculty.dept FROM student,visit_details,faculty where visit_details.cname = student.cname AND faculty.fid = visit_details.fid;";
    
    
    
    
    
$result = mysqli_query($conn, $sql);  
while($row = mysqli_fetch_array($result))  
{ 
     
     
     
     
$output .= '<tr>  
<td>'.$row["name"].'</td>  
<td>'.$row["usn"].'</td>  
<td>'.$row["branch"].'</td> 
<td>'.$row["year"].'</td> 
<td>'.$row["cname"].'</td> 
<td>'.$row["fname"].'</td>
<td>'.$row["fid"].'</td>
<td>'.$row["dept"].'</td>
</tr>  
';  
}  
return $output;  
}  



if(isset($_POST["generate_pdf"]))  
{  
require_once('TCPDF-master/tcpdf.php');  
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
$obj_pdf->SetCreator(PDF_CREATOR);  
$obj_pdf->SetTitle("Faculty Details");  
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
$obj_pdf->SetDefaultMonospacedFont('helvetica');  
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->SetAutoPageBreak(TRUE, 10);  
$obj_pdf->SetFont('helvetica', '', 11);  
$obj_pdf->AddPage();  
$content = '';  
$content .= '  
<h4 align="center">Visit Details</h4><br /> 
<table border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="15%">Name</th>  
<th width="10%">USN</th>  
<th width="10%">Branch</th>  
<th width="10%">Year</th> 
<th width="15%">Company Name</th>
<th width="19%">Faculty Name</th>
<th width="10%">Faculty Id</th>
<th width="15%">Department</th> 

</tr>  
';  
$content .= fetch_data();  
$content .= '</table>';  
$obj_pdf->writeHTML($content);  
$obj_pdf->Output('file.pdf', 'I');  
}  
?>  
<!DOCTYPE html>  
<html>  
<head>  
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
</head>  
<body>  
<br />
<div class="container">  
<h4 align="center"> Visit Details</h4><br />  
<div class="table-responsive">  
<div class="col-md-12" align="right">
<form method="post">  
<input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
    
    
    
    
</form>  
</div>
<br/>
<br/>
<table class="table table-bordered">  
<tr>  
<th width="30%">Name</th>  
<th width="20%">USN</th>  
<th width="10%">Branch</th>  
<th width="10%">Year</th> 
<th width="20%">Company Name</th>
<th width="15%">Faculty Name</th>
<th width="15%">Faculty Id</th>
<th width="15%">Department</th> 

</tr>  
<?php  
echo fetch_data();  
?>  
    
    
</table>  
    
    
    <div class="form-input editContent"><button class="btn" style="outline: none; cursor: inherit; outline-offset: -2px; margin=right">
                                            
                                            <a href="admin.html">
                                                
                                                
                                                Home</a> </button></div>
</div>  
</div>  
</body>     
</html>