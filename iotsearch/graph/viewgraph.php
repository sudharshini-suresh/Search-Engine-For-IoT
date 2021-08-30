<!DOCTYPE html>
<html lang="en">

<?php 
	//  session_start();
     // session_destroy();
	  
	  
	//  unset($_SESSION['key']);
	  
	 
 ?>
 
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>


	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="graph/viewgraph.php">Iot Graph</a>
						<a class="navbar-brand" href="">View Graph</a>

		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Iot Graph</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Content</button>-->
			<br />
			
		

			<?php
			
			
			//$hai= $_SESSION['key'];
			//echo $hai;
			
			//$page = $_SERVER['PHP_SELF'];
//$sec = "10";
//header("Refresh: $sec; url=$page");

?>
<style>
ul#menu li a {
    color:#696969;
    display:block;
    font-weight:bold;
    line-height:2.8;
    text-decoration:none;
    width:100%;
}
ul li {
  list-style-type: none;
}
</style>
			<br />

			<form class="form-inline" method="POST" action="">
				<div class="input-group col-md-12">
			

<ul class="list-group" id="menu">


    <a href="dcu-building.php"><li class="list-group-item">DCU Building</li></a>
    <a href="dublin-building.php"><li class="list-group-item">Dublin</li></a>
    <a href="galway-building.php"><li class="list-group-item">Galway</li></a>
    <a href="limerick-buiding.php"><li class="list-group-item">Limerick</li></a>
</ul>		
				</div>
			</form>
			<br />
			

			 
			
		</div>
				<div id="display"></div>

	</div>

	
	</body>
</html>