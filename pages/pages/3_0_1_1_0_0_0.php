<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>Project name / Translations / Def. lang.: en / Cat: Default / v2</strong></td>
              <tr>
                <td style='width: 350px;'>News</td>
                <td><button onclick='alert(\"Confirmation for deleting word from dictionary and then deleting of word.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>OK</td>
                <td><button onclick='alert(\"Confirmation for deleting word from dictionary and then deleting of word.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Back</td>
                <td><button onclick='alert(\"Confirmation for deleting word from dictionary and then deleting of word.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Save</td>
                <td><button onclick='alert(\"Confirmation for deleting word from dictionary and then deleting of word.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Cancel</td>
                <td><button onclick='alert(\"Confirmation for deleting word from dictionary and then deleting of word.\");'>Delete</button></td>
              </tr>
              <tr>
                <td>";fastform('text', 'word6', 'Add word');echo "</td>
                <td><button onclick='alert(\"Will add new word to dictionary.\");'>Add</button></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=3_0_1_1_0_0'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>