<?php 
echo '<h1 align="middle" style="color:#222536;"><b>MENU</b></h1>
<br/>



<ul class="myul">
<li><a href="index.php" class="myli">Home</a></li>
<li><a href="info.php" class="myli">Info</a></li>
<li><a href="location.php" class="myli">Location</a></li>
<li><a href="speakers.php" class="myli">Speakers</a></li>
<li><a href="form.php" class="myli">Login</a></li>
</ul><br/>

<br/>
<hr color="#222536" style="height:4px;width:50%;"/>';

if (isset($_SESSION['UserID'])){
	echo "<div style='right:20px;bottom:29px;position:fixed;'>Welcome Back <u>" . $_SESSION['Username']->Username . '</u><a href="logout.php" style="right:0;bottom:0;position:fixed;" >Logout</a>' . " </div>";
	// echo "<div style='right:20px;bottom:29px;position:fixed;'>your UserID is: " . $_SESSION['UserID']->UserID . '<a href="logout.php" style="right:0;bottom:0;position:fixed;" >Logout</a>' . " </div>";
	}
?>