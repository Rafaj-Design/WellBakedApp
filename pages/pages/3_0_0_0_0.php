<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='3'><strong>Project name / Remote config / RSS feed / Versions</strong></td>
              </tr>
              <tr>
                <td style='width: 350px;'>RSS feed v1</td>
                <td><button onclick='alert(\"Confirmation for deleting module version and then deleting of module version.\");'>Delete</button></td>
                <td><a href='?page=3_0_0_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Will publish JSON of this version and change status to Live.\");'>Publish</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>RSS feed v2</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style='text-align: center;'><strong>LIVE</strong></td>
              </tr>
              <tr>
                <td style='width: 350px;'>RSS feed v3</td>
                <td><button onclick='alert(\"Confirmation for deleting module version and then deleting of module version.\");'>Delete</button></td>
                <td><a href='?page=3_0_0_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Will publish JSON of this version and change status to Live.\");'>Publish</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>RSS feed v4</td>
                <td><button onclick='alert(\"Confirmation for deleting module version and then deleting of module version.\");'>Delete</button></td>
                <td><a href='?page=3_0_0_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Will publish JSON of this version and change status to Live.\");'>Publish</button></td>
              </tr>
              <tr>
                <td><br />Add new version</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style='text-align: center;'><br /><button onclick='alert(\"Module version was added.\");'>Add</button></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=3_0_0_0'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>