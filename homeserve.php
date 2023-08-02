<style>
h1 {text-align: center;}
</style>
<?php
	// if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['address'] ) || isset($_POST['District'] )|| isset($_POST['message'] ))   {
	$Name= $_POST['name'];
    $Email= $_POST['email'];
    $Phone= $_POST['phone'];
	$Address = $_POST['address'];
	$District=$_POST['District'];
	$Message=$_POST['message'];
	
	// Database connection
	$conn = new mysqli("localhost","root","","homeservice");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(name, email, phone, address, District, message) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisss",$Name, $Email, $Phone, $Address, $District, $Message);
		$execval = $stmt->execute();
		echo $execval;
		echo "<h1>successfully registered</h1> ";
		
		$stmt->close();
		$conn->close();
	}
	

	
	
?>



