<font color="#D2D42C">
<div class="center" style="margin:auto;">

<form method="post" action="login.php">
<table border="7" width="500" class="mytable">
<tr bgcolor="#DE8704" class="spaceUnder">
	<td style="padding-top:14px;padding-left:12px;">Login</td>
	<td></td>
	<td width="315"></td><td width="20"></td>
</tr>
<tr class="spaceUnder">
<td></td>
</tr>
<tr class="spaceUnder">
	<td width="150" align="right">Username</td>
	<td width="15px"></td>
	<td><input type="text" style="width:35%" name="username" placeholder="" pattern="[A-Za-z]{2,8}" maxlength="20" autofocus required /></td>
</tr>
<tr class="spaceUnder">
	<td align="right">Password</td>
	<td></td>
	<td>
		<input type="password" style="width:35%" name="lpass" id="lpass" title="Εισάγετε μέχρι 8 χαρακτήρες" pattern="[A-Za-z]{1,8}" onchange="validatePassword()" required />
	</td>
</tr>
<tr class="spaceUnder">
<td></td>
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
	<button class="buttonB" style="float:right;margin-right:6px;width:100px;">Login</button>
	</label>
	</td>
	<td></td>
</tr>
</table>
</form>

</div>
</font>