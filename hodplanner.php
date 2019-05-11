

<html>
<head>
<title>HOD</title>

<!--meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"-->
		
		
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>

		<script src="layout/scripts/jquery.min.js"></script>
		<script src="layout/scripts/jquery.backtotop.js"></script>
		<script src="layout/scripts/jquery.mobilemenu.js"></script>
		<script src="layout/scripts/jquery.flexslider-min.js"></script>
		
		
		
		
<!--style>
 
ul {
	
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
	
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
	
	display: inline-block;
   
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}


</style-->
<style>
	.row td {
		background-color: white;
		font-size:17px;
		font-family:Montserrat ;
		color:darkblue;
		align:center;
	}
</style>
		
</head>





<body id="top">
<div class="wrapper row1" align="center">
  <header id="header" class="hoc clear"> 
    <div >
      <p align="center" style="font-size:30px;font-family:sans-serif ; color:white; "><img src="images/demo/fcritlogo.png" style="width:150px; height:100px; background:none !important;border: none !important;"/>FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</a></p>
    </div>
   </header>
</div>
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
       <div class="container-fluid">
 
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    
      <li><a href="planner.php" style="font-size:18px;font-family:Montserrat ; color:darkblue;">Home</a></li>
      <li><a href="index.php"style="font-size:18px;font-family:Montserrat; color:darkblue;">Qualitative Analysis</a></li>
     
   

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}




$sql = "SELECT lec,fac,sub FROM teaching_planar";
$result = mysqli_query($conn, $sql);
$number = mysqli_num_rows($result);
//print_r(mysqli_fetch_assoc($result));exit;
if (mysqli_num_rows($result) > 0) 
{
	
	?>
    
    

  
  <li class="pull-right">
  
    <a class="drop" href="#">Notifications<div style="color:white;background-color:red;border-radius:8px;width:16px;text-align:center;float:right;right:+1px;position:relative;top:-10px;"><?php echo "<b>". $number."</b>"; ?></div></a>
	
	
	
	<ul>
    <!--div class="dropdown-content"-->
    <?php 
	while($row = mysqli_fetch_assoc($result)) 
	{
	$lec = $row["lec"];
	$fac = $row["fac"];
	$sub = $row["sub"];
	//echo "<script>alert('Hello');</script>";
	echo "<li><a href='?fac=".$fac."'><b> Lecture no  - " . $lec . " - " .  $fac ." - " .  $sub ."</b></a></li>"; 
	
	}
	
	?>
      
    <!--/div-->
	</ul>
  </li>

     	 
    <?php 
	
	}
 
else 
{
	?>
	
	
  <li class="pull-right">
  
    <a class="drop" href="#" >Notifications<div style="color:white;background-color:red;border-radius:8px;width:16px;text-align:center;float:right;right:+1px;position:relative;top:-10px;"><?php echo "<b>0</b>"; ?></div></a>
	<ul>
    <!--div class="dropdown-content"-->
<?php echo "<li><a href=\"#\">No Unseen Notifications</a></li>";}?>
	
	 <!--/div-->
	 </ul>
  </li>
 </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<div id="table-hod">
	<?php
		if(!empty($_GET["fac"])) {
			$fac=$_GET["fac"];
			$sql="select id,lec,contcov,contncov,ref,meth,mapp,remarks,verified from teaching_planar where fac='$fac'";
			$result = mysqli_query($conn, $sql);
	?>
	<form method="post">
	<table style="width:50%;" border="4" align="center" id="datatable">
		<thead>
			<tr class="row">
				<td> <b>Lecture no  </td>
				<td><b> Content to be covered   </td>
				<td><b>Content not covered as per plan </td>
				<td><b> Reference </td>
				<td><b> Methodology used </td>
				<td><b> Mapping to CO </td>
				<td><b> Remarks by  faculty</td>
				<td> <b> Verified By HOD As per Staff input</b></td>
			</tr>
		</thead>
		<?php
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
			?>
		<tr class="row">
			<td><?php echo $row["lec"]; ?></td>
			<td><?php echo $row["contcov"]; ?></td>
			<td><?php echo $row["contncov"]; ?></td>
			<td><?php echo $row["ref"]; ?></td>
			<td><?php echo $row["meth"]; ?></td>
			<td><?php echo $row["mapp"]; ?></td>
			<td><?php echo $row["remarks"]; ?></td>
			<td>
				<?php 
					if($row["verified"]==1)
						echo "Verified";
					else
						echo "<input type='checkbox' name='".$row["id"]."' />";
				?>
			</td>
		</tr>
				<?php }}?>
	</table>
	<input type='submit' value='verify' style="position: relative; left: 50%; right: 50%; bottom: 0%;" align="centre"/></form>
	
		<?php }?>
</div>
</body>
<?php
	if(!empty($_POST)) {
		foreach($_POST as $key => $value) {
			$q="update teaching_planar set verified=1 where id='$key'";
			mysqli_query($conn, $q);
		}
		echo "<meta http-equiv='refresh' content='0'>";
	}
mysqli_close($conn);
?>
</html>