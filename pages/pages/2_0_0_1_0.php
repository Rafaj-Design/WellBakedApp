<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
          <table style='margin-top: 10px; width: 75%;'>
            <tr><td>Name:</td><td>Name</td><td>&nbsp;</td></tr>
            <tr><td>Username:</td><td>Username</td><td><button onclick='alert(\"Window with form with password, new username and confirm new username fields\")'>Edit</button></td></tr>
            <tr><td>E-mail:</td><td>name@domain.country</td><td><button onclick='alert(\"Window with form with password, new email, confirm new email fields. After saving new email, user will be logged out and confirmation email will be sent to new email address. User can´t log in till he confirm new email address via sended confirmation link. \")'>Edit</button></td></tr>
            <tr><td>Password:</td><td>&nbsp;</td><td><button onclick='alert(\"Window with form with old password, new password, confirm new password fields.\")'>Edit</button></td></tr>
          </table>
          <br /><br />
          <table style='margin-top: 10px; width: 75%;'>
            <tr><td><strong>Projects:</strong></td><td><strong>Teams:</strong></td></tr>
            <tr><td>Projects 1</td><td>Team 1</td></tr>
            <tr><td>Projects 2</td><td>Team 3</td></tr>
            <tr><td>Projects 3</td><td>Team 8</td></tr>
            <tr><td>Projects 4</td><td>&nbsp;</td></tr>
          </table>
          <div style='width: 75%; text-align: center;'>
            <br /><a href='?page=2_0_0'><button>Back</button></a>
          </div>
          </div>
          <div class='clear'>&nbsp;</div>";
?>