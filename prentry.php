<?php 
  $action=$_POST["action"];
  if($action=="showmessage"){
	$sub=$_POST["sub"];
	$sem=$_POST["sem"];
	$q = "select lec,contcov,contncov,ref,meth,mapp,remarks,verified from teaching_planar where sem='$sem' AND sub='$sub';";
	$res=execq($q);
	$i=0;
	foreach($res as $key)
		$res1[$i++]=$key["lec"].",".$key["contcov"].",".$key["contncov"].",".$key["ref"].",".$key["meth"].",".$key["mapp"].",".$key["remarks"].",".$key["verified"];
	echo json_encode($res1);
  }
  else if($action=="addmessage")
  {
	  
	  //echo print_r($_POST);
	  if(isset($_POST["lec"]) && isset($_POST["contcov"]) && isset($_POST["contncov"])&& isset($_POST["ref"])&& isset($_POST["meth"])&& isset($_POST["mapp"])&& isset($_POST["remarks"])&& isset($_POST["fac"]))
	  {
		 $sub=$_POST["sub"];
	     $sem=$_POST["sem"];
         $fac=$_POST["fac"];	 
         $lec=$_POST["lec"];
		 $contcov=$_POST["contcov"];
		 $contncov=$_POST["contncov"];
		 $ref=$_POST["ref"];
		 $meth=$_POST["meth"];
		 $mapp=$_POST["mapp"];
         $remarks=$_POST["remarks"];
	 //echo "here";
     $sql="INSERT INTO teaching_planar(lec,contcov,contncov,ref,meth,mapp,remarks,sem,sub,fac) VALUES('" .$lec. "','" . $contcov. "','" .$contncov. "','" . $ref. "','" .$meth. "','" . $mapp. "','" .$remarks. "','" .$sem. "','" .$sub. "','" .$fac. "')";
	execq($sql);
  }
  }
	function execq($q){
		$pdo = new PDO("mysql:host=localhost:3306;dbname=newdb","root","");
		$sq = $pdo->prepare($q);
		$sq->execute();
		$qr = $sq->fetchAll(PDO::FETCH_ASSOC);
		return $qr;
	}
?>