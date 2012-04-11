<?
//$page = $_GET[page];
echo "<div>";
echo $page; 
echo "</div>";

if ($page != "" AND $page != "0_0" AND $page != "0_1" AND $page != "0_1a")
  {
    include("pages/top_menu.php");
  }

if ($page == "" OR $page == "0_0")
  {
    include("pages/0_0.php");
  }
else
  {
    include("pages/".$page.".php");
  }


?>