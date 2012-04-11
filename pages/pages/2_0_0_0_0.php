<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <strong style='margin-top: 10px;'>Assign projects to new user</strong><br />
            'Username' - 'email'<br />          
            <table style='margin-top: 10px; width: 75%;'>
              <tr><td><strong>Teams:</strong></td><td><strong>Projects:</strong></td></tr>
              <tr><td><input type='checkbox' name='team1' value='1' />&nbsp;Team 1</td><td><input type='checkbox' name='project1' value='1' />&nbsp;Project 1</td></tr>
              <tr><td><input type='checkbox' name='team2' value='1' />&nbsp;Team 2</td><td><input type='checkbox' name='project2' value='1' />&nbsp;Project 2</td></tr>
              <tr><td><input type='checkbox' name='team3' value='1' />&nbsp;Team 3</td><td><input type='checkbox' name='project3' value='1' />&nbsp;Project 3</td></tr>
              <tr><td><input type='checkbox' name='team4' value='1' />&nbsp;Team 4</td><td><input type='checkbox' name='project4' value='1' />&nbsp;Project 4</td></tr>
              <tr><td><input type='checkbox' name='team5' value='1' />&nbsp;Team 5</td><td><input type='checkbox' name='project5' value='1' />&nbsp;Project 5</td></tr>
              <tr><td><input type='checkbox' name='team6' value='1' />&nbsp;Team 6</td><td><input type='checkbox' name='project6' value='1' />&nbsp;Project 6</td></tr>
              <tr><td><input type='checkbox' name='team7' value='1' />&nbsp;Team 7</td><td><input type='checkbox' name='project7' value='1' />&nbsp;Project 7</td></tr>
            </table>
            <div style='width: 75%; text-align: center;'>
              <br /><a href='?page=2_0_0_0'><button>Back</button></a>&nbsp;&nbsp;&nbsp;<a href='?page=2_0_0'><button onclick='alert(\"User was created and confirmation email was sent.\");'>Save</button></a>
            </div>
          </div>
          <div class='clear'>&nbsp;</div>";
?>