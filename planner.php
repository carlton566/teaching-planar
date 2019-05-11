<!DOCTYPE html>
<!--
Template Name: Kelaby
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Teaching Planner module</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>


th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
form {
	font-size: 20px;
}

select {
	height:50px;
	width: 250px;
}
#a{
	height:30px;
	width: 75px;
}
#b{
	height:30px;
	width: 75px;
}

.space {
	padding-left: 25%;
}


</style>
</head>
<body id="top">
  
<div class="wrapper row1" align="center">
  <header id="header" class="hoc clear"> 
    <div >
      <p align="center" style="font-size:30px;font-family:Roboto ; color:white; background-color:rgb(155,186,110)"><img src="images/demo/fcritlogo.png" style="width:150px; height:150px; background:none !important;border: none !important;"/>FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</a></p>
    </div>
   </header>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="planner.php" style="font-size:18px;font-family:Montserrat ; color:darkblue;">Home</a></li>
      <li><a href="QA.php"style="font-size:18px;font-family:Montserrat; color:darkblue;">Qualitative Analysis</a></li>
      <li><a href="hodplanner.php"style="font-size:18px;font-family:Montserrat; color:darkblue;">HOD</a></li>
     
    </ul>
  </div>
</nav>
 
 <form name="drop_list" action="planner.php" method="post">
 <table style="width:60%" border="0" align=center>
  <tr>
    <th align=center  colspan="8"style="font-size:25px;font-family:Montserrat ; color:darkblue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Department of
	<select  style="font-size:17px; font-family:Montserrat ; color: darkblue;">
	<option value="IT" ><b>Information Technology</b></option>
  <option value="COMP"><b>Computer</b></option>
  <option value="EXTC"><b>Electronics and Telecommunication </b></option>
  <option value="ELECT"><b>Electrical</b></option>
  <option value="MECH"><b>Mechanical</b></option>
  </select> Engineering </th>
	</tr><tr></tr>
	
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
	</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <th colspan="4" >
	<p align=center style="font-size:17px;font-family:Montserrat ;color:darkblue; "> &nbsp;&nbsp;&nbsp;&nbsp;	SEM : 
 <select required id="a" class="Category" NAME="Category">
  <Option value="">Select Sem</option>
  </select></p>
 </th> 
   <th colspan="3" >
 <p align=left style="font-size:17px;font-family:Montserrat ; color:darkblue; "> Academic Year :<input type="date" name="Academic Year" required></p>	

	</tr><tr>
	</tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	
    <th colspan="4" >
	<p align=center style="font-size:17px;font-family:Montserrat ; color:darkblue; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp&nbsp &nbsp   	Course name and code: 
 <select required  id="b" class="SubCat" NAME="SubCat">
  <Option value="">Select Subject</option>
  </select></p>
 </th> 
   <th colspan="3" >
 <p align=left style="font-size:17px;font-family:Montserrat ; color:darkblue; "> Faculty name :<input type="text" name="Faculty name" id="fac" required></p>	


     
	</tr>
	

</table>

</form>
<form method="post">
<table style="width:50%" border="4" align="center" id="datatable" >
<thead id="dataheader">
<tr>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; " "align:center;"> <b>Lecture no  </td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "><b> Content to be covered   </td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "><b>Content not covered as per plan </td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "><b> Reference </td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "><b> Methodology used </td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "><b> Mapping to CO </td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "><b> Remarks by  faculty</td>
<td  style="font-size:17px;font-family:Montserrat ; color:darkblue; "> <b> Verified By HOD As per Staff input</b></td></tr> </thead>
 <tbody id="subdatatable">
 </tbody>
 <tr>
<td><input type="number" rows="1" cols="2" min="1" id="l" name="Lect no."> </td>
<td><textarea rows="2" cols="18" wrap="hard"  required id="c" name="contcov"> </textarea> </td>
<td><textarea rows="2" cols="15" wrap="hard" required  id="cc" name="contncov"> </textarea> </td>
<td><textarea rows="2" cols="10" wrap="hard" required id="r" name="ref"> </textarea> </td>
<td><textarea rows="2" cols="10" wrap="hard" required id="m" name="meth"> </textarea> </td>
<td><textarea rows="2" cols="10" wrap="hard" required id="mmm" name="mapp"> </textarea> </td>
<td><textarea rows="2" cols="10" wrap="hard" required id="rr" name="remarks"> </textarea> </td>
<td><textarea rows="2" cols="10" wrap="hard" required id="rr" name="verified"> </textarea> </td>
</tr>
</table>
<input type="button" id="button" value="Save" style="font-size:15px;font-family:Roboto ; color:blue; align:center; position: absolute; left: 50%; right: 50%;"/>
</form>
<br>
<INPUT type="button" value="Add Row" onclick="addRow('datatable')" />
<INPUT type="button" value="Delete Row" onclick="deleteRow('datatable')" />
<script>
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[0].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[rowCount-1].cells[i].innerHTML;
				
			}
		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<=rowCount+1; i++) {
				var row = table.rows[rowCount-2];
					if(rowCount <= 2) {
						alert("Cannot delete all the rows.");
						break;
					}
					table.deleteRow(rowCount-1);
					
				


			}
			}catch(e) {
				alert(e);
			}
		}

</script>
<div class=container-fluid>
<div class = "wrapper span12" >
<button style="position: relative; left: 50%; right: 50%; bottom: 0%;"onclick="myFunction()">
 <span class="label"></span>
  <span class="glyphicon glyphicon-print" ></span><b>Print</b>
</button>
<script>
$('#button').click(function(e) {
  $("#submit .label").text("New Search");
});
function myFunction() {
    window.print();
}
   
 </script>  
   
   
   <form>
   <br>
   <h3 style="font-size:20px;font-family:Montserrat; color:black; "><b>Reference material used:</b>
   <h3 style="font-size:18px;font-family:Montserrat ; color:darkblue; ">Textbooks :</b><textarea rows="1" cols="10" wrap="hard" required> </textarea> 
   <h3  style="font-size:18px;font-family:Montserrat ; color:darkblue; ">Reference books :</b><textarea rows="1" cols="10" wrap="hard" required> </textarea> 
  <h3 style="font-size:18px;font-family:Montserrat; color:darkblue; ">Any other material :</b><textarea rows="1" cols="10" wrap="hard" required> </textarea> 
<br><input type="submit" value="Submit" style="font-size:15px;font-family:Montserrat ; color:darkblue;"/>
</form>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<script language="javascript" src="list.js"></script>
</body>
</html>