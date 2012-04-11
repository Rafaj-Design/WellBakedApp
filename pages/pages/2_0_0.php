<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td style='width: 350px;'>Me</td>
                <td>&nbsp;</td>
                <td><a href='?page=2_0_0_1_0'><button>Profile</button></a></td>
              </tr>
              <tr>
                <td>Me (with admin rights)</td>
                <td>&nbsp;</td>
                <td><a href='?page=2_0_0_1_1'><button>Profile</button></a></td>
              </tr>
              <tr>
                <td>User</td>
                <td>&nbsp;</td>
                <td><a href='?page=2_0_0_1_2'><button>Profile</button></a></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>User (with admin rights)</td>";
//                <td><a href='?page=2_0_0_1_4'><button>Delete</button></a></td>
echo "          <td><button onclick='alert(\"Confirmation for deleting user and then deleting of user.\");'>Delete</button></td>
                <td><a href='?page=2_0_0_1_3'><button>Profile</button></a></td>
              </tr>
            </table>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>