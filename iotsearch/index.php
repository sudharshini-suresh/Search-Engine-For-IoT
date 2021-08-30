<?php

if(session_status()!=PHP_SESSION_ACTIVE) 
{
    @ob_start();
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 

ini_set('display_errors', 'on');
error_reporting(E_ALL);
	// session_start();
	 
//	 echo "hai".$_SESSION['key'];
      //session_destroy();
	  
	  
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
			<a class="navbar-brand" href="">Iot Search Engine</a>
						<a class="navbar-brand" href="graph/viewgraph.php">View Graph</a>

		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Iot Search Engine</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Content</button>-->
			<br />
			
		

			<?php
			
			if(isset($_POST['keyword']))
			{
			
			$_SESSION['key']=$_POST['keyword'];
			}
			else 
			{
			    session_destroy();
			}
			
			
			//echo $hai;
			
			//$page = $_SERVER['PHP_SELF'];
//$sec = "10";
//header("Refresh: $sec; url=$page");
	  //@session_start();

          if(isset($_SESSION['key']))
		  {
		  

		  
		  ?>
		  <script>
		  $(document).ready(function(){
		 // alert("jai");
  sendRequest();
  function sendRequest(){
      $.ajax({
	          type: "POST",

        url: "search.php",
		data: { 
           // id: $(this).val(), // < note use of 'this' here
            keyword: $("#keyword").val() 
        },
        success: 
          function(data){
           $('#display').html(data); //insert text of test.php into your div
           
        },
        complete: function() {
       // Schedule the next request when the current one's complete
       setInterval(sendRequest, 15000); // The interval set to 5 seconds
     }
    });
  };
});
		</script>
		
		<?php
		  }   
		  else 
		  
		  {
		  		

		  }      

?>
			<br />

			<form class="form-inline" method="POST" action="index.php">
				<div class="input-group col-md-12">
			
					<input type="text" class="form-control" placeholder="Search here..." name="keyword" id="keyword" required="required" value="<?php 
					
					echo isset($_SESSION['key']) ? $_SESSION['key'] : ''?>"/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search1"><span class="glyphicon glyphicon-search"></span></button>														
					</span>
					

				</div>
			</form>
			<br />
			

			 
			
		</div>
		<?php
		include "search.php";
		
		?>
				<div id="display"></div>
				

	</div>

	

	
	</body>
</html>