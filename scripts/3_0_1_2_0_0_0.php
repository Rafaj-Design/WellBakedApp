<?
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
                $project_name = $row[name];
              }
          }
      }

    $query = "SELECT * FROM lang_def_lang_set WHERE id = '".$_GET[lang_id_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $language_name = $row[name];
              }
          }
      }

    $query = "SELECT * FROM lang_categories WHERE id = '".$_GET[category_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $category_name = $row[name];
              }
          }
      }


    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='2'><strong>".$project_name." / Translations / Other language / ".$language_name." / ".$category_name." / Versions</strong></td>
              </tr>";

    $query = "SELECT * FROM lang_categories_vers WHERE category_id = '".$_GET[category_id]."' AND archived = '0' ORDER BY maj_ver DESC, min_ver DESC";
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
                if ($row[status]=="1")
                  {
                    $status = "ver_staging";
                  }
                if ($row[status]=="2")
                  {
                    $status = "ver_live";
                  }
                if ($row[status]=="0")
                  {
                    $status = "ver_none";
                  }
                $link =  "page=".$_GET[page]."&amp;script=3_0_1_2_0_0_0_0&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$_GET[category_id]."&amp;lang_id=".$_GET[lang_id]."&amp;lang_id_id=".$_GET[lang_id_id];
                echo "<tr>
                        <td class='".$status."'>".$module_name." v".$row[maj_ver].".".$row[min_ver]."</td>
                        <td class='".$status."'><center><a href='?".$link."&amp;ver_id=".$row[id]."'><button>Edit</button></a></center></td>";
                echo "
                      </tr>";
                unset($adresa);
                unset($adresa_polozky);
                unset($link);
              }
          }
      }

    echo "<tr><td colspan='2'><br /><strong>Archive</strong></td></tr>";

    $query = "SELECT * FROM lang_categories_vers WHERE category_id = '".$_GET[category_id]."' AND archived = '1' ORDER BY maj_ver DESC, min_ver DESC";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                if ($row[status]=="1")
                  {
                    $status = "ver_staging";
                  }
                if ($row[status]=="2")
                  {
                    $status = "ver_live";
                  }
                if ($row[status]=="0")
                  {
                    $status = "ver_none";
                  }
                echo $row[name];
                if ($row[min_ver]=="")
                  {
                    $row[min_ver] = "0";
                  }
                if ($row[maj_ver]=="")
                  {
                    $row[maj_ver] = "0";
                  }
                $link =  "page=".$_GET[page]."&amp;script=3_0_1_2_0_0_0_0&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$_GET[category_id]."&amp;lang_id=".$_GET[lang_id]."&amp;lang_id_id=".$_GET[lang_id_id];
                echo "<tr class='hide'>
                        <td class='hide'>".$module_name." v".$row[maj_ver].".".$row[min_ver]."</td>
                        <td class='hide'><center><a href='?".$link."&amp;ver_id=".$row[id]."'><button>Edit</button></a></center></td>";
                echo "
                      </tr>";
                unset($adresa);
                unset($adresa_polozky);
                unset($link);

              }
          }
      }

/*
echo "        <tr>
                <td style='width: 350px;'>Version 1</td>
                <td><a href='?page=2_projects&amp;script=3_0_1_2_0_0_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Version 2</td>
                <td><a href='?page=2_projects&amp;script=3_0_1_2_0_0_0_0'><button>Edit</button></a></td>
              </tr>
              <tr>
                <td style='width: 350px;'>Version 3</td>
                <td><a href='?page=2_projects&amp;script=3_0_1_2_0_0_0_0'><button>Edit</button></a></td>
              </tr>";
*/
echo "
            </table>
            <div style='width: 70%; text-align: center;'>
              <br /><a href='?page=2_projects&amp;script=3_0_1_2_0_0'><button>Back</button></a>
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>