<?
if ($_GET[script]=="" OR !IsSet($_GET[script]))
  {
    if (IsSET($_GET[page]) AND $_GET[page]=="2_projects")
    $_GET[script] = "3_0a";
  }

include("scripts/".$_GET[script].".php");
?>