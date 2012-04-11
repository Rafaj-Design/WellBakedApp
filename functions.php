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

?>