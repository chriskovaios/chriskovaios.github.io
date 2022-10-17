<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Γενική Εργασία Εξαμήνου || Αρχική</title>
</head>
<body>

<?php
// if (isset($_SESSION['UserID'])){
	// echo $_SESSION['UserID']->UserID;
// }
?>

<?php include 'header.php';?>


<br/>
<div  style="background-color:#DE8704;width:50%;margin:auto;">
<br/>
<br/>
<br/>
<br/>
<br/>

<font color="#D2D42C">
<div class="zoom">
<b><u><div class="tcenter">IWSMR 2021</b></u>
<br/>
<br/>
<br/>



3rd International Workshop on Information Security </br>
Methodology and Replication Studies (IWSMR 2021)</br>
to be held in conjunction with
the 16th International Conference
on Availability, Reliability and Security</br>
<a class="lol center" href="http://www.ares-conference.eu">(ARES 2021 – http://www.ares-conference.eu)</a></br>
<br/>
</div>
</div>
</font>

<br/>
<br/>
<br/>
<br/>
<br/>
<script>
	function progrf(){
		// window.location.href = document.getElementById('progr').href;
		//document.write.innerHTML( "<?php include 'progrclick.php'; ?>" );
		
		var n = "<?php include 'progrclick.php'; ?>";
		document.getElementById("programa").innerHTML = n;
	}
</script>
<br/>
<?php
echo '<a href="#" onclick="progrf();return false;" id="progr" style="margin-left:auto;margin-right:auto;background-color:#222536;color:#D2D42C;"> Πρόγραμμα Συνεδρίου </a>'
?>
<br/>
</div>
<br/>
<?php 
// function progr(){
	// if ( isset($_SESSION["UserID"])) {
		// include 'progr.php';
	// }
	// else{
		// header("Location: signup.php");
		// exit();
	// }
// }
// progr();

// function progr() {
	// echo '<br/><br/><br/>';
	// include 'progr.php';
// }

// if ( isset($_SESSION["UserID"])) {
	// progr();
	// exit();
// }else{
	// echo 'filaraki elouses, kane login/sign up';
// }

?>

<b><p id="programa" class="tcenter" style="color:#222536;font-size:26px"></p></b>

<br/>
<br/>
<br/>
<br/>
<br/>
<?php include 'footer.php' ?>

</body>
</html>