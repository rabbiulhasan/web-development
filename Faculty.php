<!DOCTYPE html>
<html>
<head>
   <title>
      CSE HOME || KUET
   </title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	 <div >

     <?php include 'header.php'; ?>

  </div>

<style type="text/css">
<!-- /* $WEFT Created  */
  @font-face {
    font-family:SolaimanLipi;
	font-style:normal;
    font-weight:normal;
    src: url(http://www.buet.ac.bd/cse/faculty/solaimanlipi.eot);
  }
-->

.faculty-block {
		float: left;
		width: 100%;
		border-bottom: solid 1px #666;
		margin-bottom:10px;
	}
	.faculty-name {
		font-size: 14px;
		color: #990000;
		margin: 0;
	}
	.faculty-name a {
		font-size: 14px;
		color: #990000;
		margin: 0;
		text-decoration: none;
	}
	.faculty-designation {
		font-size: 14px;
		color: #666666;
		margin: 0;
	}
	.faculty-image {
		float: left;
		width: 200px;
		height: 180px;
		margin: 5px 15px 10px 0;
	}
	.faculty-email {
		font-size:13px;
		color: #333333;
		margin: 0;
	}
</style>


<div style="padding-top: 200px;">


	<td width="650" valign="top" align="left" class="inforegion">
		<div style="padding:15px;">
			<div id="commonbox">
				   <div id="commonhead">			
					 <img align="absmiddle" src="http://cse.buet.ac.bd/images/bullets/uses.png" />&nbsp;  Active Faculty List:
				   </div>
						<br>
				   <div class="faculty-block">
					   			<h4 class="faculty-name">1. &nbsp;<a href=./facdetail.php?id=kaykobad>Dr. Muhammad Sheikh Sadi</a></h4>
					   			<p class="faculty-designation">Professor </p>
					   			<img class="faculty-image" src="sadi sir.jpg" alt="no image">
					   			<p class="faculty-email"><b>Email: </b>sadi@cse.kuet.ac.bd, sheikhsadi@gmail.com </p>
					   			<p class="faculty-email">
					   				<b>Education: </b>
					   				Ph.D, 1988
					   				<br>
					                The Flinders University of South Australia, Australia
					                <br><br>
					                M.Engg., Computer Applications Technology, 1980-82
					                <br>
					                Asian Institute of Technology, Thailand
					                <br><br>
					                M.S (Hons) in Engg., Automated Management of Merchant Marine, 1973-79
					                <br>
					                Odessa Marine Engg. Institute 
					            </p>
	                </div>


			        <div class="faculty-block">
			         	<h4 class="faculty-name">2. &nbsp; <a href=./facdetail.php?id=mmasroorali> Dr. M.M.A. Hashem<span style="font-family:solaimanLipi;"></span></a></h4><p class="faculty-designation">Professor </p><img class="faculty-image" src="uses.jpg" alt="no image"><p class="faculty-email"><b>Email: </b>mma_hashem@yahoo.com</p><p class="faculty-email"><b>Biography: </b>
			         		B.Sc. in Electrical and Electronic Engineering<br>
						Khulna University of Engineering & Technology<br><br>
			         		M.Sc. in Computer Science and Engineering<br>
						Khulna University of Engineering & Technology
		             </div>



		            <div class="faculty-block">
		            	<h4 class="faculty-name">3. &nbsp; <a href=./facdetail.php?id=kashem>Mehnuma Tabassum Omar <span style="font-family:solaimanLipi;"> </span></a></h4><p class="faculty-designation">Assistant Professor </p><img class="faculty-image" src="misty maam.jpg" alt="no image"><p class="faculty-email"><b>Email: </b>misty2409@gmail.com</p><p class="faculty-email"><b>Education: </b>
		                       
						B.Sc. in Computer Science and Engineering<br>
						Khulna University of Engineering & Technology
						
					</div>
			</div>
	</td>
						
</div>
						
<div style="text-align: middle ; padding-left: 280px;">
	<table style="text-align-last:middle;" width="800" id="table3" bgcolor="#FEFFF6" border="0" cellpadding="0" cellspacing="0">
		<tr>
		   <td bgcolor="#000000" class="tabletext" style="color: #FFFFFF">
				<p align="center">Department of Computer Science and Engineering, Academic building, KUET, Fulbari gate,
				Khulna, Bangladesh. The Department is part of the Faculty of Electrical and Electronic Engineering at the 
				<a href="http://www.kuet.ac.bd"><font color="#CC9966">Khulna University of Engineering & Technology.</font></a> 
				No part or content of this website may be copied or reproduced without permission of the department authority.
				Contact <a href="#"><font color="#CC9966">csewebmaster@gmail.com</font></a> with questions or comments on this page.&nbsp; [<a href="credits.php"><font color="#CC9966">Development Credits</font></a>]</p>
			</td>
		</tr>
		<tr>
			 <td class="bodyback" style="width:800px; height:20px;">
			 	
			 </td>
		</tr>
	</table>
</div>



<script type="text/javascript">
if (window.XMLHttpRequest){
  xmlhttp=new XMLHttpRequest();
  }
else {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","cd_catalog.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

var x=xmlDoc.getElementsByTagName("CD");
for (i=0;i<x.length;i++){
  document.write(x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue);
  document.write("<br>");
  document.write(x[i].getElementsByTagName("Number")[0].childNodes[0].nodeValue);
  document.write("<br>");
  document.write(x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue);
  document.write("<br>");
  document.write(x[i].getElementsByTagName("Education")[0].childNodes[0].nodeValue);
  document.write("<br>");
  }
</script>

</body>
</html>