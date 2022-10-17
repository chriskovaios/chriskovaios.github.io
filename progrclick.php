<?php 
// function progr() {
	// echo '<br/><br/><br/>';
	// include 'progr.php';
// }

if ( isset($_SESSION["UserID"])) {
	// echo "μπορείτε να δείτε το πρόγραμμα <a href='programma.php'>εδώ</a>.";
	echo "<img class='zoom' src='img/p1.png' alt='programma eikona 1' style='width:644px;text-align:left;display:inline-block;'></img><br/>";
	echo "<img class='zoom' src='img/p2.png' alt='programma eikona 2' style='width:644px;text-align:left;display:inline-block;'></img><br/>";
	echo "<img class='zoom' src='img/p2.png' alt='programma eikona 3' style='width:644px;text-align:left;display:inline-block;'></img><br/>";
	echo "<img class='zoom' src='img/p2.png' alt='programma eikona 4' style='width:644px;text-align:left;display:inline-block;'></img><br/>";
	// progr();
	// include 'login.php';
	// header("Location: programa.php");
	//exit();
}else{
	echo "Πρέπει να κάνετε Login πριν δείτε αυτή τη σελίδα.<br/><a class='center' href='form.php'>Login</a>";
	// include "loginform.php";
	// header("Location: programama.php");
}

?>