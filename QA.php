<html>
<html>
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
<title> Analysis module</title>
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
      <p align="center" style="font-size:30px;font-family:Roboto ; color:white; background-color:rgb(155,186,110)  "><img src="images/demo/fcritlogo.png" style="width:150px; height:150px; background:none !important;border: none !important;"/>FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</a></p>
    </div>
   </header>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="planner.php" style="font-size:18px;font-family:Montserrat  ; color:darkblue;">Home</a></li>
      <li><a href="QA.php"style="font-size:18px;font-family:Montserrat  ; color:darkblue;">Qualitative Analysis</a></li>
   
    </ul>
  </div>
</nav>


<form name="drop_list"  method="post">
<table style="width:60%" border="0" align=center>
  <tr>
    <th align=center  colspan="8"style="font-size:25px;font-family:Montserrat ; color:darkblue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Department of
	<select  name="dept" style="font-size:17px; font-family:Montserrat ; color: darkblue;">
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
	 <select required id=a class="Category" NAME="Category">
  <Option value="">Select Sem</option>
  </select>
 </p>
 </th> 
   <th colspan="3" >
 <p align=left style="font-size:17px;font-family:Montserrat ; color:darkblue; "> Academic Year :<input type="date" name="AcadYear" required></p>	

	</tr><tr>
	</tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	
    <th colspan="4" >
	<p align=center style="font-size:17px;font-family:Montserrat ; color:darkblue; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp&nbsp &nbsp   	Course name and code: 
 <select required  id=b class="SubCat" NAME="SubCat">
  <Option value="">Select Subject</option>
  </select></p>
 </th> 
   <th colspan="3" >
 <p align=left style="font-size:17px;font-family:Montserrat ; color:darkblue; "> Faculty name :<input type="text" name="Name" required></p>	


     
	</tr>
	

