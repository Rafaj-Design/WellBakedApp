<?
function menu($parent, $first)
  {
    $query = "SELECT * FROM pages WHERE parent = '$parent' AND menu = '1'";
//echo $query;
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            echo "<ul";
            if ($first == "1")
              {
                echo " class = 'menu'";
              }
            echo ">";
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<li";
                if ($first == "1")
                  {
                    echo " class = 'item'";
                  }
//                echo ">".$row[name];
                echo '><a href="index.php?page='.$row[id]."_".$row[url].'">';
                if ($first == "1")
                  {
                    echo "<strong>";
                  }
                echo $row[name];
                if ($first == "1")
                  {
                    echo "</strong>";
                  }
                echo '</a>';
                menu($row[id],'');
                echo "</li>";
              }
            echo "</ul>";            
          }
      }
  }

function fastform($type, $name, $value)
  {
    if ($type == "text")
      {
        echo "<input type='text' name='".$name."' value='".$value."' />";
      }

    if ($type == "password")
      {
        echo "<input type='password' name='".$name."' value='".$value."' />";
      }

    if ($type == "textarea")
      {
        echo "<textarea name='".$name."' style=''>".$value."</textarea>";
      }
  }

function php_confirm($php_config_id, $id, $table_name, $yes_no)
  {
    $query = "SELECT name FROM ".$_GET[table_name]." WHERE id = '".$_GET[id]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        $row = mysql_fetch_array($result);
        $name = $row[name];
      }
    unset($result);
    unset($query);
    unset($row);
    unset($num_results);
    
    $query = "SELECT * FROM php_confirm WHERE id = '".$php_config_id."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results == "1")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                $message = Str_Replace ("@#name#@", $name, $row[message]); 
                $return = $message;
                $return .= "<br />";

                $link = explode("/",$_SERVER[SCRIPT_NAME]);
                $count = count($link) - 1;
                $link = $link[$count]."?";

                if ($row[confirm]=="1")
                  {
                    $yes_no = explode("|",$yes_no);
                    $return .= " <a href='".$link."page=".$_GET[page]."&action=".$row[action]."&id=".$id."&confirmed=1";
                    $adresa = explode("&",$_SERVER[QUERY_STRING]);
                    foreach ($adresa as $key => $val)
                      {
                        $adresa_polozky = explode("=",$val);
                        if ($adresa_polozky[1] != $row[action] AND $adresa_polozky[0] != "yes_no" AND $adresa_polozky[0] != "php_config_id" AND $adresa_polozky[0] != "alert")
                          {
                            $return .= "&".$val;
                          }
                      }
                    $return .= "'>
                                  <button class='confirm_button'><strong>".$yes_no[0]."</strong></button></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href='".$link;
                    $adresa = explode("&",$_SERVER[QUERY_STRING]);
                    foreach ($adresa as $key => $val)
                      {
                        $adresa_polozky = explode("=",$val);
                        if ($adresa_polozky[1] != $row[action] AND $adresa_polozky[0] != "yes_no" AND $adresa_polozky[0] != "php_config_id" AND $adresa_polozky[0] != "alert")
                          {
                            $return .= "&".$val;
                          }
                      }
                    $return .= "'><button class='confirm_button'><strong>".$yes_no[1]."</strong></button></a>";
                    return $return;
                  }
                if ($row[alert]=="1")
                  {
                    $return .= "<br /><br /><a href='".$link."page=".$_GET[page];
                    $adresa = explode("&",$_SERVER[QUERY_STRING]);
                    foreach ($adresa as $key => $val)
                      {
                        $adresa_polozky = explode("=",$val);
                        if ($adresa_polozky[1] != $row[action] AND $adresa_polozky[0] != "yes_no" AND $adresa_polozky[0] != "php_config_id" AND $adresa_polozky[0] != "alert" AND $adresa_polozky[0] != "page" AND $adresa_polozky[0] != "action")
                          {
                            $return .= "&".$val;
                          }
                      }
                    $return .= "'><button class='confirm_button'><strong>".$yes_no."</strong></button></a>";
                    unset($endalert);
                    return $return;

                  }
              }
          }
      }
  }
