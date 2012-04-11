<?
    echo "<div id='left_menu'>";
    include("pages/left_menu.php");
    echo "</div>
          <div id='content'>
            <div style='width: 50%; float: left;'>
              <form action='' method='post'>
                <table style='margin-top: 10px;'>
                  <tr><td colspan='2'><strong>ADD USER</strong></td></tr>
                  <tr><td>Name:</td><td>";fastform('text', 'name', 'Name');echo "</td></tr>
                  <tr><td>E-mail:</td><td>";fastform('text', 'email', 'name@domain.country');echo "</td></tr>
                  <tr><td>Username:</td><td>";fastform('text', 'username', 'username123');echo "</td></tr>
                  <tr><td>Password:</td><td>";fastform('password', 'password1', 'password');echo "</td></tr>
                  <tr><td>Confirm password:</td><td>";fastform('password', 'password2', 'password');echo "</td></tr>
                </table>
                <br /><br />
                <input type='checkbox' name='admin' value='1' />&nbsp;&nbsp;Is Administrator<br />
                <a href='?page=2_0_0_0_0'><button>Save</button></a>
              </form>
            </div>
            <div style='width: 50%; float: left;'>
              <form action='' method='post'>
                <table style='margin-top: 10px;'>
                  <tr><td colspan='2'><strong>INVITE USER</strong></td></tr>
                  <tr><td>E-mail:</td><td>";fastform('text', 'email', 'name@domain.country');echo "</td></tr>
                  <tr><td collspan='2'>Invitation text:<br />
                  ";fastform('textarea', 'invitation_text', 'Some invitation text...');echo "</td></tr>
                </table>
                <br /><br /><br /><br /><br />
                <input type='checkbox' name='admin' value='1' />&nbsp;&nbsp;Is Administrator<br />
                <a href='?page=2_0_0_0_1'><button>Save</button></a>
              </form>
            </div>
            <div class='clear'>&nbsp;</div>
          </div>
          <div class='clear'>&nbsp;</div>";


?>