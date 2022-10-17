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
<title>Γενική Εργασία Εξαμήνου || Φόρμα Σύνδεσης/Εγγραφής</title>
</head>
<body>


<?php include 'header.php';?>

<br/>

<font color="#D2D42C">
<?php include 'loginform.php'; ?>

<br/>
<br/>

<div class="center" style="margin:auto;">

<form method="post" action="signup.php">
<table border="7" width="500" class="mytable">
<tr bgcolor="#DE8704" class="spaceUnder">
	<td style="padding-top:14px;padding-left:12px;">Φόρμα Εγγραφής</td>
	<td></td>
	<td width="315"></td><td width="20"></td>
</tr>
<tr class="spaceUnder">
	<td width="150" align="right">Όνομα</td>
	<td width="15px"></td>
	<td><input type="text" name="firstname" placeholder="Εισάγετε το όνομά σας" pattern="[A-Za-zΑ-Ωα-ωίϊΐόάέύϋΰήώΆΈΊΎΏΉΌΫΪ]{2,}" maxlength="40" required /></td>
</tr>
<tr class="spaceUnder">
	<td width="150" align="right">Επώνυμο</td>
	<td width="15px"></td>
	<td><input type="text" name="lastname" placeholder="Εισάγετε το επώνυμό σας" pattern="[A-Za-zΑ-Ωα-ωίϊΐόάέύϋΰήώΆΈΊΎΏΉΌΫΪ]{2,}" maxlength="40" required /></td>
</tr>
<tr class="spaceUnder">
	<td align="right"> </td>
	<td></td>
	<td> 
	<input type="radio" id="male" name="filo" value="Mr" selected="male" checked>
	<label for="male">Mr</label>
	<input type="radio" id="female" name="filo" value="Mrs" style="margin-left:15px;">
	<label for="female">Mrs</label>
	</td>
</tr>
<tr class="spaceUnder">
	<td align="right">E-mail</td>
	<td></td>
	<td>
		<input type="email" name="email" id="email" placeholder="Εισάγετε E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{3,}" required />
	</td>
</tr>
<tr class="spaceUnder">
	<td align="right">Τηλέφωνο</td>
	<td></td>
	<td>
		<input type="text" name="phone" id="phone" placeholder="Εισάγετε τηλέφωνο" pattern="[0-9]{1,10}" required />
	</td>
</tr>
<tr class="spaceUnder">
	<td width="150" align="right">Username</td>
	<td width="15px"></td>
	<td><input type="text" style="width:25%" name="username" title="Εισάγετε από 6 μέχρι 8 λατινικούς χαρακτήρες" placeholder="" pattern="[A-Za-z]{6,8}" maxlength="20" required /></td>
</tr>
<tr class="spaceUnder">
	<td align="right">Password</td>
	<td></td>
	<td>
		<input type="password" style="width:25%" name="pass" id="pass" title="Εισάγετε από 6 μέχρι 8 λατινικούς χαρακτήρες" pattern="[A-Za-z]{6,8}" onchange="validatePassword()" required />
	</td>
</tr>
<tr class="spaceUnder">
	<td align="right" style="line-height: 25px;">Confirm<br/>Password</td>
	<td></td>
	<td>
		<input type="password" name="cpass" id="cpass" title="Εισάγετε από 6 μέχρι 8 λατινικούς χαρακτήρες" pattern="[A-Za-z]{6,8}" onchange="validatePassword()" required />
	</td>
</tr>
<tr class="spaceUnder">
	<td align="right"></td>
	<td></td>
	<td>
		<input type="checkbox" id="notif" name="notif" value="1" /><font style="word-spacing:4px;letter-spacing:1px;line-height: 25px;">Συμφωνείτε να λαμβάνετε</br>ενημερωτικά email</font>
	</td>
</tr>
<tr bgcolor="#DE8704">
	<td style="padding-top:55px;padding-left:12px;"></td>
	<td>
	<input type="submit" id="submit-form" class="hidden" />
	<input type="reset" id="reset-form" class="hidden" />
	</td>
	<td width="315">
	<label for="reset-form" tabindex="0">
	<button class="buttonA" style="float:right;" formnovalidate >Ακύρωση</button>
	</label>
	<label for="submit-form" tabindex="0">
	<button class="buttonB" style="float:right;margin-right:6px;">Αποστολή</button>
	</label>
	</td>
	<td></td>
</tr>
</table>
</form>
</div>
</font>

<script src="confirmpassword.js"></script>


<br/>
<br/>
<br/>
<?php include 'footer.php' ?>

</body>
</html>