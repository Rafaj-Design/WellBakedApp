<?
    echo "<div style='width: 24%; float: left; display: block; background-color: pink; padding-left: 25%; padding-right: 1%; text-align: right;'>
            <div style='text-align: right; font-size: 20px;'>
              Log In
            </div>";
    echo "<form action='' method='post'>";
    echo "E-mail:&nbsp;";
    fastform('text', 'email', 'email@domain.country');
    echo "<br /><br />";
    echo "Password:&nbsp;";
    fastform('password', 'pass1', 'password');
    echo "<br />";
    echo "Confirm Password:&nbsp;";
    fastform('password', 'pass2', 'password');
    echo "<br /><br />";
    echo "<button name='page' value='2_0_0'>Log In</button>";
    echo "</form>";
    echo "</div>";

    echo "<div style='width: 24%; float: left; display: block; background-color: pink; padding-right: 25%; padding-left: 1%; text-align: left;'>
            <div style='text-align: left; font-size: 20px;'>
              Sign Up
              <br />
              <form action='' method='post'>
              <button style='margin-top: 118px; margin-bottom: -2px;' name='page' value='0_1'>Register</button>
              </form>
            </div>";
    echo "</div>";

?>