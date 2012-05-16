<?
if (isset($_GET[action]) AND ($_GET[action]=="status_live" AND isset($_GET[id]) AND $_GET[id]!=""))
  {
    $query = "UPDATE lang_categories_vers SET status = '0' WHERE status = '2' AND category_id = '".$_GET[category_id]."'";
    $result = mysql_query($query);

    $query = "UPDATE lang_categories_vers SET status = '2' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND ($_GET[action]=="status_staging" AND isset($_GET[id]) AND $_GET[id]!=""))
  {
    $query = "UPDATE lang_categories_vers SET status = '0' WHERE status = '1' AND category_id = '".$_GET[category_id]."'";
    $result = mysql_query($query);

    $query = "UPDATE lang_categories_vers SET status = '1' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND ($_GET[action]=="status_none" AND isset($_GET[id]) AND $_GET[id]!=""))
  {
    $query = "UPDATE lang_categories_vers SET status = '0' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND ($_GET[action]=="to_archive"))
  {
    $query = "UPDATE lang_categories_vers SET archived = '1' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND ($_GET[action]=="from_archive"))
  {
    $query = "UPDATE lang_categories_vers SET archived = '0' WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
  }

if (isset($_GET[action]) AND ($_GET[action]=="add_minor" OR $_GET[action]=="add_major"))
  {
    $query = "SELECT * FROM lang_categories_vers WHERE category_id = '".$_GET[category_id]."' ORDER BY maj_ver, min_ver";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results == "0")
          {
            $min_ver = "0";
            $maj_ver = "0";
          }
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
              }
            $min_ver = $row[min_ver];
            $maj_ver = $row[maj_ver];
          }
        
      }
    if ($_GET[action]=="add_minor")
      {
        $min_ver++;
      }
    if ($_GET[action]=="add_major")
      {
        $min_ver = "0";
        $maj_ver++;
      }

    $query = "INSERT INTO lang_categories_vers SET maj_ver = '".$maj_ver."', min_ver = '".$min_ver."', category_id = '".$_GET[category_id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $end_alert = "1";
        $php_config_id = "4";
        $yes_no = "OK";
      }
    else
      {
        $end_alert = "1";
        $php_config_id = "3";
        $yes_no = "OK";
      }
  }

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td colspan='6'><strong>";
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

    echo "&nbsp;/&nbsp;Translations&nbsp;/&nbsp;Def. lang.: ".$_GET[lang_id]."&nbsp;/&nbsp;Cat:&nbsp;"; 
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
                $module_name = $row[name];
                echo $row[name];
              }
          }
      }
    echo          " / Versions</strong></td>
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
                $link = "page=".$_GET[page]."&amp;script=".$_GET[script]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$_GET[category_id]."&amp;lang_id=".$_GET[lang_id];
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
                echo "<tr>
                        <td class='".$status."' style='width: 300px;'>".$module_name." v".$row[maj_ver].".".$row[min_ver]."</td>
                        <td class='".$status."'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=to_archive&amp;id=".$row[id]."'><button>Move to archive</button></td>
                        <td class='".$status."'><center><a href='?page=2_projects&amp;project_id=".$_GET[project_id]."&amp;category_id=".$_GET[category_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$row[id]."&amp;script=3_0_1_1_0_0_0&amp;lang_id=".$_GET[lang_id]."'><button>Edit</button></a></center></td>
                        ";
                if ($row[status]!="1")
                  {
                    echo "<td class='".$status."'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=status_staging&amp;id=".$row[id]."'><button>Staging</button></a></td>&nbsp;";
                  }
                else
                  {
                    echo "<td class='".$status."'>&nbsp;</td>";
                  }
                if ($row[status]!="2")
                  {
                    echo "<td class='".$status."'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=status_live&amp;id=".$row[id]."'><button>Live</button></a></td>&nbsp;";
                  }
                else
                  {
                    echo "<td class='".$status."'>&nbsp;</td>";
                  }
                if ($row[status]!="0")
                  {
                    echo "<td class='".$status."'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=status_none&amp;id=".$row[id]."'><button>None</button></a></td>&nbsp;";
                  }
                else
                  {
                    echo "<td class='".$status."'>&nbsp;</td>";
                  }
                echo "
                      </tr>";
                unset($adresa);
                unset($adresa_polozky);
                unset($link);
              }
          }
      }

    echo "<tr><td colspan='6'><br /><strong>Archive</strong></td></tr>";

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
                $link = "page=".$_GET[page]."&amp;script=".$_GET[script]."&amp;project_id=".$_GET[project_id]."&amp;company_id=".$_GET[company_id]."&amp;category_id=".$_GET[category_id]."&amp;lang_id=".$_GET[lang_id];
                echo "<tr class='hide'>
                        <td class='hide' style='width: 300px;'>".$module_name." v".$row[maj_ver].".".$row[min_ver]."</td>
                        <td class='hide'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=from_archive&amp;id=".$row[id]."'><button>Move from archive</button></td>
                        <td class='hide'><center><a href='?page=2_projects&amp;project_id=".$_GET[project_id]."&amp;category_id=".$_GET[category_id]."&amp;company_id=".$_GET[company_id]."&amp;script=3_0_1_1_0_0_0&amp;ver_id=".$row[id]."&amp;lang_id=".$_GET[lang_id]."'><button>Edit</button></a></center></td>";
                        if ($row[status]!="1")
                          {
                            echo "<td class='hide'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=status_staging&amp;id=".$row[id]."'><button>Staging</button></a></td>&nbsp;";
                          }
                        else
                          {
                            echo "<td class='hide'>&nbsp;</td>";
                          }
                        if ($row[status]!="2")
                          {
                            echo "<td class='hide'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=status_live&amp;id=".$row[id]."'><button>Live</button></a></td>&nbsp;";
                          }
                        else
                          {
                            echo "<td class='hide'>&nbsp;</td>";
                          }
                        if ($row[status]!="0")
                          {
                            echo "<td class='hide'><a href='index.php?".$link."&amp;company_id=".$_GET[company_id]."&amp;action=status_none&amp;id=".$row[id]."'><button>None</button></a></td>&nbsp;";
                          }
                        else
                          {
                            echo "<td class='hide'>&nbsp;</td>";
                          }
                echo "
                      </tr>";
                unset($adresa);
                unset($adresa_polozky);
                unset($link);

              }
          }
      }

    echo "    <tr>
                <td colspan='2'><br />Add new version</td>
                <td colspan='2' style='text-align: center;'><br /><a href='index.php?".$_SERVER[QUERY_STRING]."&amp;action=add_major'><button name='add' value='major'>Add major ver.</button></a></td>
                <td colspan='2' style='text-align: center;'><br /><a href='index.php?".$_SERVER[QUERY_STRING]."&amp;action=add_minor'><button name='add' value='minor'>Add minor ver.</button></a></td>
              </tr>
            </table>
            <div style='width: 100%; text-align: center;'>
              <br />"; back('3_0_1_1_0'); echo "
            </div>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        </div>
        ";
        


?>