<?
$query = "SELECT * FROM projects WHERE id = '".$_GET[id]."'";
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
                <td colspan='2'><strong>".$row[name]."</strong></td>
              <tr>
                <td style='width: 350px;'>Remote config</td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0&amp;id=".$_GET[id]."&amp;project_id=".$_GET[id]."&amp;company_id=".$_GET[company_id]."'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Translations</td>
                <td><a href='?page=2_projects&amp;script=3_0_1&amp;id=".$_GET[id]."&amp;project_id=".$_GET[id]."&amp;company_id=".$_GET[company_id]."'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Killswitch</td>
                <td><a href='?page=2_projects&amp;script=3_0_2_0&amp;id=".$_GET[id]."'><button>Edit</button></a></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0a'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>