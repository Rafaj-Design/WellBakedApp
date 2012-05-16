<?
if (isset($_POST[action]) AND $_POST[action]=="add_word" AND $_POST[name]!="")
  {
    $query = "INSERT INTO lang_ver_jsons SET name = '".$_POST[name]."', dictionary = '1', ver_id = '".$_GET[ver_id]."', lang_id = '".$_GET[lang_id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND $_GET[action]=="delete" AND $_GET[id]!="" AND isset($_GET[id]) AND $_GET[confirmed]=="1")
  {
    $query = "DELETE FROM lang_ver_jsons WHERE id = '".$_GET[id]."'";
echo $query;
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

$query = "SELECT name FROM projects WHERE id = '".$_GET[project_id]."'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    for ($i=0; $i <$num_results; $i++)
      {
        $row = mysql_fetch_array($result);
        $project_name = $row[name];
      }      
  }

unset($row);
unset($query);
unset($result);
unset($num_results);

$query = "SELECT * FROM lang_categories_vers WHERE id = '".$_GET[ver_id]."'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    for ($i=0; $i <$num_results; $i++)
      {
        $row = mysql_fetch_array($result);
        $maj_ver = $row[maj_ver];
        $min_ver = $row[min_ver];
      }      
  }

unset($row);
unset($query);
unset($result);
unset($num_results);

$query = "SELECT name FROM lang_categories WHERE id = '".$_GET[category_id]."'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    for ($i=0; $i <$num_results; $i++)
      {
        $row = mysql_fetch_array($result);
        $category_name = $row[name];
      }      
  }

unset($row);
unset($query);
unset($result);
unset($num_results);

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>".$project_name." / Translations / Def. lang.: ".$_GET[lang_id]." / Cat: ".$category_name." / v".$maj_ver.".".$min_ver."</strong></td>
              </tr>";
    $query = "SELECT * FROM lang_ver_jsons WHERE ver_id = '".$_GET[ver_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results == "0")
          {
            echo "
              <tr>
                <td colspan='2'><center><strong>This dictionary is empty...</strong></center></td>
              </tr>";
          }
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "
                  <tr>
                    <td style='width: 350px;'>".$row[name]."</td>
                    <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_1_0_0_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$_GET[category_id]."&amp;lang_id=".$_GET[lang_id]."&amp;ver_id=".$_GET[ver_id]."&amp;action=delete&amp;alert=1&amp;php_config_id=1&amp;yes_no=Yes|No&amp;table_name=lang_ver_jsons'><button>Delete</button></a></td>
                  </tr>";
              }
          }
      }


    echo "    <form method = 'post' action = '?page=".$_GET[page]."&amp;script=3_0_1_1_0_0_0&amp;category_id=".$_GET[category_id]."&amp;ver_id=".$_GET[ver_id]."&amp;lang_id=".$_GET[lang_id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'>";
    echo "    <tr>
                <td><br />";fastform('text', 'name', '');echo "</td>
                <td><br /><button name='action' value='add_word'>Add word to main dictionary</button></td>
              </tr>                
              </form>";

    echo "
            </table>
            <div style='width: 70%; text-align: center;'>
              <br />"; back('3_0_1_1_0_0'); echo "
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>