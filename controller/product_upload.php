<?php
session_start(); 
require_once('DBconnection.php'); 

//echo "fuck";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$pname=$conn->real_escape_string($_POST['pname']);
	$quantity=$conn->real_escape_string($_POST['quantity']);
	$price=$conn->real_escape_string($_POST['price']);
	if(empty($_POST['cName'])){
	$category = $conn->real_escape_string($_POST['prodtype']);}
	else{
		$qr = "SELECT MAX(Category) FROM product AS newCAT";
		$result=$conn->query($qr);
		$ara=$result->fetch_assoc();

		$numOfPreviousPost=$ara['MAX(Category)'];
		$category=$numOfPreviousPost+1;
		$cname = $conn->real_escape_string($_POST['cName']);
		
		$qr = "Insert into category(categorynumber, categoryname)"." values("."'".$category."'".","."'".$cname."'".")";
		if(!($conn->query($qr))){
			header('Location: ../contact.html');
		}
		
	}
	$includes = $conn->real_escape_string($_POST['includes']);
	$desc = $conn->real_escape_string($_POST['desc']);
	

	//echo "Email: ".$email.'\n';
	//echo "Author: ".$name.'\n';
	//echo "Blog: ".$blog.'\n';
	$qr="SELECT MAX(PID) FROM product AS newPId";
	$result=$conn->query($qr);
	$ara=$result->fetch_assoc();

	$numOfPreviousPost=$ara['MAX(PID)'];
	$PID=$numOfPreviousPost+1;
	echo "New post id is ".$PID." ";
	
	
	$numberOfFiles=sizeof($_FILES['file']['name']);
	if (!is_uploaded_file($_FILES['file']['tmp_name'][0])) 
	{
		echo "No file Uploaded  ";
		$numberOfFiles=1;
		$qr="Insert into product(PID,name,Quantity,Price,Category,Includes,description,File1)".
				" values("."'".$PID."'".","."'".$pname."'".","."'".$quantity."'".",".
				"'".$price."'".","."'".$category."'".","."'".$includes."'".","."'".$desc."'".",
				"."'"."./images/logo1.png"."'".")";
		//echo $qr;

		if($conn->query($qr))
			//echo "fuck";
			header('Location: ../about.html');
		else
			echo "error".$conn->error;
		exit();

	}
	//else
	$index=0;
	$target_dir="../uploads/";

	$dbFileArray=array();

	while ($index < $numberOfFiles) 
	{
		//$fileType=pathinfo($_FILES["file"]["name"][$index]);
		$fileName=$_FILES["file"]["name"][$index];
		$target_file=$target_dir."product".$PID."-".$fileName;
		$save_file="./uploads/"."product".$PID."-".$fileName;
		move_uploaded_file($_FILES["file"]["tmp_name"][$index], $target_file);

		$dbFileArray[$index]=$save_file;
		//echo "saved in db as ".$dbFileArray[$index]."\r\n";
		//echo "saved as".$target_file."\r\n";

		$index=$index+1;
	}

	$fileName=$_FILES["manual"]["name"];
	$target_file=$target_dir."product".$PID."-".$fileName;
	$save_file="./uploads/"."product".$PID."-".$fileName;
	move_uploaded_file($_FILES["manual"]["tmp_name"], $target_file);

	$dbFileArray[$index]=$save_file;
	//echo "saved in db as ".$dbFileArray[$index]."\r\n";
	//echo "saved as".$target_file."\r\n";
	$numberOfFiles= $numberOfFiles+1;

	$index=$index+1;

	$fileName=$_FILES["spec"]["name"];
	$target_file=$target_dir."product".$PID."-".$fileName;
	$save_file="./uploads/"."product".$PID."-".$fileName;
	move_uploaded_file($_FILES["spec"]["tmp_name"], $target_file);

	$dbFileArray[$index]=$save_file;
	//echo "saved in db as ".$dbFileArray[$index]."\r\n";
	//echo "saved as".$target_file."\r\n";
	$numberOfFiles= $numberOfFiles+1;




	$index=0;
	$serial=1;
	
	
	$qr="Insert into product(PID,name,Quantity,Price,Category,Includes,description,numberofFile";
	while ( $serial<=$numberOfFiles){
		$qr=$qr.",File".$serial;
		$serial=$serial+1;
	}
	
	$qr=$qr.")";

	

	$qr=$qr." values ("."'".$PID."'".","."'".$pname."'".","."'".$quantity."'".",".
				"'".$price."'".","."'".$category."'".","."'".$includes."'".","."'".$desc."'".","."'".$numberOfFiles."'";
				
	$index=0;
	while ( $index<$numberOfFiles){
		$qr=$qr.",'".$dbFileArray[$index]."'";
		$index=$index+1;
	}
	
	
	$qr=$qr.")";
	//echo $qr;
	if($conn->query($qr)==true)
		//echo "fuck";
		header('Location: ../index.php');
		//header('Location: ../waitingforblogapproval.php');
	else
		echo "error".$conn->error;
}
?>