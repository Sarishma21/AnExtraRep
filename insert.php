<?php
$host = "localhost" ;
$dbUusername = "root" ;
$Password = "" ;
$dbname = "inserts" ;

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname) ;

if(isset($_POST['Submit'])){

	if(!empty($_POST['Name']) &  & !empty($_POST['Age']) && !empty($_POST['Height']) && !empty($_POST['Weight']) && !empty($_POST['Goal'])){

		$Name = $_POST['Name'];
		$Age = $_POST['Age'];
		$Height = $_POST['Height'];
		$Weight = $_POST['Weight'];
		$Goal = $_POST['Goal'];

		$query = "insert into form(Name,Age,Height,Weight,Goal) values('$Name', '$Age', '$Height', '$Weight', '$Goal')" ;

		$run = mysqli_query($conn,$query) or die(mysql_error());

		if($run){
			echo "Form Submitted Succcessfully" ;
		}
		else{
			echo "Form not Submitted" ;
		}
	}
	else{
		echo "All Fields Required" ; 
	}
}

}
?>