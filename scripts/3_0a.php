<?
if (isset($_POST[add]) AND $_POST[add]=="1")
  {
    if ($_POST[name]!="Project name" AND $_POST[name]!="" AND IsSet($_POST[name]))
      {
        $query = "INSERT INTO projects SET name = '".htmlspecialchars($_POST[name], ENT_QUOTES | UTF-8)."', archived = '0', company_id = '".$_GET[company]."'";
        $result = mysql_query($query);
      }
  }

if (isset($_POST[to_archive]) AND $_POST!="")
  {
    $query = "UPDATE projects SET archived = '1' WHERE id = '".$_POST[to_archive]."'";
    $resul = mysql_query($query);
  }

if (isset($_POST[to_active]) AND $_POST!="")
  {
    $query = "UPDATE projects SET archived = '0' WHERE id = '".$_POST[to_active]."'";
    $resul = mysql_query($query);
  }

    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content_container'>
            <table style='margin-top: 10px;'>
              <tr>
                <td style='width: 350px;'><strong>Sort alphabetically</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><strong>Sort by last update</strong></td>
              </tr>";
    if (!isset($_GET[order]) OR $_GET[order]=="")
      {
        $_GET[order] = "name";
      }
    $query = "SELECT * FROM projects WHERE archived = '0' ORDER BY '".$_GET[order]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<tr>
                        <td class='unhide'>".$row[name]."</td>
                        <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                        <td class='unhide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                        <td class='unhide'><form action='#' method='post'><button name='to_archive' value='".$row[id]."'>Move to archived</button></form></td>
                        <td class='unhide'>".$row[last_update]."</td>
                      </tr>";
              }
          }
        else
          {
            $empty_list1 = "1";
          }      
      }
    $query = "SELECT * FROM projects WHERE archived = '1' ORDER BY '".$_GET[order]."'";
    $result = mysql_query($query);
    if ($result)
      {
        $num_results = mysql_num_rows($result);
        if ($num_results > "0")
          {
            for ($i=0; $i <$num_results; $i++)
              {
                $row = mysql_fetch_array($result);
                echo "<tr>
                        <td class='hide'>".$row[name]."</td>
                        <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                        <td class='hide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                        <td class='hide'><form action='#' method='post'><button name='to_active' value='".$row[id]."'>Move to active</button></form></td>
                        <td class='hide'>".$row[last_update]."</td>
                      </tr>";
              }
          }      
        else
          {
            $empty_list2 = "1";
          }      
      }
    if ($empty_list1 == "1" AND $empty_list2 == "1")
      {
        echo "<tr><td colspan = '5'><center>List is empty!</center></td></tr>";
      }

/*
        echo "<tr>
                <td class='unhide'>Project 3</td>
                <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='unhide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                <td class='unhide'><button onclick='alert(\"Move project to archive.\");'>Move to archived</button></td>
                <td class='unhide'>2012-03-10 01:43:15</td>
              </tr>
              <tr>
                <td class='unhide'>Project 5</td>
                <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='unhide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                <td class='unhide'><button onclick='alert(\"Move project to archive.\");'>Move to archived</button></td>
                <td class='unhide'>2012-03-10 00:54:02</td>
              </tr>
              <tr>
                <td class='unhide'>Project 6</td>
                <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='unhide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                <td class='unhide'><button onclick='alert(\"Move project to archive.\");'>Move to archived</button></td>
                <td class='unhide'>2012-03-09 22:37:45</td>
              </tr>
              <tr>
                <td class='hide'>Project 1</td>
                <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='hide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                <td class='hide'><button onclick='alert(\"Move project to active projects.\");'>Move to active</button></td>
                <td class='hide'>2011-12-24 09:48:28</td>
              </tr>
              <tr>
                <td class='hide'>Project 2</td>
                <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='hide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                <td class='hide'><button onclick='alert(\"Move project to active projects.\");'>Move to active</button></td>
                <td class='hide'>2012-03-09 22:37:45</td>
              </tr>
              <tr>
                <td class='hide'>Project 4</td>
                <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='hide'><a href='?page=2_projects&amp;script=3_0b'><button>Edit</button></a></td>
                <td class='hide'><button onclick='alert(\"Move project to active projects.\");'>Move to active</button></td>
                <td class='hide'>2012-03-09 22:37:45</td>
              </tr>
onclick='alert(\"Project was added.\");'
  */
echo "<form method = 'post' action = '#'>";
echo "        <tr>
                <td><br />";fastform('text', 'name', 'Project name');echo "</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><br /><button name='add' value='1'>Add new project</button></td>
                <td>&nbsp;</td>
              </tr>                
              </form>
            </table>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        ";
        


?>