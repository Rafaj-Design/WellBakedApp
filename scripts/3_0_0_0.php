<?
if (isset($_GET[action]) AND $_GET[action] == "delete" AND isset($_GET[id]) AND $_GET[id] != "" AND isset($_GET[confirmed]) AND $_GET[confirmed]=="1")
  {

    $query = "SELECT name FROM rc_modules WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
              }
          }
      }

    $query = "DELETE FROM rc_modules WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query); 
    if ($result)
      {
        $end_alert = "1";
        $php_config_id = "2";
        $yes_no = "OK";
      }
    else
      {
        $alert = "Error";
      }

    unset($result);
    unset($query);
  }

if (isset($_POST[add]) AND $_POST[add]=="1")
  {
    if ($_POST[modulename]!="Module name" AND $_POST[modulename]!="" AND IsSet($_POST[modulename]))
      {
        $query = "INSERT INTO rc_modules SET name = '".htmlspecialchars($_POST[modulename], ENT_QUOTES | UTF-8)."', project_id = '".$_GET[project_id]."'";
        $result = mysql_query($query);
        if ($result)
          {
            //$alert = "Module ".htmlspecialchars($_POST[name], ENT_QUOTES | UTF-8)." was added.";
          }
      }
  }




$query = "SELECT * FROM projects WHERE id = '".$_GET[project_id]."'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    if ($num_results > "0")
      {
        for ($i=0; $i <$num_results; $i++)
          {
            $row = mysql_fetch_array($result);
          }
      }
  }

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='3'><strong>".$row[name]." / Remote config / Modules</strong></td>
              </tr>";

$query = "SELECT * FROM rc_modules WHERE project_id = '".$_GET[project_id]."'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    if ($num_results > "0")
      {
        for ($i=0; $i <$num_results; $i++)
          {
            $row2 = mysql_fetch_array($result);
            echo "
              <tr>
                <td style='width: 350px;'>".$row2[name]."</td>
                <td ><a href='index.php?page=".$page_id."_".$page."&amp;alert=1&amp;id=".$row2[id]."&amp;script=".$_GET[script]."&amp;project_id=".$_GET[project_id]."&amp;php_config_id=1&amp;yes_no=Yes|No&amp;table_name=rc_modules'><button>Delete</button></a></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0&amp;company_id=".$_GET[company_id]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$row2[id]."'><button>Edit</button></a></td>
              </tr>";
          }
      }
  }

echo          "<form method = 'post' action = '#'>";

echo "        <tr>
                <td><br />";fastform('text', 'modulename', 'Module name');echo "</td>
                <td>&nbsp;</td>
                <td><br /><button name='add' value='1'>Add new module</button></td>
              </tr>";
echo "</form>";
echo "      </table>
            <div style='width: 70%; text-align: center;'>
              <br />";
back("3_0b");              
    echo "
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>