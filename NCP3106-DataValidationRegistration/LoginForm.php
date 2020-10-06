<?php

$lastName = $_POST['lastname']
$firstName = $_POST['firstname']
$middleInitial = $_POST['middleI']
$studentNumber = $_POST['studID']
$yearLevel = $_POST['yrlevel']
$birthDate = $_POST['']
$mobileNumber = $_POST['mobilenumber']
$ueMailAddress = $_POST['ueMailAddress']
$username = $_POST['username']
$passwordOrig = $_POST['password'];
$passwordRepeat = $_POST['confirmpassword']


if ($passwordOrig == $passwordRepeat ) {
		insertRecord($username,$emailAdd,$passwordOrig);
       
	}
	else {
		echo '<script>
  				alert("Passwrod Mismatch!");
					</script>';

		echo '<script>
				window.history.go(-1);
					</script>';
		}






function insertRecord($username,$email,$password) {
 try {
 require 'openDb.php';
     
  $sql = "INSERT INTO accountRegistration (username, email,  password) VALUES (?,?,?)";
     
     
  // use exec() because no results are returned 
     $conn->prepare($sql)->execute([$username,$email,$password]);


  echo '<script>
  				alert("Congratulations, you are now registered!");
					</script>';
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}

?>