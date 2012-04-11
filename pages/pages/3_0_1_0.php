<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>Project name / Translations / Categories</strong></td>
              <tr>
                <td style='width: 350px;'>Default</td>
                <td><button onclick='alert(\"Confirmation for deleting category and then deleting of category.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Weather</td>
                <td><button onclick='alert(\"Confirmation for deleting category and then deleting of category.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>News</td>
                <td><button onclick='alert(\"Confirmation for deleting category and then deleting of category.\");'>Delete</button></td>
              </tr>
              <tr>
                <td>";fastform('text', 'translationcategory', 'New category');echo "</td>
                <td style='text-align: center;'><button onclick='alert(\"Will add new category.\");'>Add</button></td>
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