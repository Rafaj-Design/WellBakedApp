<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <table style='margin-top: 10px;'>
              <tr>
                <td style='width: 350px;'><strong>Sort alphabetically</strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><strong>Sort by last update</strong></td>
              </tr>
              <tr>
                <td class='unhide'>Project 3</td>
                <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='unhide'><a href='?page=3_0b'><button>Edit</button></a></td>
                <td class='unhide'><button onclick='alert(\"Move project to archive.\");'>Move to archived</button></td>
                <td class='unhide'>2012-03-10 01:43:15</td>
              </tr>
              <tr>
                <td class='unhide'>Project 5</td>
                <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='unhide'><a href='?page=3_0b'><button>Edit</button></a></td>
                <td class='unhide'><button onclick='alert(\"Move project to archive.\");'>Move to archived</button></td>
                <td class='unhide'>2012-03-10 00:54:02</td>
              </tr>
              <tr>
                <td class='unhide'>Project 6</td>
                <td class='unhide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='unhide'><a href='?page=3_0b'><button>Edit</button></a></td>
                <td class='unhide'><button onclick='alert(\"Move project to archive.\");'>Move to archived</button></td>
                <td class='unhide'>2012-03-09 22:37:45</td>
              </tr>
              <tr>
                <td class='hide'>Project 1</td>
                <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='hide'><a href='?page=3_0b'><button>Edit</button></a></td>
                <td class='hide'><button onclick='alert(\"Move project to active projects.\");'>Move to active</button></td>
                <td class='hide'>2011-12-24 09:48:28</td>
              </tr>
              <tr>
                <td class='hide'>Project 2</td>
                <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='hide'><a href='?page=3_0b'><button>Edit</button></a></td>
                <td class='hide'><button onclick='alert(\"Move project to active projects.\");'>Move to active</button></td>
                <td class='hide'>2012-03-09 22:37:45</td>
              </tr>
              <tr>
                <td class='hide'>Project 4</td>
                <td class='hide'><button onclick='alert(\"Confirmation for deleting project and then deleting of project.\");'>Delete</button></td>
                <td class='hide'><a href='?page=3_0b'><button>Edit</button></a></td>
                <td class='hide'><button onclick='alert(\"Move project to active projects.\");'>Move to active</button></td>
                <td class='hide'>2012-03-09 22:37:45</td>
              </tr>
              <tr>
                <td><br />";fastform('text', 'projectname', 'Project name');echo "</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><br /><button onclick='alert(\"Project was added.\");'>Add new project</button></td>
                <td>&nbsp;</td>
              </tr>                
            </table>
          </div>
          <div class='clear'>
            &nbsp;
          </div>
        ";
        


?>