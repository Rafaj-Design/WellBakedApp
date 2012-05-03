<?
if (isset($_POST[action]) AND $_POST[action] == "add_other_lang" AND $_POST[name] != "" AND isset($_POST[name]) AND isset($_POST[lang_id]) AND $_POST[lang_id] != "")
  {
    $query = "INSERT INTO lang_def_lang_set SET name = '".$_POST[name]."', lang_id = '".$_POST[lang_id]."', project_id = '".$_GET[project_id]."'";
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

if (isset($_GET[action]) AND $_GET[action]=="delete" AND $_GET[id]!="" AND isset($_GET[id]) AND $_GET[confirmed]=="1")
  {
    $query = "DELETE FROM lang_def_lang_set WHERE id = '".$_GET[id]."'";
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


    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='4'><strong>".$project_name." / Translations / Other languages</strong></td>
              </tr>";
    $query = "SELECT * FROM lang_def_lang_set WHERE project_id = '".$_GET[project_id]."' AND default_lang = '0'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > 0)
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<tr>
                        <td>".$row[name]."</td>
                        <td>".$row[lang_id]."</td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_2_0&amp;company=".$_GET[company]."&amp;project_id=".$_GET[project_id]."&amp;id=".$row[id]."&amp;action=delete&amp;alert=1&amp;php_config_id=1&amp;yes_no=Yes|No&amp;table_name=lang_def_lang_set'><button>Delete</button></a></td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_2_0_0&amp;company=".$_GET[company]."&amp;project_id=".$_GET[project_id]."&amp;lang_id=".$row[lang_id]."&amp;lang_id_id=".$row[id]."'><button>Edit</button></a></td>
                      </tr>";
              }      
          }
      }
/*
    echo "    <tr>
                <td>";fastform('text', 'language1', 'Czech');echo "</td>
                <td>";fastform('text', 'languageid1', 'cz');echo "</td>
                <td><button onclick='alert(\"After confirmation will delete language.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_1_2_0_0'><button>Edit</button></a></td>
              </tr>
*/
    echo "    <tr>
                <form action='?page=".$_GET[page]."&amp;script=".$_GET[script]."&amp;company=".$_GET[company]."&amp;project_id=".$_GET[project_id]."' method='post'>
                  <td>";fastform('text', 'name', 'Language');echo "</td>
                  <td>";fastform('text', 'lang_id', 'Language ID');echo "</td>
                  <td><button type='submit' name='action' value='add_other_lang'>Save</button></td>
                  <td>&nbsp;</td>
                  </form>                  
              </tr>
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