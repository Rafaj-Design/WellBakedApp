<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td style='width: 350px;'>Team 1 (with admin rights)</td>
                <td><a href='?page=2_0_1_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Form with team name field for renaming.\");'>Rename</button></td>
                <td><button onclick='alert(\"Confirmation for deleting team and after confirm it delete the team.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Team 2 (with admin rights)</td>
                <td><a href='?page=2_0_1_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Form with team name field for renaming.\");'>Rename</button></td>
                <td><button onclick='alert(\"Confirmation for deleting team and after confirm it delete the team.\");'>Delete</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Team 3 (with user rights only)</td>
                <td><a href='?page=2_0_1_1'><button>Edit</button></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
              <tr>
                <td style='width: 350px;'>Team 4 (with user rights only)</td>
                <td><a href='?page=2_0_1_1'><button>Edit</button></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>";fastform('text', 'teamname', 'Teamname');echo "</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><button onclick='alert(\"Team was added.\");'>Add</button></td>
              </tr>
            </table>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>