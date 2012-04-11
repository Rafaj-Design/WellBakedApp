<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <strong>Team name</strong>
            <br /><br />
            <table style='margin-top: 10px; width: 75%;'>
              <tr><td><strong>Projects:</strong></td><td><strong>Teams:</strong></td></tr>
              <tr><td><input type='checkbox' name='project1' value='1' />&nbsp;Projects 1</td><td><input type='checkbox' name='team1' value='1' />&nbsp;Team 1</td></tr>
              <tr><td><input type='checkbox' checked name='project2' value='1' />&nbsp;Projects 2</td><td><input type='checkbox' name='team2' value='1' />&nbsp;Team 3</td></tr>
              <tr><td><input type='checkbox' checked name='project3' value='1' />&nbsp;Projects 3</td><td><input type='checkbox' checked name='team3' value='1' />&nbsp;Team 8</td></tr>
              <tr><td><input type='checkbox' checked name='project4' value='1' />&nbsp;Projects 4</td><td>&nbsp;</td></tr>
            </table>
            <div style='width: 75%; text-align: center;'>
              <br /><a href='?page=2_0_1'><button>Back</button></a>&nbsp;&nbsp;&nbsp;<a href='?page=2_0_1'><button onclick='alert(\"Changes in team settings were saved.\");'>Save</button></a>
            </div>
          </div>
          <div class='clear'>&nbsp;</div>";
?>