</table>

      
	  <table style="width:50%" border="3" align=center>
  <tr>
    <th colspan="5"><p align="center"style="font-size:20px; font-family:Montserrat ; color: darkblue;">Part A (Quantitative analysis)</p></th>
	</tr>
	<tr>
    <th colspan="5"  >Note: Faculty can enter <i>appropriate number</i> as remark with proper justification</th> 
	</tr>
	<tr>
    <th  colspan="5"  ><p align="center" style="color:red; font-size:20px; font-family:Montserrat ;">1---->NeedImprovement &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2---->Satisfactory &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 3---->Good &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 4---->Excellent</th> 
	</tr>
	 <tr>
    <th>Sr No</th>
    <th>Parameters to be verified</th> 
    <th>Remarks by faculty</th>
	<th>Justification by faculty *</th>
	<th>Remarks by Audit members</th>
  </tr>
  <tr>
    <td>1</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Course Plan and Execution</p></td> 
    <td><select name="CPAE" >
  <option value="1" ><b>1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></option>
  <option value="2" ><b>2</b></option>
  <option value="3" ><b>3</b></option>
  <option value="4" ><b>4</b></option>
  </select></td>
	<td><textarea name="CPAE_2" rows="3" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="CPAE_3" rows="3" cols="30" wrap="hard" required></textarea></td>
  </tr>
  <tr>
    <td>2</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Reference of teaching material</p></td> 
    <td><select name="ROTM">
  <option value="1"><b>1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></option>
  <option value="2"><b>2</b></option>
  <option value="3"><b>3</b></option>
  <option value="4"><b>4</b></option>
  </select></td>
	<td><textarea name="ROTM_2" rows="3" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="ROTM_3"rows="3" cols="30" wrap="hard" required></textarea></td>
  </tr>
   <tr>
    <td>3</td>
    <td> <p style=" font-family:Montserrat ; color: darkblue;"> Mapping COs with POs and PSOs </p></td> 
    <td><select name="MCWPAP"style="height: 50px;">
  <option value="1"><b>1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></option>
  <option value="2"><b>2</b></option>
  <option value="3"><b>3</b></option>
  <option value="4"><b>4</b></option>
  </select></td>
	<td><textarea name="MCWPAP_2" rows="3" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="MCWPAP_3"  rows="3" cols="30" wrap="hard" required></textarea></td>
  </tr>
   <tr>
    <td>4</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Effective Delivery Mechanism</p></td> 
    <td><select name="EDM" style="height: 50px;">
  <option value="1"><b>1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></option>
  <option value="2"><b>2</b></option>
  <option value="3"><b>3</b></option>
  <option value="4"><b>4</b></option>
  </select></td>
	<td><textarea name="EDM_2" rows="3" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="EDM_3" rows="3" cols="30" wrap="hard" required></textarea></td>
  </tr> <tr>
    <td>5</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Content Beyond Syllabus </p></td> 
    <td><select name="CBS" >
  <option value="1"><b>1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></option>
  <option value="2"><b>2</b></option>
  <option value="3"><b>3</b></option>
  <option value="4"><b>4</b></option>
  </select></td>
	<td><textarea name="CBS_2" rows="3" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="CBS_3" rows="3" cols="30" wrap="hard" required></textarea></td>
  </tr> <tr>
    <td>6</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Quality of UT Question Papers</p></td> 
    <td><select name="QOUQP">
  <option value="1"><b>1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></option>
  <option value="2"><b>2</b></option>
  <option value="3"><b>3</b></option>
  <option value="4"><b>4</b></option>
  </select></td>
	<td><textarea name="QOUQP_2" rows="3" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="QOUQP_3" rows="3" cols="30" wrap="hard" required></textarea></td>
  </tr>
   <tr>
    <th align=center  colspan="5"><p align="center" style="font-size:20px; font-family:Montserrat ; color: darkblue;" >Part B (Qualitative analysis)</p></th>
	</tr>
	<tr>
    <th colspan="5"  >Note: Faculty can enter Yes or No as remark with proper justification</th> 
	</tr>
	<tr>
    <td>7</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Course file maintained and verified by domain coordinator and HOD</p></td> 
    <td><select name="CFANDHOD" ><br>
	<option value="YES">YES&nbsp&nbsp&nbsp&nbsp&nbsp</option><br>
	<option value="NO">NO</option>
	</select></td>
	<td><textarea name="CFANDHOD_2" rows="8" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="CFANDHOD_3" rows="8" cols="30" wrap="hard" required></textarea></td>
  </tr>
  <tr>
    <td>8</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Students Performance Evaluation Methods, analysis of assessment results and corrective measures.</p></td> 
    <td><select name="SP" ><br>
	<option value="YES">YES&nbsp&nbsp&nbsp&nbsp&nbsp</option><br>
	<option value="NO">NO</option>
	</select></td>
	<td><textarea name="SP_2" rows="11" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="SP_3"rows="11" cols="30" wrap="hard" required></textarea></td>
  </tr>
   <tr>
    <td>9</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Rubrics created and followed for assessment </p></td> 
    <td><select name="RCAFFA" ><br>
	<option value="YES">YES&nbsp&nbsp&nbsp&nbsp&nbsp</option><br>
	<option value="NO">NO</option>
	</select></td>
	<td><textarea name="RCAFFA_2" rows="5" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="RCAFFA_3"rows="5" cols="30" wrap="hard" required></textarea></td>
  </tr>
   <tr>
    <td>10</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Identifying weak students and method adopted for improvement in the performance.</p></td> 
    <td><select name="IWS"><br>
	<option value="YES">YES&nbsp&nbsp&nbsp&nbsp&nbsp</option><br>
	<option value="NO">NO</option>
	</select></td>
	<td><textarea name="IWS_2" rows="8" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="IWS_3" rows="8" cols="30" wrap="hard" required></textarea></td>
  </tr> <tr>
    <td>11</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Resource material available to students</p></td> 
    <td><select name="RMATS" ><br>
	<option value="YES">YES&nbsp&nbsp&nbsp&nbsp&nbsp</option><br>
	<option value="NO">NO</option>
	</select></td>
	<td><textarea name="RMATS_2" rows="4" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="RMATS_3" rows="4" cols="30" wrap="hard" required></textarea></td>
  </tr> <tr>
    <td>12</td>
    <td><p style=" font-family:Montserrat ; color: darkblue;">Curriculum gaps are communicated to University authority.</p > </td> 
    <td><select name="CGATUA" ><br>
	<option value="YES">YES&nbsp&nbsp&nbsp&nbsp&nbsp</option><br>
	<option value="NO">NO</option>
	</select></td>
	<td><textarea name="CGATUA_2" rows="6" cols="30" wrap="hard" required></textarea></td>
	<td><textarea name="CGATUA_3" rows="6" cols="30" wrap="hard" required></textarea></td>
	 </tr>

