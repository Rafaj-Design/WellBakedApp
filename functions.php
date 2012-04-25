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

?>