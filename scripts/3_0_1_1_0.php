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

if (isset($_POST[action]) AND $_POST[action]=="change_def_lang" AND $_POST[name]!="")
  {
    $query = "UPDATE lang_def_lang_set SET name = '".$_POST[name]."' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
  }

if (isset($_POST[action]) AND $_POST[action]=="change_def_lang_id" AND $_POST[lang_id]!="")
  {
    $query = "UPDATE lang_def_lang_set SET lang_id = '".$_POST[lang_id]."' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
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

$query = "SELECT * FROM lang_def_lang_set WHERE project_id = '".$_GET[project_id]."' AND default_lang = '1'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    if ($num_results == "0")
      {
        $query = "INSERT INTO lang_def_lang_set SET name = 'English', lang_id = 'en', default_lang = '1', project_id = '".$_GET[project_id]."'";
        $result = mysql_query($query);

        $query = "SELECT * FROM lang_def_lang_set WHERE project_id = '".$_GET[project_id]."'";
        $result = mysql_query($query);

        if ($result)
          {
            $num_results = mysql_num_rows($result);
          }
      }
    if ($num_results > 0)
      {
        for ($i=0; $i <$num_results; $i++)
          {
            $row = mysql_fetch_array($result);
            $lang_id = $row[lang_id];
          }      
      }
  }

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='4'><strong>".$project_name." / Translations / Default language</strong></td>
              </tr>";
    echo "    <form method = 'post' action = '?page=".$_GET[page]."&amp;script=3_0_1_1_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'>";
    echo "    <tr>
                <td>Default language</td>
                <td><br />";fastform('text', 'name', $row[name]);echo "</td>
                <td><br /><button name='action' value='change_def_lang'>Save</button></td>
                <td>&nbsp;</td>
              </tr>                
              </form>";
    echo "    <form method = 'post' action = '?page=".$_GET[page]."&amp;script=3_0_1_1_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'>";
    echo "    <tr>
                <td>Default language ID</td>
                <td><br />";fastform('text', 'lang_id', $row[lang_id]);echo "</td>
                <td><br /><button name='action' value='change_def_lang_id'>Save</button></td>
                <td>&nbsp;</td>
              </tr>                
              </form>
                <td colspan='4'><br /><strong>Categories:</strong></td>
              </tr>";

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
                        <td colspan='2'>".$row[name]."</td>
                        <td>&nbsp;</td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_1_0_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$row[id]."&amp;lang_id=".$lang_id."'><button>Edit</button></a></td>
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
                        <td colspan='2'>".$row[name]."</td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_1_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;action=delete&amp;alert=1&amp;php_config_id=1&amp;yes_no=Yes|No&amp;table_name=lang_categories'><button>Delete</button></a></td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_1_0_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$row[id]."&amp;lang_id=".$lang_id."'><button>Edit</button></a></td>
                      </tr>";
              }
          }
      }
echo "<form method = 'post' action = '?page=".$_GET[page]."&amp;script=3_0_1_1_0&amp;id=".$row[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'>";
echo "        <tr>
                <td colspan='2'><br />";fastform('text', 'name', 'Category');echo "</td>
                <td colspan='2'><br /><button name='action' value='add'>Add new category</button></td>
              </tr>                
              </form>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0_1'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";

?>