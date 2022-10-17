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
<title>Γενική Εργασία Εξαμήνου || Error</title>
</head>
<body>

<?php include 'header.php';?>

<br/>
<div  style="background-color:#DE8704;width:50%;margin:auto;">
<br/>
<br/>
<br/>
<br/>

<font color="#D2D42C">
<div class="zoom">
<b><u><div class="tcenter">ERROR 404</b></u>
<br/>
<br/>
<br/>



Please do not refresh this page.</br>
Press the button to be redirected back to the Login Page.</br>
Thank you.
<br/>
</div>
</div>
</font>

<br/>
<br/>
<br/>
<br/>
<a href="form.php" style="margin-left:auto;margin-right:auto;background-color:#222536;color:#D2D42C;"> Login Page </a>
<br/>
</div>
<br/><br/><br/>
<?php include 'footer.php' ?>

</body>
</html>