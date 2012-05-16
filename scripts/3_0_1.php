<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>";
    
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

    echo "<div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>".$row[name]." / Translations</strong></td>
              <tr>
                <td style='width: 350px;'>Categories</td>
                <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_0&amp;id=".$_GET[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Default language</td>
                <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_1_0&amp;id=".$_GET[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Other languages</td>
                <td><a href='?page=".$_GET[page]."&amp;script=3_0_1_2_0&amp;id=".$_GET[id]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."'><button>Edit</button></a></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br />";
back("3_0b");              
    echo "</td>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>