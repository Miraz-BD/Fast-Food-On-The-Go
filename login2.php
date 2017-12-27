<?php


if (isset($_POST["username"])){
    $name = $_POST["username"];
    $pass = $_POST["password"];
    
    echo $name;
    //echo $pass;
    
    
    $query = "SELECT user_Pass FROM user_info WHERE user_Name = $name";
        
    echo $query;
    $db = mysqli_connect('localhost','root','','restaurant')
        or die('Error connecting to MySQL server.');
   
    $result = mysqli_query($db, $query) or die('Error querying database.');
   while ($row = mysqli_fetch_assoc($result)) {
            
            if($row['user_Pass'] == $pass){
                
            }
       else{
           
           echo " window.location.href='./login.html";
           
       }
        }
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>FAST FOOD ON-THE-GO</title>
<meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
div#container
{
   width: 800px;
   position: relative;
   margin: 0 auto 0 auto;
   text-align: left;
}
body
{
   background-color: #EEEEEE;
   color: #000000;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   line-height: 1.1875;
   margin: 0;
   text-align: center;
}
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
#wb_Text6 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text6 div
{
   text-align: left;
}
#Layer4
{
   background-color: #0B497C;
   background: -moz-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: -webkit-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: -o-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: -ms-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
}
#wb_Text11 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: center;
}
#wb_Text11 div
{
   text-align: center;
}
#wb_CssMenu1
{
   border: 0px #DCDCDC solid;
   background-color: transparent;
}
#wb_CssMenu1 ul
{
   list-style-type: none;
   margin: 0;
   padding: 0;
}
#wb_CssMenu1 li
{
   float: left;
   margin: 0;
   padding: 0px 0px 0px 0px;
   width: 80px;
}
#wb_CssMenu1 a
{
   display: block;
   float: left;
   color: #696969;
   border: 0px #C0C0C0 solid;
   background-color: #F4F3F3;
   background: -moz-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -webkit-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -o-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -ms-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   font-family: Arial;
   font-weight: bold;
   font-size: 15px;
   font-style: normal;
   text-decoration: none;
   width: 70px;
   height: 70px;
   padding: 0px 5px 0px 5px;
   vertical-align: middle;
   line-height: 70px;
   text-align: center;
}
#wb_CssMenu1 li:hover a, #wb_CssMenu1 a:hover, #wb_CssMenu1 .active
{
   color: #696969;
   background-color: #B9B9B9;
   background: -moz-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -webkit-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -o-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -ms-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   border: 0px #C0C0C0 solid;
}
#wb_CssMenu1 li.firstmain
{
   padding-left: 0px;
}
#wb_CssMenu1 li.lastmain
{
   padding-right: 0px;
}
#wb_CssMenu1 br
{
   clear: both;
   font-size: 1px;
   height: 0;
   line-height: 0;
}
#wb_CssMenu2
{
   border: 0px #DCDCDC solid;
   background-color: transparent;
}
#wb_CssMenu2 ul
{
   list-style-type: none;
   margin: 0;
   padding: 0;
   width: 100%;
}
#wb_CssMenu2 li
{
   float: left;
   margin: 0;
   padding: 0px 0px 0px 0px;
   width: 100%;
}
#wb_CssMenu2 a
{
   display: block;
   color: #696969;
   border: 0px #C0C0C0 solid;
   background-color: #F4F3F3;
   background: -moz-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -webkit-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -o-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -ms-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   font-family: Arial;
   font-weight: bold;
   font-size: 15px;
   font-style: normal;
   text-decoration: none;
   width: 96.88%;
   height: 40px;
   padding: 0px 5px 0px 5px;
   vertical-align: middle;
   line-height: 40px;
   text-align: center;
}
#wb_CssMenu2 li:hover a, #wb_CssMenu2 a:hover, #wb_CssMenu2 .active
{
   color: #696969;
   background-color: #B9B9B9;
   background: -moz-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -webkit-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -o-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -ms-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   border: 0px #C0C0C0 solid;
}
#wb_CssMenu2 .firstmain a
{
   margin-top: 0px;
}
#wb_CssMenu2 li.lastmain
{
   padding-bottom: 0px;
}
#wb_CssMenu2 br
{
   clear: both;
   font-size: 1px;
   height: 0;
   line-height: 0;
}
#wb_CssMenu3
{
   border: 0px #DCDCDC solid;
   background-color: transparent;
}
#wb_CssMenu3 ul
{
   list-style-type: none;
   margin: 0;
   padding: 0;
}
#wb_CssMenu3 li
{
   float: left;
   margin: 0;
   padding: 0px 0px 0px 0px;
   width: 80px;
}
#wb_CssMenu3 a
{
   display: block;
   float: left;
   color: #696969;
   border: 0px #C0C0C0 solid;
   background-color: #F4F3F3;
   background: -moz-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -webkit-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -o-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -ms-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   font-family: Arial;
   font-weight: bold;
   font-size: 15px;
   font-style: normal;
   text-decoration: none;
   width: 70px;
   height: 70px;
   padding: 0px 5px 0px 5px;
   vertical-align: middle;
   line-height: 70px;
   text-align: center;
}
#wb_CssMenu3 li:hover a, #wb_CssMenu3 a:hover, #wb_CssMenu3 .active
{
   color: #696969;
   background-color: #B9B9B9;
   background: -moz-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -webkit-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -o-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -ms-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   border: 0px #C0C0C0 solid;
}
#wb_CssMenu3 li.firstmain
{
   padding-left: 0px;
}
#wb_CssMenu3 li.lastmain
{
   padding-right: 0px;
}
#wb_CssMenu3 br
{
   clear: both;
   font-size: 1px;
   height: 0;
   line-height: 0;
}
#Login1
{
   background-color: #FFFFFF;
   border-color:#CCCCCC;
   border-width:1px;
   border-style: solid;
   border-radius: 4px;
   color: #000000;
   border-spacing: 6px;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   text-align: left;
   width: 377px;
   height: 214px;
}
#Login1 td
{
   padding: 0;
}
#Login1 .header
{
   background-color: #878787;
   color: #FFFFFF;
   height: 16px;
   padding: 4px 4px 4px 4px;
   text-align: center;
}
#Login1 .label
{
   height: 16px;
}
#Login1 .row
{
   height: 30px;
   text-align: left;
}
#Login1 .input
{
   background-color: #FFFFFF;
   border-color: #CCCCCC;
   border-width: 1px;
   border-style: solid;
   border-radius: 2px;
   color: #000000;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   width: 100%;
   height: 30px;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   padding: 6px 4px 6px 4px;
}
#Login1 .input:focus
{
   border-color: #66AFE9;
   outline: 0;
   -webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.075), 0px 0px 8px rgba(102,175,233,0.60);
   -moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.075), 0px 0px 8px rgba(102,175,233,0.60);
   box-shadow: inset 0px 1px 1px rgba(0,0,0,0.075), 0px 0px 8px rgba(102,175,233,0.60);
}
#Login1 .button
{
   background-color: #3370B7;
   border-color: #2E6DA4;
   border-width: 1px;
   border-style: solid;
   border-radius: 3px;
   color: #FFFFFF;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   padding: 4px 14px 4px 14px;
}
#Line1
{
   border-width: 0;
   height: 11px;
   width: 793px;
}
@media only screen and (max-width: 799px)
{
div#container
{
   width: 320px;
}
#BuildWith1
{
   left: 732px !important;
   top: 22px !important;
   width: 62px !important;
   height: 31px !important;
   visibility: visible !important;
   display: inline !important;
}
#wb_Text6
{
   left: 26px !important;
   top: 14px !important;
   width: 269px !important;
   height: 37px !important;
   visibility: visible !important;
   display: inline !important;
   font-size: 8px;
   font-family: Arial;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
   background-color: transparent;
   background-image: none;
}
#wb_Text6
{
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;
}
#Layer4
{
   left: 0px !important;
   top: 1051px !important;
   height: 75px !important;
   visibility: visible !important;
   display: inline !important;
   font-size: 8px;
   font-family: Arial;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
   background-color: #0B497C;
   background: -moz-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: -webkit-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: -o-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: -ms-linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
   background: linear-gradient(bottom,#0B497C 0%,#1F5788 100%);
}
#Layer4
{
   width: 100%;
}
#Layer4_Container
{
   width: 320px !important;
}
#wb_Text11
{
   left: 15px !important;
   top: 20px !important;
   width: 282px !important;
   height: 32px !important;
   visibility: visible !important;
   display: inline !important;
   font-size: 8px;
   font-family: Arial;
   font-weight: normal;
   font-style: normal;
   text-decoration: none;
   background-color: transparent;
   background-image: none;
}
#wb_Text11
{
   margin: 0px 0px 0px 0px;
   padding: 0px 0px 0px 0px;
}
#wb_CssMenu1
{
   left: 318px !important;
   top: 0px !important;
   visibility: hidden !important;
   display: none !important;
}
#wb_CssMenu1 li
{
   width: 80px;
}
#wb_CssMenu1 a
{
   color: #696969;
   border: 0px #C0C0C0 solid;
   background-color: #F4F3F3;
   background: -moz-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -webkit-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -o-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -ms-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   font-family: Arial;
   font-weight: bold;
   font-size: 15px;
   font-style: normal;
   text-decoration: none;
   width: 70px;
   height: 70px;
   padding: 0px 5px 0px 5px;
   line-height: 70px;
}
#wb_CssMenu1 li:hover a, #wb_CssMenu1 a:hover, #wb_CssMenu1 .active
{
   color: #696969;
   background-color: #B9B9B9;
   background: -moz-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -webkit-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -o-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -ms-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   border: 0px #C0C0C0 solid;
}
#wb_CssMenu2
{
   left: 0px !important;
   top: 63px !important;
   width: 320px !important;
   height: 240px !important;
   visibility: visible !important;
   display: inline !important;
}
#wb_CssMenu2 li
{
   width: 100%;
}
#wb_CssMenu2 a
{
   color: #696969;
   border: 0px #C0C0C0 solid;
   background-color: #F4F3F3;
   background: -moz-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -webkit-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -o-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -ms-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   font-family: Arial;
   font-weight: bold;
   font-size: 15px;
   font-style: normal;
   text-decoration: none;
   width: 96.88%;
   height: 40px;
   padding: 0px 5px 0px 5px;
   line-height: 40px;
}
#wb_CssMenu2 li:hover a, #wb_CssMenu2 a:hover, #wb_CssMenu2 .active
{
   color: #696969;
   background-color: #B9B9B9;
   background: -moz-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -webkit-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -o-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -ms-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   border: 0px #C0C0C0 solid;
}
#wb_CssMenu3
{
   left: 318px !important;
   top: 0px !important;
   visibility: visible !important;
   display: inline !important;
}
#wb_CssMenu3 li
{
   width: 80px;
}
#wb_CssMenu3 a
{
   color: #696969;
   border: 0px #C0C0C0 solid;
   background-color: #F4F3F3;
   background: -moz-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -webkit-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -o-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: -ms-linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   background: linear-gradient(bottom,#F4F3F3 0%,#F4F3F3 100%);
   font-family: Arial;
   font-weight: bold;
   font-size: 15px;
   font-style: normal;
   text-decoration: none;
   width: 70px;
   height: 70px;
   padding: 0px 5px 0px 5px;
   line-height: 70px;
}
#wb_CssMenu3 li:hover a, #wb_CssMenu3 a:hover, #wb_CssMenu3 .active
{
   color: #696969;
   background-color: #B9B9B9;
   background: -moz-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -webkit-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -o-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: -ms-linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   background: linear-gradient(bottom,#B9B9B9 0%,#EEEEEE 100%);
   border: 0px #C0C0C0 solid;
}
}
</style>
</head>
<body>
<div id="container">

<div id="wb_Text6" style="position:absolute;left:12px;top:22px;width:269px;height:21px;z-index:2;">
<span style="color:#05467E;font-family:'Lucida Console';font-size:21px;"><strong>FASTFOOD ON-THE-GO</strong></span></div>
<div id="wb_CssMenu1" style="position:absolute;left:318px;top:0px;width:483px;height:70px;z-index:3;">
<ul>
<li class="firstmain"><a href="./index.html" target="_self" title="Home">Home</a>
</li>
<li><a href="./about_us.html" target="_self" title="About Us">About&nbsp;Us</a>
</li>
<li><a href="#" target="_self" title="Services">Services</a>
</li>
<li><a href="#" target="_self" title="Support">Support</a>
</li>
<li><a href="./contact.html" target="_self" title="Contact">Contact</a>
</li>
<li><a href="#" target="_self" title="Login">Login</a>
</li>
</ul>
</div>
<div id="wb_CssMenu2" style="position:absolute;left:0px;top:0px;width:320px;height:240px;visibility:hidden;z-index:4;">
<ul>
<li class="firstmain"><a href="./index.html" target="_self" title="Home">Home</a>
</li>
<li><a href="#" target="_self" title="About Us">About&nbsp;Us</a>
</li>
<li><a href="#" target="_self" title="Services">Services</a>
</li>
<li><a href="#" target="_self" title="Solutions">Solutions</a>
</li>
<li><a href="#" target="_self" title="Support">Support</a>
</li>
<li><a href="#" target="_self" title="Contact">Contact</a>
</li>
</ul>
</div>
<div id="wb_CssMenu3" style="position:absolute;left:318px;top:0px;width:483px;height:70px;z-index:6;">
<ul>
<li class="firstmain"><a href="./index.html" target="_self" title="Home">Home</a>
</li>
<li><a href="./reviews.html" target="_self" title="Reviews">Reviews</a>
</li>
<li><a href="./about_us.html" target="_self" title="About Us">About&nbsp;Us</a>
</li>
<li><a href="./support.html" target="_self" title="Support">Support</a>
</li>
<li><a href="./contact.html" target="_self" title="Contact">Contact</a>
</li>
<li><a class="active" href="./login.html" target="_self" title="Login">Login</a>
</li>
</ul>
</div>
<div id="wb_Login1" style="position:absolute;left:209px;top:178px;width:377px;height:214px;z-index:7;">
<form name="loginform" method="post" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Logged In</td>
</tr>
<tr>
   <td class="label"><label for="username">User Name</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>"></td>
</tr>
<tr>
   <td class="label"><label for="password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Log In" id="login"></td>
</tr>
</table>
</form>
</div>
<div id="wb_Line1" style="position:absolute;left:12px;top:66px;width:785px;height:3px;z-index:8;">
<img src="images/img0008.png" id="Line1" alt=""></div>
</div>
<div id="Layer4" style="position:absolute;text-align:center;left:0px;top:845px;width:100%;height:55px;z-index:9;">
<div id="Layer4_Container" style="width:800px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text11" style="position:absolute;left:7px;top:22px;width:780px;height:16px;text-align:center;z-index:0;">
<span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:11px;">Copyright © 2017 by &quot;Mirazur Rahman&quot;&nbsp; ·&nbsp; All Rights reserved&nbsp; ·&nbsp; E-Mail: mdmirazur@yahoo.com.sg</span></div>
</div>
</div>
</body>
</html>