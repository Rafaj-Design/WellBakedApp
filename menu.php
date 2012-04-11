<!--
  
                               <ul class="menu">
                                <li><a class="item<?//echo $home;?>" href="index.html"><strong>Home</strong></a></li>
                                <li><a class="item<?//echo $support;?>" href="index-1.html"><strong>Support</strong></a></li>
                                <li><a class="item<?//echo $administration;?>" href="index-2.html"><strong>Administration</strong></a></li>
</ul>
-->
<?
if(!IsSet($_GET[page]) OR $_GET[page]=="")
  {
    $_GET[page] = "home";
  }

menu('0', '1');

?>
<!--
  
                                <li><a class="item<?//echo $home;?>" href="index.html"><strong>Home</strong></a></li>
                                <li><a class="item<?//echo $support;?>" href="index-1.html"><strong>Support</strong></a></li>
                                <li><a class="item<?//echo $administration;?>" href="index-2.html"><strong>Administration</strong></a></li>
                                <li><a class="item<?//echo $logout;?>" href="index-3.html"><strong>Logout</strong></a>
--><!--
                                	<ul>
                                    	<li><a href="#">Breads</a></li>
                                        <li><a href="#">Viennoiserie</a></li>
                                        <li><a href="#">Pastries</a>
                                        	<ul>
                                            	<li><a href="#">Breads</a></li>
                                                <li><a href="#">Viennoiserie</a></li>
                                                <li><a href="#">Pastries</a></li>
                                                <li><a href="#">Muffins</a></li>
                                                <li><a href="#">Tarts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Muffins</a></li>
                                        <li><a href="#">Tarts</a></li>
                                    </ul>
                                </li>
-->
<!--                             </ul> -->
