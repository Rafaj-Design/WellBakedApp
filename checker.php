<?
$project_id = $_GET[project_id];

$query = "SELECT * FROM lang_def_lang_set WHERE project_id = '".$_GET[project_id]."' AND default_lang != '1'";
$result = mysql_query($query);
  {
    $num_results = mysql_num_rows($result);
    if ($num_results > "0")
      {
        for ($i=0; $i <$num_results; $i++)
          {
            $row = mysql_fetch_array($result);
            $languages[] = $row[lang_id];
          }
      }
  }

$query = "SELECT * FROM lang_categories WHERE project_id = '".$project_id."'";
$result = mysql_query($query);
  {
    $num_results = mysql_num_rows($result);
    if ($num_results > "0")
      {
        for ($i=0; $i <$num_results; $i++)
          {
            $row = mysql_fetch_array($result);
            $query2 = "SELECT *, lang_ver_jsons.id AS main_id  FROM lang_ver_jsons, lang_categories_vers WHERE lang_ver_jsons.dictionary = '1' AND lang_ver_jsons.ver_id = lang_categories_vers.id AND lang_categories_vers.category_id = '".$row[id]."' ORDER BY maj_ver, min_ver";
            $result2 = mysql_query($query2);
              {
                $num_results2 = mysql_num_rows($result2);
                if ($num_results2 > "0")
                  {
                    for ($i2=0; $i2 <$num_results2; $i2++)
                      {
                        $row2 = mysql_fetch_array($result2);
                        foreach ($languages as $key => $val)
                          {
                            $query3 = "SELECT * FROM lang_ver_jsons WHERE parent = '".$row2[main_id]."' AND lang_id = '".$val."'";
                            $result3 = mysql_query($query3);
                              {
                                $num_results3 = mysql_num_rows($result3);
                                if ($num_results3 == "0")
                                  {
                                    $query4 = "INSERT INTO lang_ver_jsons SET parent = '".$row2[main_id]."', lang_id = '".$val."', name = '".$row2[name]."', ver_id = '".$row2[ver_id]."'";
                                    $result4 = mysql_query($query4);
                                  }
                              }
                          }
                      }
                  }
              }
          }
      }
  }
?>