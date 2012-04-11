<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='4'><strong>Project name / Translations / Other languages</strong></td>
              <tr>
                <td>";fastform('text', 'language1', 'Czech');echo "</td>
                <td>";fastform('text', 'languageid1', 'cz');echo "</td>
                <td><button onclick='alert(\"After confirmation will delete language.\");'>Delete</button></td>
                <td><a href='?page=3_0_1_2_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td>";fastform('text', 'language2', 'Deutsch');echo "</td>
                <td>";fastform('text', 'languageid2', 'de');echo "</td>
                <td><button onclick='alert(\"After confirmation will delete language.\");'>Delete</button></td>
                <td><a href='?page=3_0_1_2_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td>";fastform('text', 'language3', 'Other language');echo "</td>
                <td>";fastform('text', 'languageid3', 'xx');echo "</td>
                <td><button onclick='alert(\"Will add another language.\");'>Add</button></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=3_0_1'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";

?>