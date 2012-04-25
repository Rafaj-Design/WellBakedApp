
    <footer>
        <div class="main">
        	<div class="container_24">
            	<div class="wrapper">
                	<div class="grid_10 suffix_8">
                    	<ul class="menu-list">
                        	<li><a href="index.html">Home</a></li>    
                            <li><a href="index-1.html">About</a></li>     
                            <li><a class="active" href="index-2.html">Menu</a></li>     
                            <li><a href="index-3.html">Products</a></li>     
                            <li><a href="index-4.html">Booking</a></li>     
                            <li><a href="index-5.html">Contacts</a></li>
                        </ul>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <div class="grid_6">
                    	<span class="footer-text">Bakery &nbsp;&copy; 2011&nbsp;</span>
                        <a class="button-3" href="index-6.html">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<script type="text/javascript"> Cufon.now(); Cufon.refresh(); </script>
<?
if ((isset($_GET[alert]) AND $_GET[alert]=="1") OR (isset($end_alert) AND $end_alert=="1"))
  {
    $css_alert = "block";
  }
else
  {
    $css_alert = "none";
  }

?>


<? echo "<div style=' display: ".$css_alert.";
                      z-index: 10000;
                      position: absolute;
                      overflow: hidden;
                      width: 100%;
                      height: 100%;
                      position: fixed;
                      opacity: 0.7;
                      filter:alpha (opacity=80);
                      background-color: black;
                      top: 0;
                      left: 0px; '>
                      ";?>
&nbsp;
</div>

<div style='width: 300px;
            min-height: 100px;
            color: #1a1a1a;
            position: absolute;
            top: 30%;
            left: 50%;
            margin-left: -150px;
            z-index: 10001;
            background-color: #ededed;
            border: 1px solid #1a1a1a;
            border-top: 25px solid #1a1a1a;
            border-radius: 15px 15px 15px 15px;
            padding: 15px;
            position: fixed;
            text-align: center;
            opacity: 1.0;
            filter:alpha (opacity=100);
            display: <?echo $css_alert;?>;'
      >
      <?
      if($css_alert=="block" AND IsSet($css_alert) AND (isset($_GET[alert]) AND $_GET[alert]=="1"))
        {
          echo php_confirm($_GET[php_config_id], $_GET[id], $_GET[table_name], $_GET[yes_no]);
        }

      if($css_alert=="block" AND IsSet($css_alert) AND (isset($end_alert) AND $end_alert=="1"))
        {
          echo php_confirm($php_config_id, $_GET[id], $_GET[table_name], $yes_no);
        }
      ?></div>

</div>

</body>
</html>
