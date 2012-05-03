<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");

    echo "</div>
          <div id='content_container'>
            
            <div style='width: 450px; min-height: 150px; padding: 10px; border-radius: 15px; background-color: #f8f1e4; border: 1px solid #dcd3c2;'>";
echo "<br /><br />";


//gen_json($name, $value, $type, $carka)
gen_json($_GET[ver_id], "");
echo "<br /><br />";

//echo $json;
    echo "  </div>
            <br /><br />
            <br /><br />
            <br /><br />
            <br /><br />
            <br /><br />
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='3'><strong>Project name / Remote config / RSS feed / v4</strong></td>
              </tr>
              <tr>
                <td style='width: 30%;'><strong>Var (name / key)</td>
                <td style='width: 30%;'><strong>Value</td>
                <td style='width: 10%;'><button onclick='alert(\"Will add new row.\");'>Add</button></td>
              </tr>
              <tr>
                <td>";fastform('text', 'var1', 'var 1');echo "</td>
                <td>";fastform('text', 'value1', 'value 1');echo "</td>
                <td><button onclick='alert(\"Confirmation for deleting row and then deleting of row.\");'>Delete</button></td>
              </tr>
              <tr>
                <td>";fastform('text', 'var2', 'var 2');echo "</td>
                <td>";fastform('text', 'value2', 'value 2');echo "</td>
                <td><button onclick='alert(\"Confirmation for deleting row and then deleting of row.\");'>Delete</button></td>
              </tr>
              <tr>
                <td>";fastform('text', 'var3', 'var 3');echo "</td>
                <td>";fastform('text', 'value3', 'value 3');echo "</td>
                <td><button onclick='alert(\"Confirmation for deleting row and then deleting of row.\");'>Delete</button></td>
              </tr>
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0_0_0_0'><button onclick='alert(\"Version v4 was saved.\");'>Save</button></a>&nbsp;&nbsp;&nbsp;<a href='?page=2_projects&amp;script=3_0_0_0_0'><button>Cancel</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>