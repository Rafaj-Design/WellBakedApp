<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='4'><strong>Project name / Translations / Default language</strong></td>
              <tr>
                <td>Language</td>
                <td>";fastform('text', 'defaultlanguage', 'English');echo "</td>
                <td><button onclick='alert(\"Will save default language change.\");'>Save</button></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Language ID</td>
                <td>";fastform('text', 'defaultlanguageid', 'en');echo "</td>
                <td><button onclick='alert(\"Will save default language ID change.\");'>Save</button></td>
                <td>&nbsp;</td>
              <tr>
                <td colspan='3'><br /><strong>Categories:</strong></td>
              </tr>
              <tr>
                <td>Default</td>
                <td>&nbsp;</td>
                <td><button onclick='alert(\"Confirmation for deleting category and then deleting of category.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_1_1_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td>Weather</td>
                <td>&nbsp;</td>
                <td><button onclick='alert(\"Confirmation for deleting category and then deleting of category.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_1_1_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td>News</td>
                <td>&nbsp;</td>
                <td><button onclick='alert(\"Confirmation for deleting category and then deleting of category.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_1_1_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td>Add new category</td>
                <td>";fastform('text', 'translationcategory', 'New category');echo "</td>
                <td style='text-align: center;'><button onclick='alert(\"Will add new category.\");'>Add</button></td>
                <td>&nbsp;</td>
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