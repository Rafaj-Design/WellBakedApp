<?
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

$query = "SELECT name FROM lang_def_lang_set WHERE id = '".$_GET[lang_id_id]."'";
$result = mysql_query($query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    for ($i=0; $i <$num_results; $i++)
      {
        $row = mysql_fetch_array($result);
        $lang_name = $row[name];
      }      
  }

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>".$project_name." / Translations / Other language / ".$lang_name." / Categories</strong></td>
              </tr>";
    $query = "SELECT * FROM lang_categories WHERE project_id = '".$_GET[project_id]."'";
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
                        <td style='width: 350px;'>".$row[name]."</td>
                        <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_2_0_0_0&amp;company=".$_GET[company]."&amp;project_id=".$_GET[project_id]."&amp;lang_id=".$_GET[lang_id]."&amp;lang_id_id=".$_GET[lang_id_id]."&amp;category_id=".$row[id]."'><button>Edit</button></a></td>
                      </tr>";

              }      
          }
        else
          {
            echo "<tr>
                    <td colspan='2'><center>Table is empty</center></td>
                  </tr>";
          }
      }
    echo   "</table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0_1_2_0'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>