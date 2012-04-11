<?
iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "UTF-8");
iconv_set_encoding("input_encoding", "UTF-8");


    $host = 'localhost';
    $user = 'joomlawba';
    $pass = 'q1w2e3r4';
    $db = 'wba';
    
    $link = mysql_connect($host, $user, $pass);
    if (!$link)
      {
        die('Could not connect: ' . mysql_error());
      }
    mysql_select_db($db);
    mysql_set_charset('utf-8', $link); 
    
    mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $link);

?>