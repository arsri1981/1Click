<html>
<head></head>
<link href="style.css" rel="stylesheet" type="text/css" />
<body>
	<!--- Header Start--->    

	<?php include('header.php'); ?>

	<!--- Header End--->    
    <div id="body_area">
	<!--- Left Start--->    
		<?php include('left.php'); ?>
	<!--- Left END--->    

	<!--- Content Start--->    

		<div class="body_area1">
    <div class="banner_bottom"></div>
    <div class="mid">
      <div class="tick_head">Sign In</div>
        <div >
	<div class="search_background">
       <div class="searchname">Email Address</div>
       <div class="searchbox">
         <label>
         <input name="textfield" type="text" class="searchtextbox">
         </label>
       </div>
<div class="search_background">
       <div class="searchname">Pasword</div>
       <div class="searchbox">
         <label>
         <input name="textfield" type="text" class="searchtextbox">
         </label>
       </div>

       <div class="searchbox">
         <div align="center"><a href="results.php" class="go">go</a></div>
       </div>
     </div>
</div>
</div>

	<!--- Content End--->    






    </div>
	<!--- Footer Start--->    
    <?php include('footer.php'); ?>
	<!--- Footer End--->    
</body>
</html>