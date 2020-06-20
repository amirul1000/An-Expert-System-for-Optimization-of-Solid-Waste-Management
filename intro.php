<?php
require("header.php");
?>
<div id="contentwrap">

		<?php 
			$sql = "select * from entries where id = 53";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result) 
		?>
		<div class="post" id="post">
				<div class="entry">
				    <p>
					<?php 
						echo nl2br($row['body']);
					?>
					</p>
				</div>
			
				<br />
			
				<div align="center">
				<form name="groovyform" action="login.php">
<input
   type="submit"
   name="groovybtn1"
   class="groovybutton"
   value="NEXT"
   onMouseOver="goLite(this.form.name,this.name)"
   onMouseOut="goDim(this.form.name,this.name)">
</form> </div>
			
			<ul class="hoverbox">
				<li>
				<a href="#"><img src="img/wast_glob.jpg" alt="description" /></a>
				
				<a href="#"><img src="img/wast_glob1.jpg" alt="description" /></a>
				</li>
				
				<br />
			</ul>
		</div>
		
	    
       <div class="in"></div>
</div>

<div id="sidebar">

	<div class="side-widget widget_minimeta">
	<h3>Links </h3>
	<ul><li><a href="http://www.kpkt.gov.my/kpkt/">MHLG </a></li></ul>
	<ul><li><a href="http://www.kpkt.gov.my/jpspn/main.php">DNSWM </a></li></ul>
	<ul><li><a href="http://www.ppsppa.gov.my/">SWPCMC</a></li></ul>
	<ul><li><a href="www.alamflora.com.my">Alma Flora Sdn Bhd </a></li></ul>
	<ul><li><a href="www.swmsb.com">SWM Environment Sdn Bhd</a></li></ul>
	<ul><li><a href="www.e-idaman.com">Environment Idaman Sdn Bhd </a></li></ul>
	<ul><li><a href="http://www.doe.gov.my/portal/">Department of Environment </a></li></ul>
	<ul><li><a href="http://www.malaysia.gov.my/BM/Pages/default.aspx/">myGovernment </a></li></ul>
	<ul><li><a href="http://www.nre.gov.my/english/Pages/Home.aspx">MNRE</a></li></ul>
	<ul><li><a href="http://www.myideas.my/">My Ideas  </a></li></ul>
</div>
	<div class="side-widget widget_minimeta">
		<h3>Gallery </h3>
		<ul class="hoverbox">
			<li>
				<a href="#"><img src="img/photo04.jpg" alt="description" /></a>
			</li>
			<li>
				<a href="#"><img src="img/side1.jpg" alt="description" /></a>
			</li>
		</ul>
	</div>
	
</div> 
</div> 

<?php
require("footer.php");
?>