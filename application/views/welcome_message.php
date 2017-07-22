<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Workbythai-group1</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#submit").click(function(){
        $("#result").show();
    });
});
</script>
  
</head>
<body>
  <form class="sign-up">
    <h1 class="sign-up-title">Workbythai-group1</h1>
	<center>
    <input type="text" name="num1" style="text-align:right;" class="sign-up-input" placeholder="โปรดระบุตัวเลข" autofocus onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
	<span style="font-weight: bold; font-size: 120%;">&nbsp;&nbsp; ถึง &nbsp;&nbsp;</span>
    <input type="text" name="num2" style="text-align:right;" class="sign-up-input" placeholder="โปรดระบุตัวเลข" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
	</center>
    <input type="button" value="ตกลง" id="submit" class="sign-up-button">
  </form>
  <br><br><br>
  <div id="result" style="display: none;">
  <form class="sign-up">
    <h1 class="sign-up-title">ผลลัพธ์</h1>
	<center>
	<span style="font-weight: bold; font-size: 120%;"></span>
	</center>
  </form>
  </div>
  
</body>
</html>
