<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>Project name / Translations / Other language / Czech / Default / v2</strong><br />&nbsp;</td>
              <tr>
              <tr>
                <td><strong>Default language</strong></td>
                <td><strong>Tranlation to Czech language</strong></td>
              <tr>
                <td style='width: 350px;'>Save</td>
                <td>";fastform('text', 'translation1', 'Uložit');echo "</td>
              </tr>
              <tr>
                <td style='width: 350px;'>Cancel</td>
                <td>";fastform('text', 'translation2', 'Zrušit');echo "</td>
              </tr>
              <tr>
                <td style='width: 350px;'>OK</td>
                <td>";fastform('text', 'translation3', 'OK');echo "</td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0_1_2_0_0_0'><button>Cancel</button></a>&nbsp;&nbsp;&nbsp;<a href='?page=2_projects&amp;script=3_0_1_2_0_0_0'><button onclick='alert(\"Will save all changes.\");'>Save</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>