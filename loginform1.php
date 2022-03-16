<?php
	
//include("connect.php");

if(isset($_POST['login'])) {
	$sql = mysqli_query($conn,
	"SELECT * FROM REGISTER WHERE MatricNumber='"
	. $_POST["MatricNumber"] . "' AND
	password='" . $_POST["password"] . "' ");

	$num = mysqli_num_rows($sql);

	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("location:check.php");
		exit();
	}
	else {
?>
<hr>
<font color="red"><b>
		<h3>Sorry Invalid Username and Password<br>
			Please Enter Correct Credentials</br></h3>
	</b>
</font>
<hr>

<?php
	}
}
?>