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


//$result = mysqli_query($conn, $sql);

//έλεγχος αποτελεσμάτων

          $username = $_POST['username'];
          $pass = $_POST['lpass'];
          $pass = md5($pass);
          $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$pass'";
          //$results = $conn->query($sql);
		  $result = mysqli_query($conn, $sql);
          if ($result) {
            if ($result->num_rows === 0) {
              header("Location:form.php");
              exit();
            } else {
                if ($obj = $result->fetch_object()) {
                  if ($obj->Username==$username) {
                    $sql ="SELECT UserID FROM users WHERE Username='$username' AND Password='$pass'";
					$result = mysqli_query($conn, $sql);
					$objid = $result->fetch_object();
					$_SESSION["UserID"] = $objid; // δεν χρειάζεται να καλέσουμε το UserID ως string, διότι μας αρκεί το να έχει μία οποιαδήποτε τιμή η μεταβλητή.
					$_SESSION["Username"] = $obj;
                    header("Location:index.php");
                    exit();
                  }
				  else{
						header("Location:form.php");
						exit();
					}
                }
            }
          }

//κλείσιμο σύνδεσης
mysqli_close($conn);
?>
