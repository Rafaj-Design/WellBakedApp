<?
if (isset($_POST[action]) AND $_POST[action]=="add" AND $_POST[name]!="Category" AND $_POST[name]!="")
  {
    $query = "INSERT INTO lang_categories SET name = '".$_POST[name]."', project_id = '".$_GET[project_id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND $_GET[action]=="delete" AND $_GET[id]!="" AND isset($_GET[id]) AND $_GET[confirmed]=="1")
  {
    $query = "DELETE FROM lang_categories WHERE id = '".$_GET[id]."'";
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
                <td colspan='2'><strong>".$row[name]." / Translations / Categories</strong></td>";

    unset($row);
    unset($query);
    unset($result);
    unset($num_results);
    unset($i);

    $query = "SELECT * FROM lang_categories WHERE project_id = '".$_GET[project_id]."' AND name = 'Default'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results == "0")
          {
            $query = "INSERT INTO lang_categories SET name = 'Default', project_id = '".$_GET[project_id]."'";
            $result = mysql_query($query);
          }
        if ($num_results == "1")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<tr>
                        <td style='width: 350px;'>".$row[name]."</td>
                        <td>&nbsp;</td>
                      </tr>";

              }
          }
      }
    
    $query = "SELECT * FROM lang_categories WHERE project_id = '".$_GET[project_id]."' AND name != 'Default'";
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
                        <td style='width: 350px;'>".$row[name]."</td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;action=delete&amp;alert=1&amp;php_config_id=1&amp;yes_no=Yes|No&amp;table_name=lang_categories'><button>Delete</button></a></td>
                      </tr>";
              }
          }
      }

echo "<form method = 'post' action = '?page=".$_GET[page]."&amp;script=3_0_1_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'>";
echo "        <tr>
                <td><br />";fastform('text', 'name', 'Category');echo "</td>
                <td><br /><button name='action' value='add'>Add new category</button></td>
              </tr>                
              </form>
            </table>";


echo "
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=".$_GET[page]."&amp;script=3_0_1&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>