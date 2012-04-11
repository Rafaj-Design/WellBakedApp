<?
$category = explode("_", $page);
if ($category[0]=="2")
  {
    echo "<ul>
            <li class='category_name'>Users/Teams</li>
            <li><div class='menu_button'><a href='index.php?page=2_0_0'>Users</a></div></li>
            <li><div class='menu_button'><a href='index.php?page=2_0_0_0'>Add User</a></div></li>
            <li><div class='menu_button'><a href='index.php?page=2_0_1'>Teams</a></div></li>";
//            <li><div class='menu_button'><a href='index.php?page=2_0_1a'>Add Team</a></div></li>
    echo "    </ul>";
  }

if ($category[0]=="3")
  {
    echo "<ul>
            <li class='category_name'>Projects</li>
            <li><div class='menu_button'><a href='index.php?page=3_0a'>Projects</a></div></li>
          </ul>";
  }
?>