<?
$id = explode("_",$_GET[page]);
$page_query = "SELECT * FROM pages WHERE id = '".$id[0]."'";
$result = mysql_query($page_query);
if ($result)
  {
    $num_results = mysql_num_rows($result);
    if ($num_results > "0")
      {
        for ($i=0; $i <$num_results; $i++)
          {
            $row = mysql_fetch_array($result);
            $page_content = $row[content];
            $page_script = $row[ext_script];
            $page_name = $row[name];
            $page_url = $row[url];
          }
      }
  }



?>
<section id="content">
        <div class="main">
        	<div class="container_24">
                <div class="wrapper">
                    <article class="grid_15 suffix_2 spacer-2">
                    	<h4><?echo $page_name;?></h4>
<br />
<?
echo $page_content;
if ($page_script!="")
  {
    include($page_script);
  }
?>
<!--
                        <p>Maecenas sagittis velit at dui. Ut orci mi semper posuere egestas sed congue tristique nibh. Vestibu<br>lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam tempus aliquam ipsum. Sed eget elit vel magna commodo fringilla. <br>For ordering item you like click here or call <strong class="text-6">+1 800 1234 267</strong> </p>
                        <div class="wrapper p2">
                        	<div class="grid_7 alpha suffix_1">
                            	<figure class="frame fleft prev-indent-bot"><img src="images/page3-img1.jpg" alt="" /></figure>
                                <p class="p0">Fusce euismod consequat</p>
                                <span class="text-7">12,85 $</span>
                            </div>
                            <div class="grid_7 omega">
                            	<figure class="frame fleft prev-indent-bot"><img src="images/page3-img2.jpg" alt="" /></figure>
                                <p class="p0">Fusce euismod consequat</p>
                                <span class="text-7">9,85 $</span>
                            </div>
                        </div>
                        <div class="wrapper p2">
                        	<div class="grid_7 alpha suffix_1">
                            	<figure class="frame fleft prev-indent-bot"><img src="images/page3-img3.jpg" alt="" /></figure>
                                <p class="p0">Fusce euismod consequat</p>
                                <span class="text-7">11,20 $</span>
                            </div>
                            <div class="grid_7 omega">
                            	<figure class="frame fleft prev-indent-bot"><img src="images/page3-img4.jpg" alt="" /></figure>
                                <p class="p0">Fusce euismod consequat</p>
                                <span class="text-7">15 $</span>
                            </div>
                        </div>
                        <div class="wrapper p2">
                        	<div class="grid_7 alpha suffix_1">
                            	<figure class="frame fleft prev-indent-bot"><img src="images/page3-img5.jpg" alt="" /></figure>
                                <p class="p0">Fusce euismod consequat</p>
                                <span class="text-7">11,20 $</span>
                            </div>
                            <div class="grid_7 omega">
                            	<figure class="frame fleft prev-indent-bot"><img src="images/page3-img6.jpg" alt="" /></figure>
                                <p class="p0">Fusce euismod consequat</p>
                                <span class="text-7">15 $</span>
                            </div>
                        </div>
                        <div class="alignright">
                        	<a class="link" href="#">View All (32)</a>
                        </div>
-->
                    </article>

<!--
                    <article class="grid_6">
                    	<div class="indent3">
                            <h4>Bakery</h4>
                            <div class="wrapper p4">
                                <ul class="list-2">
                                    <li><a href="#">Breads</a></li>
                                    <li><a href="#">Viennoiserie</a></li>
                                    <li><a href="#">Pastries</a></li>
                                    <li><a href="#">Muffins</a></li>
                                    <li><a href="#">Tarts</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Chocolates</a></li>
                                    <li><a href="#">Soups and Salads</a></li>
                                    <li><a href="#">Sandwiches</a></li>
                                    <li class="last-item"><a href="#">Quiche</a></li>
                                </ul>
                            </div>
                            <h4>Cakes Sorts</h4>
                            <ul class="list-2">
                            	<li><a href="#">Wedding Cakes</a></li>
                                <li><a href="#">Birthday Cakes</a></li>
                                <li><a href="#">Shower Cakes</a></li>
                                <li><a href="#">Anniversary Cakes</a></li>
                                <li><a href="#">Every Day Occasions</a></li>
                                <li><a href="#">Grooms Cakes</a></li>
                                <li><a href="#">Sweet 16 / Quincienera</a></li>
                                <li><a href="#">Christening/Communion</a></li>
                                <li><a href="#">Graduation Cakes</a></li>
                                <li class="last-item"><a href="#">Holiday Cakes</a></li>
                            </ul>
                        </div>
                    </article>
-->
                </div>
            </div>
        </div>
        
    </section>