/*
function gen_json($name, $value, $type, $carka)
  {
    $query = "SELECT * FROM ";

    if ($type == "1")
      {
        $json = json_encode($name);
      }
    echo $json;
  }
*/
function gen_json2($ver_id, $parent, $tab)
  {
    if ($parent == "")
      {
        $parent = "0";
      }
    if ($tab == "")
      {
        $tab = "0";
      }
    else
      {
        $json .= ",";
      }
    $tab++;
    $query = "SELECT * FROM rc_modules_vers_jsons WHERE parent = '".$parent."' AND version_id = '".$ver_id."' ORDER BY 'order'";
//echo $query;
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                if ($row[type] == "1")
                  {
                    tab($tab);
                    echo json_encode($row[name]).":";
                    echo "&nbsp;&nbsp;<a style='margin-left: 50px;' href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=change' title='\"x\": {...}'>Rename</a>";
                    echo "&nbsp;&nbsp;<a href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=delete'>Delete</a>";
                    echo "<br />";
                    tab($tab);
                    echo "&nbsp;&nbsp;&nbsp;{";
                    echo "&nbsp;&nbsp;<a style='margin-left: 50px;' href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=add_object' title='\"x\": {...}'>+ Object</a>";
                    echo "&nbsp;&nbsp;<a href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=add_array' title='\"x\": [{...},{...}]'>+ Array</a>";
                    echo "&nbsp;&nbsp;<a href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=add_string' title='\"x\": \"y\"'>+ String</a>";
                    echo "<br />";
                    gen_json2($ver_id, $row[id], $tab);
                    tab($tab);
                    echo "&nbsp;&nbsp;&nbsp;}";
                    if ($i < $num_results-1)
                      {
                        echo ",";
                      }
                    echo "<br />";
                  }
                if ($row[type] == "2")
                  {
                    tab($tab);
                    echo json_encode($row[name]).":";
                    echo "&nbsp;&nbsp;<a style='margin-left: 50px;' href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=change' title='\"x\": {...}'>Rename</a>";
                    echo "&nbsp;&nbsp;<a href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=delete'>Delete</a>";
                    echo "<br />";
                    tab($tab);
                    echo "[";
                    echo "<br />";
                    tab($tab);
                    echo "&nbsp;&nbsp;&nbsp;{";
                    echo "<br />";
                    gen_json2($ver_id, $row[id], $tab);
                    tab($tab);
                    echo "&nbsp;&nbsp;&nbsp;}";
                    echo "<br />";
                    tab($tab);
                    echo "]";
                    if ($i < $num_results-1)
                      {
                        echo ",";
                      }
                    echo "<br />";
                  }
                if ($row[type] == "3")
                  {
                    tab($tab);
                    echo json_encode($row[name]).":".json_encode($row[value]);
                    if ($i < $num_results-1)
                      {
                        echo ",";
                      }
                    echo "&nbsp;&nbsp;<a style='margin-left: 50px;' href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=change'>Rename key / Change Value</a>";
                    echo "&nbsp;&nbsp;<a href='index.php?page=".$_GET[page]."&amp;project_id=".$_GET[project_id]."&amp;module_id=".$_GET[module_id]."&amp;company_id=".$_GET[company_id]."&amp;ver_id=".$_GET[ver_id]."&amp;script=".$_GET[script]."&amp;json_id=".$row[id]."&amp;action=delete'>Delete</a>";
                    echo "<br />";
                  }
              }
          }
      }
  }

function gen_json($ver_id, $parent)
  {
    echo "{";
                    echo "<br />";
    gen_json2($ver_id, $parent, "");
    echo "}";
  }

function tab($m)
  {
    if ($m > 0)
      {
        for ($i=0; $i <$m; $i++)
          {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
          }
      }
  }

?>