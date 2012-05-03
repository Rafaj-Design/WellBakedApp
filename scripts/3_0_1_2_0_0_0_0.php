<?
include("checker.php");

if ($_GET[action] == "save_all" AND isset($_GET[action]))
  {
    foreach ($_POST[translation] as $key => $val)
      {
        $query = "UPDATE lang_ver_jsons SET translation = '".$val."' WHERE id = '".$_POST[tran_id][$key]."'";
        $result = mysql_query($query);
        if (!isset($result_checker))
          {
            $result_checker = "0";
          }
        if ($result)
          {
          }
        else
          {
            $result_cheecker++;
          }
      }
    if ($result_checker == "0")
      {
        $end_alert = "1";
        $php_config_id = "5";
        $yes_no = "OK";
      }
    else
      {
        $alert = "Error";
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
                $project_name = $row[name];
              }
          }
      }

    $query = "SELECT * FROM lang_def_lang_set WHERE id = '".$_GET[lang_id_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $lang_name = $row[name];
              }
          }
      }

    $query = "SELECT * FROM lang_categories WHERE id = '".$_GET[category_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $category_name = $row[name];
              }
          }
      }

    $query = "SELECT * FROM lang_categories_vers WHERE id = '".$_GET[ver_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $maj_ver = $row[maj_ver];
                $min_ver = $row[min_ver];
              }
          }
      }
    $link =  "page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$_GET[category_id]."&amp;lang_id=".$_GET[lang_id]."&amp;lang_id_id=".$_GET[lang_id_id]."&amp;ver_id=".$_GET[ver_id];
    $script = "script=3_0_1_2_0_0_0_0";
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <form action='?".$link."&amp;".$script."&amp;action=save_all' method='post'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>".$project_name." / Translations / Other language / ".$lang_name." / ".$category_name." / v".$maj_ver.".".$min_ver."</strong><br />&nbsp;</td>
              </tr>
              <tr>
                <td><strong>Default language</strong></td>
                <td><strong>Tranlation to ".$lang_name." language</strong></td>
              </tr>";
    $query = "SELECT * FROM lang_ver_jsons WHERE ver_id = '".$_GET[ver_id]."' AND lang_id = '".$_GET[lang_id]."'";
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
                        <td>";fastform('text', 'translation[]', $row[translation]);echo "<input type='hidden' name='tran_id[]' value='".$row[id]."' /></td>
                      </tr>";
              }
          }
      }

echo "
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?".$link."&amp;script=3_0_1_2_0_0_0'><button>Cancel</button></a>&nbsp;&nbsp;&nbsp;<button type='submit'>Save</button>
            </div>
            </form>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>