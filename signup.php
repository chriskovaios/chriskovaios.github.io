<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost:3308";
$username = "root";
$password = "1234";
$dbname = "genikiergasia";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Έλεγχος σύνδεσης
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");

if ( isset($_POST['firstname']) ){
	$onoma = $_POST['firstname'];
	}
@$eponimo = $_POST['lastname'];
@$filo = $_POST['filo'];
@$email = $_POST['firstname'];
@$til = $_POST['phone'];
@$username = $_POST['username'];
@$pass = $_POST['pass'];
@$pass = md5($pass);

if ( !isset($_POST['notif']) ) { $notif = '0'; }
else {
	$notif = $_POST['notif'];
}

//Δημιουργία ερωτήματος
@$sql = "INSERT INTO `users`( `Onoma`, `Eponimo`, `Filo`, `Email`, `Tilefono`, `Username`, `Password`, `Notifications`) VALUES 
( '$onoma' , '$eponimo' , '$filo' , '$email' , '$til' , '$username' , '$pass' , '$notif' )";

//εκτέλεση ερωτήματος στη βάση
if ( @$onoma=='' )
	{ 
		include 'error.php'; 
	}
else{
		$result = mysqli_query($conn, $sql);
	}
//έλεγχος αποτελεσμάτων
if (@$result) {
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
include 'aproove1.php';
include 'header.php';
include 'aproove2.php';
include 'footer.php';
echo '</body></html>';
}

//κλείσιμο σύνδεσης
mysqli_close($conn);
?>
