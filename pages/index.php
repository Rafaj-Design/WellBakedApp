<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <title>Well Baked Application</title>
    <style type="text/css">
    body {
      font-size: 16px;
      font-family: helvetica,arial;
      margin: 0;
      float: left;
      min-width: 100%;
      background-color: lightblue;
    }
    
    #header {
      color: #afafaf;
      font-size: 24px
      width: 100%;
      text-align: center;
      background: url('wba.png') repeat-x;
      height: 100px;
      display: block;
    }

    #header a {
      display: block;
      width: 100%;
      height: 100%;
    }
      
    .clear {
      margin: 0;
      padding: 0;
      line-height: 0px;
      width: 0px;
      height: 0px;
      font-size: 0px;
      clear: both;
    }

    #page {
      width: 980px; border-radius: 15px;
      background-color: pink;
      min-height: 350px;
      padding-top: 15px;
      padding-left: 15px;
      margin-left: auto;
      margin-right: auto;
      border: 2px solid white;
      background-image: linear-gradient(bottom, rgb(237,237,237) 41%, rgb(207,207,207) 86%);
      background-image: -o-linear-gradient(bottom, rgb(237,237,237) 41%, rgb(207,207,207) 86%);
      background-image: -moz-linear-gradient(bottom, rgb(237,237,237) 41%, rgb(207,207,207) 86%);
      background-image: -webkit-linear-gradient(bottom, rgb(237,237,237) 41%, rgb(207,207,207) 86%);
      background-image: -ms-linear-gradient(bottom, rgb(237,237,237) 41%, rgb(207,207,207) 86%);
      background-image: -webkit-gradient(
      	linear,
      	left bottom,
      	left top,
      	color-stop(0.41, rgb(237,237,237)),
      	color-stop(0.86, rgb(207,207,207))
      )
    }

    ul {
      margin: 0;
      padding: 0;
    }

    li.menu, li.menu-last {
      margin-right: 10px;
      float: left;
      border-radius: 5px;
      width: 120px;
      height: 30px;
      line-height: 30px;
      display: block;
      text-align: center;
      font-weight: bolder;
      border: 2px solid white;
      background-color: #1a82f7;
      background: url(images/linear_bg_2.png);
      background-repeat: repeat-x;
      background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0087bf), to(#00aaec));
      background: -webkit-linear-gradient(top, #00aaec, #0087bf);
      background: -moz-linear-gradient(top, #00aaec, #0087bf);
      background: -ms-linear-gradient(top, #00aaec, #0087bf);
      background: -o-linear-gradient(top, #00aaec, #0087bf);
      color: white;
    }

    li.menu-last {
      width: 430px;
    }
    
    li.menu a {
      text-decoration: none;
      color: white;
    }

    li.menu:hover {
      border: 2px solid #c1c1c1;
      background-color: #1a82f7;
      background-repeat: repeat-x;
      background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0080b2), to(#006791));
      background: -webkit-linear-gradient(top, #006791, #0080b2);
      background: -moz-linear-gradient(top, #006791, #0080b2);
      background: -ms-linear-gradient(top, #006791, #0080b2);
      background: -o-linear-gradient(top, #006791, #0080b2);
      color: #c1c1c1;
    }
    li.menu:hover a {
      color: white;
    }

    li.menu a:hover {
      color: white;
    }

    #left_menu {
      float: left;
      width: 150px;
    }
    
    #content {
      float: left;
      width: 800px;
      min-width: 800px;
      margin-top: 30px;
    }

    #left_menu li {
      list-style-type: none;
      width: 120px;
      height: 30px;
      line-height: 30px;
      display: block;
      text-align: center;
      font-weight: bolder;
      margin-top: 5px;
      border: 2px solid #004040;
      border-radius: 5px;
      background-color: #cfcfcf;
      background-repeat: repeat-x;
      background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#008ec6), to(#abe3fb));
      background: -webkit-linear-gradient(top, #abe3fb, #008ec6);
      background: -moz-linear-gradient(top, #abe3fb, #008ec6);
      background: -ms-linear-gradient(top, #abe3fb, #008ec6);
      background: -o-linear-gradient(top, #abe3fb, #008ec6);
      color: #004040;
      font-size: 14px
    }

    #left_menu li:hover {
      color: white;
      border: 2px solid white;
    }

    #left_menu li a:hover {
      color: white;
    }

    #left_menu li a {
      text-decoration: none;
      color: #004040;
      width: 100%;
      display: block;
    }

    #left_menu li.category_name {
      color: white;
      background-color: gray;
      background-repeat: repeat-x;
      background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(gray), to(gray));
      background: -webkit-linear-gradient(top, gray, gray);
      background: -moz-linear-gradient(top, gray, gray);
      background: -ms-linear-gradient(top, gray, gray);
      background: -o-linear-gradient(top, gray, gray);
      border: 2px solid white;
      width: 966px;
    }

    table {
      border-collapse: collapse;
    }

    table tr:hover {
      background-color: darkgray;
    }

    table tr td {
      border-bottom: 1px solid darkgray;
    }

    td.hide {
      color: darkgray;
    }
    </style>
  </head>

  <body>
  
<div id="header"><a href="http://staging.fuerteint.com/projects/wba/pages/index.php">&nbsp;</a></div>

<?
function fastform($type, $name, $value)
  {
    if ($type == "text")
      {
        echo "<input type='text' name='".$name."' value='".$value."' />";
      }

    if ($type == "password")
      {
        echo "<input type='password' name='".$name."' value='".$value."' />";
      }

    if ($type == "textarea")
      {
        echo "<textarea name='".$name."' style=''>".$value."</textarea>";
      }
  }

function callthepage($page)
  {
    include("pages.php");
  }

if (IsSet($_POST[page]) AND $_POST[page] != "")
  {
    $page = $_POST[page];
  }
elseif (IsSet($_GET[page]) AND $_GET[page] != "" AND (!IsSet($_POST[page]) OR $_POST[page]==""))
  {
    $page = $_GET[page];
  }
else
  {
    $page = "0_0";
  }


callthepage($page);
?>
  </body>
</html>
