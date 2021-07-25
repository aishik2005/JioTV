<?php

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING

# Here I Put Token which Available Publicly I Recommended Use Your Own Token Here 
# For Suppport @Avishkarpatil at Telegram or proavipatil@gmail.com



$jctBase = "cutibeau2ic";

$ssoToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiJlM2RkNzc0MS05YWQxLTQ2MDktYjhjMC05ZmJjMDFjZDAwNGEiLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjEwIiwiZGV2aWNlSWQiOm51bGwsImp0aSI6IjVjOTY3NTYxLWRkNGQtNGNkMS1hNDM2LTRhODhkZjIwYzAyNSIsImlhdCI6MTYyNzIwNzc2NX0.pWZEjDNuIOCEam2L_ynagktflAavNGzgToi8_wPfgfM"; #Change This with your SSOTOKEN 
function tokformat($str)
{
$str= base64_encode(md5($str,true));
return str_replace("\n","",str_replace("\r","",str_replace("/","_",str_replace("+","-",str_replace("=","",$str)))));
}
function generateJct($st, $pxe) 
{
 global $jctBase;
 return trim(tokformat($jctBase . $st . $pxe));
}
function generatePxe() {
return time() + 6000000;
}
function generateSt() {
global $ssoToken;
return tokformat($ssoToken);
}
function generateToken() {
$st = generateSt();
$pxe = generatePxe();
$jct = generateJct($st, $pxe);
return "?jct=" . $jct . "&pxe=" . $pxe . "&st=" . $st;
}

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING


echo generateToken();
?>
