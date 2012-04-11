<?
    echo "<div style='width: 24%; float: left; display: block; background-color: pink; padding-left: 25%; padding-right: 1%; text-align: right; padding-bottom: 22px;'>
            <div style='text-align: right; font-size: 20px;'>
              &nbsp;
            </div>";
    echo "<form action='' method='post'>";
    echo "Username:&nbsp;";
    fastform('text', 'username', 'username');
    echo "<br /><br />";
    echo "Password:&nbsp;";
    fastform('password', 'pass1', 'password');
    echo "<br />";
    echo "Confirm Password:&nbsp;";
    fastform('password', 'pass2', 'password');
    echo "<br /><br />";
//    echo "<button name='page' value='2_0'>Log In</button>";
    echo "</form>";
    echo "</div>";

    echo "<div style='width: 24%; float: left; display: block; background-color: pink; padding-right: 25%; padding-left: 1%; text-align: left;'>
            <div style='text-align: left; font-size: 20px;'>
              Sign Up
            </div>
              <form action='' method='post'>";
    echo "<form action='' method='post'>";
    fastform('text', 'name', 'Name Name');
    echo "&nbsp;Name:";
    echo "<br /><br />";
    fastform('text', 'email1', 'email@domain.country');
    echo "&nbsp;E-mail:";
    echo "<br />";
    fastform('text', 'email2', 'email@domain.country');
    echo "&nbsp;Confirm E-mail:";
    echo "<br /><br />
              <button style='margin-bottom: -2px;' name='page' value='0_1a'>Register</button>
              </form>
            </div>";
    echo "</div>";

?>