</table>
<p align=center style="color:red;">* For justification supporting documents need to be produced	</p>
<br><p align=center >Audit done by:<input type=text name="AuditBy" required></p>
<br><p align=center>Date:<input type=date name="Date" required></p>
<br><p align=center>Signature:<input type=text name="sign" ></p>
<p align="center">	
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<script language="javascript" src="list.js"></script>
</body> 
<input type="submit" name="submit" value="Submit" > </p>
  </form>

</html><?php
	$con=mysqli_connect("localhost","root","","newdb");
	
// Check connection
    if (mysqli_connect_errno($con)) {
        echo "MySQL database connection failed: " . mysqli_connect_error();
    }

//CHECKING SUBMIT BUTTON PRESS or NOT.
	if(isset(  $_POST["dept"]) && $_POST["SubCat"] && $_POST["AcadYear"] && $_POST["Name"] && $_POST["Category"] && $_POST["CPAE"] && $_POST["ROTM"]&& $_POST["MCWPAP"] && $_POST["EDM"] && $_POST["CBS"] && $_POST["QOUQP"] && $_POST["CFANDHOD"] && $_POST["SP"] && $_POST["RCAFFA"] && $_POST["IWS"] && $_POST["RMATS"] && $_POST["CGATUA"] && $_POST["CPAE_2"] && $_POST["ROTM_2"]&& $_POST["MCWPAP_2"] && $_POST["EDM_2"] && $_POST["CBS_2"] && $_POST["QOUQP_2"] && $_POST["CFANDHOD_2"] && $_POST["SP_2"] && $_POST["RCAFFA_2"] && $_POST["IWS_2"] && $_POST["RMATS_2"] && $_POST["CGATUA_2"] && $_POST["CPAE_3"] && $_POST["ROTM_3"]&& $_POST["MCWPAP_3"] && $_POST["EDM_3"] && $_POST["CBS_3"] && $_POST["QOUQP_3"] && $_POST["CFANDHOD_3"] && $_POST["SP_3"] && $_POST["RCAFFA_3"] && $_POST["IWS_3"] && $_POST["RMATS_3"] && $_POST["CGATUA_3"] && $_POST["AuditBy"] && $_POST["Date"])
	{
	    $dept=$_POST["dept"]; $SubCat=$_POST["SubCat"]; $AcadYear=$_POST["AcadYear"]; $Name=$_POST["Name"];
        $Category=$_POST["Category"]; 
		$CPAE=$_POST["CPAE"]; $ROTM=$_POST["ROTM"];  $MCWPAP=$_POST["MCWPAP"];
        $EDM=$_POST["EDM"];  $CBS=$_POST["CBS"]; $QOUQP=$_POST["QOUQP"];  $CFANDHOD=$_POST["CFANDHOD"];
        $SP=$_POST["SP"];  $RCAFFA=$_POST["RCAFFA"]; $IWS=$_POST["IWS"];  $RMATS=$_POST["RMATS"];
        $CGATUA=$_POST["CGATUA"];  
		$CPAE_2=$_POST["CPAE_2"]; $ROTM_2=$_POST["ROTM_2"];  $MCWPAP_2=$_POST["MCWPAP_2"];
        $EDM_2=$_POST["EDM_2"];  $CBS_2=$_POST["CBS_2"];  $QOUQP_2=$_POST["QOUQP_2"];  $CFANDHOD_2=$_POST["CFANDHOD_2"];
        $SP_2=$_POST["SP_2"];  $RCAFFA_2=$_POST["RCAFFA_2"]; $IWS_2=$_POST["IWS_2"];  $RMATS_2=$_POST["RMATS_2"];
        $CGATUA_2=$_POST["CGATUA_2"]; 
		$CPAE_3=$_POST["CPAE_3"];  $ROTM_3=$_POST["ROTM_3"];  $MCWPAP_3=$_POST["MCWPAP_3"];
        $EDM_3=$_POST["EDM_3"];  $CBS_3=$_POST["CBS_3"]; $QOUQP_3=$_POST["QOUQP_3"];   $CFANDHOD_3=$_POST["CFANDHOD_3"];
        $SP_3=$_POST["SP_3"];  $RCAFFA_3=$_POST["RCAFFA_3"]; $IWS_3=$_POST["IWS_3"];  $RMATS_3=$_POST["RMATS_3"];
        $CGATUA_3=$_POST["CGATUA_3"];
		$AuditBy=$_POST["AuditBy"]; $Date=$_POST["Date"];
		
	
        
//INSERT QUERY
$sql1="INSERT INTO faculty(Dept,SubCat,Name,AcadYear,Category,AuditBy,Date) Values('" . $dept . "','" . $SubCat . "','" . $Name . "','" . $AcadYear . "','" . $Category . "','"  . $AuditBy . "','"  . $Date . "')";
	$con->query($sql1);
$sql2="SELECT f_id from faculty WHERE Name='". $Name ."'";
	$r=$con->query($sql2);
	/*while($row=mysqli_fetch_assoc($r))
	{*/
$row=$r->fetch_assoc();
	$fid=$row["f_id"];
	echo $fid;
$sql02="INSERT INTO facultyinput values('" . $fid . "',1,'" . $CPAE . "','" . $CPAE_2 . "','" . $CPAE_3 . "')";
$sql3="INSERT INTO facultyinput values('" . $fid . "',2,'" . $ROTM . "','" . $ROTM_2 .  "','" . $ROTM_3 . "')";
$sql4="INSERT INTO facultyinput values('" . $fid . "',3,'" . $MCWPAP . "','" . $MCWPAP_2 . "','" . $MCWPAP_3 . "')";
$sql5="INSERT INTO facultyinput values('" . $fid . "',4,'" . $EDM . "','" . $EDM_2 . "','" .$EDM_3 . "')";
$sql6="INSERT INTO facultyinput values('" . $fid . "',5,'" . $CBS . "','" . $CBS_2 . "','" . $CBS_3 . "')";
$sql7="INSERT INTO facultyinput values('" . $fid . "',6,'" . $QOUQP . "','" . $QOUQP_2 . "','" . $QOUQP_3 . "')";
$sql8="INSERT INTO facultyinput values('" . $fid . "',7,'" . $CFANDHOD . "','" . $CFANDHOD_2 . "','" . $CFANDHOD_3 . "')";
$sql9="INSERT INTO facultyinput values('" . $fid . "',8,'" . $SP . "','" . $SP_2 . "','" . $SP_3 . "')";
$sql10="INSERT INTO facultyinput values('" . $fid . "',9,'" . $RCAFFA . "','" . $RCAFFA_2 . "','" . $RCAFFA_3 . "')";
$sql11="INSERT INTO facultyinput values('" . $fid . "',10,'" . $IWS . "','" . $IWS_2 . "','" . $IWS_3 . "')";
$sql12="INSERT INTO facultyinput values('" . $fid . "',11,'" . $RMATS . "','" . $RMATS_2 . "','" . $RMATS_3 . "')";
$sql13="INSERT INTO facultyinput values('" . $fid . "',12,'" . $CGATUA  . "','" . $CGATUA_2 . "','" . $CGATUA_3 . "')";
	//}	
/*$con->query($sql02); $con->query($sql3); $con->query($sql4); $con->query($sql5);
 $con->query($sql6); $con->query($sql7); $con->query($sql8); $con->query($sql9);
 $con->query($sql10); $con->query($sql11); $con->query($sql12);
 */
    if(mysqli_query($con,$sql02) && mysqli_query($con,$sql3)&& mysqli_query($con,$sql4) && mysqli_query($con,$sql5)&& mysqli_query($con,$sql6)&& mysqli_query($con,$sql7)&& mysqli_query($con,$sql8)&& mysqli_query($con,$sql9)&& mysqli_query($con,$sql10)&& mysqli_query($con,$sql11)&& mysqli_query($con,$sql12)&& mysqli_query($con,$sql13)){
        echo "Record inserted successfully";
    }
	else
		echo mysqli_error($con);
	}
	
?> 