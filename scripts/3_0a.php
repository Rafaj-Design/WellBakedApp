
<?
/*
echo $_SERVER[QUERY_STRING]; // page=2_projects
echo "<br />";
echo $_SERVER[SCRIPT_NAME]; // /projects/wba/index.php
echo "<br />";
echo "delete: ".$_GET[id];
$adresa = explode("&",$_SERVER[QUERY_STRING]);
foreach ($adresa as $key => $val)
  {
    $adresa_polozky = explode("=",$val);
    if ($adresa_polozky[0] != "delete")
      {
        echo "<li>$key = $val</li>";
      }
  }
*/
/* TOHLE PAK ODSTRANIT, je to jen proto, aby tam ted bylo nejaky company_id, kdyz jeste nefunguje login */
$_GET[company_id] = "1";

if (isset($_GET[action]) AND $_GET[action] == "delete" AND isset($_GET[id]) AND $_GET[id] != "" AND isset($_GET[confirmed]) AND $_GET[confirmed]=="1")
  {

    $query = "SELECT name FROM projects WHERE id = '".$_GET[id]."' AND company_id = '".$_GET[company_id]."'";
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

    $query = "DELETE FROM projects WHERE id = '".$_GET[id]."'";
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
    if ($_POST[name]!="Project name" AND $_POST[name]!="" AND IsSet($_POST[name]))
      {
        $query = "INSERT INTO projects SET name = '".htmlspecialchars($_POST[name], ENT_QUOTES | UTF-8)."', archived = '0', company_id = '".$_GET[company_id]."'";
        $result = mysql_query($query);
        if ($result)
          {
            $alert = "Project ".htmlspecialchars($_POST[name], ENT_QUOTES | UTF-8)." was added.";
          }
      }
  }

if (isset($_POST[to_archive]) AND $_POST!="")
  {
    $query = "UPDATE projects SET archived = '1' WHERE id = '".$_POST[to_archive]."'";
    $resul = mysql_query($query);
  }

if (isset($_POST[to_active]) AND $_POST!="")
  {
    $query = "UPDATE projects SET archived = '0' WHERE id = '".$_POST[to_active]."'";
    $resul = mysql_query($query);
  }

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td style='width: 350px;'><strong>Sort alphabetically</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><strong>Sort by last update</strong></td>
              </tr>";
    if (!isset($_GET[order]) OR $_GET[order]=="")
      {
        $_GET[order] = "name";
      }
    $query = "SELECT * FROM projects WHERE archived = '0' ORDER BY '".$_GET[order]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<tr>
                        <td class='unhide'>".$row[name]."</td>
                        <td class='unhide'><a href='index.php?page=".$page_id."_".$page."&amp;alert=1&amp;id=".$row[id]."&amp;php_config_id=1&amp;yes_no=Yes|No&amp;company_id=".$_GET[company_id]."&amp;table_name=projects'><button>Delete</button></a></td>
                        <td class='unhide'><a href='?page=2_projects&amp;company_id=".$_GET[company_id]."&amp;script=3_0b&amp;id=".$row[id]."&amp;project_id=".$row[id]."'><button>Edit</button></a></td>
                        <td class='unhide'><form action='index.php?page=".$page_id."_".$page."&amp;company_id=".$_GET[company_id]."' method='post'><button name='to_archive' value='".$row[id]."'>Move to archived</button></form></td>
                        <td class='unhide'>".$row[last_update]."</td>
                      </tr>";
              }
          }
        else
          {
            $empty_list1 = "1";
          }      
      }
    $query = "SELECT * FROM projects WHERE archived = '1' ORDER BY '".$_GET[order]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<tr>
                        <td class='hide'>".$row[name]."</td>
                        <td class='hide'><a href='index.php?page=".$page_id."_".$page."&alert=1&company_id=".$_GET[company_id]."&amp;id=".$row[id]."&php_config_id=1&yes_no=Yes|No&table_name=projects'><button>Delete</button></a></td>
                        <td class='hide'><a href='?page=2_projects&amp;script=3_0b&amp;id=".$row[id]."&amp;company_id=".$_GET[company_id]."&amp;project_id=".$row[id]."'><button>Edit</button></a></td>
                        <td class='hide'><form action='index.php?page=".$page_id."_".$page."&amp;company_id=".$_GET[company_id]."' method='post'><button name='to_active' value='".$row[id]."'>Move to active</button></form></td>
                        <td class='hide'>".$row[last_update]."</td>
                      </tr>";
              }
          }      
        else
          {
            $empty_list2 = "1";
          }      
      }
    if ($empty_list1 == "1" AND $empty_list2 == "1")
      {
        echo "<tr><td colspan = '5'><center>List is empty!</center></td></tr>";
      }

echo "<form method = 'post' action = '#'>";
echo "        <tr>
                <td><br />";fastform('text', 'name', 'Project name');echo "</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><br /><button name='add' value='1'>Add new project</button></td>
                <td>&nbsp;</td>
              </tr>                
              </form>
            </table>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        ";
/*
if (isset($alert) AND $alert!="")
  {
    echo "<script language='JavaScript'>alert ('".$alert."')</script>";
  }
*/
?>