<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='3'><strong>Project name / Remote config / Modules</strong></td>
              </tr>
              <tr>
                <td style='width: 350px;'>RSS feed</td>
                <td><button onclick='alert(\"Confirmation for deleting module and then deleting of module.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Weather</td>
                <td><button onclick='alert(\"Confirmation for deleting module and then deleting of module.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Tracks</td>
                <td><button onclick='alert(\"Confirmation for deleting module and then deleting of module.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Results</td>
                <td><button onclick='alert(\"Confirmation for deleting module and then deleting of module.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td><br />";fastform('text', 'modulename', 'Module name');echo "</td>
                <td>&nbsp;</td>
                <td><br /><button onclick='alert(\"Module was added.\");'>Add new module</button></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0b'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>