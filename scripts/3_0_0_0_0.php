<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='3'><strong>";
    $query = "SELECT * FROM projects WHERE id = '".$_GET[project_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo $row[name];
              }
          }
      }
    echo "&nbsp;/&nbsp;Remote config&nbsp;/&nbsp;"; 
    $query = "SELECT * FROM rc_modules WHERE id = '".$_GET[module_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $module_name = $row[name];
                echo $row[name];
              }
          }
      }
    echo          " / Versions</strong></td>
              </tr>";
    $query = "SELECT * FROM rc_modules_vers WHERE module_id = '".$_GET[module_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo $row[name];
                if ($row[min_ver]=="")
                  {
                    $row[min_ver] = "0";
                  }
                if ($row[maj_ver]=="")
                  {
                    $row[maj_ver] = "0";
                  }
                echo "<tr>
                        <td style='width: 350px;'>".$module_name." v".$row[maj_ver].".".$row[min_ver]."</td>
                        <td><button onclick='alert(\"Confirmation for deleting module version and then deleting of module version.\");'>Delete</button></td>
                        <td><a href='?page=2_projects&amp;script=3_0_0_0_0_0'><button>Edit</button></a></td>
                        <td><button onclick='alert(\"Will publish JSON of this version and change status to Live.\");'>Publish</button></td>
                      </tr>";

              }
          }
      }


    echo "    <tr>
                <td style='width: 350px;'>RSS feed v1</td>
                <td><button onclick='alert(\"Confirmation for deleting module version and then deleting of module version.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0_0'><button>Edit</button></a></td>
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
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0_0'><button>Edit</button></a></td>
                <td><button onclick='alert(\"Will publish JSON of this version and change status to Live.\");'>Publish</button></td>
              </tr>
              <tr>
                <td style='width: 350px;'>RSS feed v4</td>
                <td><button onclick='alert(\"Confirmation for deleting module version and then deleting of module version.\");'>Delete</button></td>
                <td><a href='?page=2_projects&amp;script=3_0_0_0_0_0'><button>Edit</button></a></td>
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
              <br /><a href='?page=2_projects&amp;script=3_0_0_0'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>