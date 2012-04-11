<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='3'><strong>Project name / Translations / Def. lang.: en / Cat: Default / Versions</strong></td>
              <tr>
                <td style='width: 350px;'>Version 1</td>
                <td><a href='?page=2_projects&amp;script=3_0_1_1_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Confirmation for deleting category version and then deleting of category version.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Version 2</td>
                <td><a href='?page=2_projects&amp;script=3_0_1_1_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Confirmation for deleting category version and then deleting of category version.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Version 3</td>
                <td><a href='?page=2_projects&amp;script=3_0_1_1_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Confirmation for deleting category version and then deleting of category version.\");'>Delete</button></td>
              </tr>
              <tr>
                <td>Add new version</td>
                <td>&nbsp;</td>
                <td style='text-align: center;'><button onclick='alert(\"Will add new category version.\");'>Add</button></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0_1_1_0'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>