<?php
//session_start();
?>
<style>
body {
    min-height: 100%;
    position: relative;
}

#topbar {
    display: flex;
    height: 64px;
    width: 100%;
    align-items: flex-end;
    position: fixed;
    background-color: white;
}

#searchbarimage {
    height: 30px;
    padding: 0px 28px 10px 30px;
    cursor: pointer;
}

html, body {
    margin: 0;
    padding: 0;
    height: auto;
}

#searchbarmic {
    height: 45px;
    width: 35px;
    margin-left: auto;
    background-color: white;
}

#searchbarmic img {
    height: 25px;
}

#searchbarbutton {
    height: 45px;
    width: 55px;
    position: relative;
    margin-right: -2px;
    background-color: white;
}

#searchbarbutton svg {
    height: 25px;
    width: 35px;
    position: relative;
    left: -3px;
}

#searchbarbutton svg path {
    fill: #4285F4
}

#searchbar {
    width: 625px;
    height: 45px;
    border-radius: 100px;
    border-color: lightgray;
    border-style: solid;
    border-width: 1px;
    font-size: 16px;
    position: relative;
    bottom: 5px;
    overflow: hidden;
    display: flex;
    z-index: 100;
}

#searchbar:hover {
    box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
}

#searchbar > input {
    height: 45px;
    border-style: none;
    font-size: 16px;
    line-height: 45px;
    padding-left: 20px;
    flex: 1;
}

#searchbar > input:focus {
    outline: none;
}

#searchbar button {
    border: none;
    cursor: pointer;
}

#searchbar button:focus {
    outline: none;
}

#boxesicon {
    width: 25px;
    height: 25px;
    background-image: url('images/boxes.png');
    opacity: 0.6;
    background-size: 26px;
    position: absolute;
    right: 130px;
    bottom: 14px;
}

#optionsmenuactive::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 3px;
    background-color: #4285F4;
    left: 5px;
    bottom: 0px;
}

#optionsmenu2 {
    list-style: none;
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0px;
    margin-left: 100px;
}

#optionsmenu2 li {
    padding: 0px 10px 15px 20px;
}

#searchresultsarea {
    margin-left: 150px;
    font-family: 'Arial';
}

#searchresultsnumber {
    font-size: 0.8rem;
    color: gray;
}

.searchresult {
    margin-left: 8px;
}

.searchresult h2 {
    font-size: 19px;
    line-height: 18px;
    font-weight: normal;
    color: rgb(29, 1, 189);
    margin-bottom: 0px;
    margin-top: 25px;
}

.searchresult a {
    font-size: 14px;
    line-height: 14px;
    color: green;
    margin-bottom: 0px;
}

.searchresult button {
    font-size: 10px;
    line-height: 14px;
    color: green;
    margin-bottom: 0px;
    padding: 0px;
    border-width: 0px;
    background-color: white;
}

#bellicon {
    width: 20px;
    height: 20px;
    background-color: rgb(105, 105, 105);
    background-image: url('images/bell.png');
    background-size: 12px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    border-radius: 30px;
    position: absolute;
    right: 90px;
    bottom: 18px;
}

#profileimage {
    border-radius: 50px;
    width: 32px;
    height: 32px;
    position: absolute;
    right: 40px;
    bottom: 12px;
}

#optionsbar {
    width: 100%;
    height: 50px;
    border-width: 0px;
    border-bottom: 1px;
    border-color: lightgray;
    border-style: solid;
    display: flex;
    align-items: flex-end;
    font-family: 'Arial';
    font-size: 13px;
    color: rgb(112, 112, 112);
    padding-top: 64px;
}

#optionsmenu1 {
    list-style: none;
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0px;
    margin-left: 150px;
}

#optionsmenu1 li {
    padding: 0px 10px 15px 20px;
}

#optionsmenuactive {
    color: #4285F4;
    font-weight: bold;
    position: relative;
    z-index: -1;
}

.searchresult p {
    width: 625px;
    font-size: 13px;
    margin-top: 0px;
    color: rgb(82, 82, 82);
}

.relatedsearches h3 {
    font-weight: normal;
    font-size: 19px;
    margin-top: 40px;
    margin-bottom: 10px;
}

.relatedlists ul {
    list-style: none;
    color: rgb(29, 1, 189);
    padding-left: 0px;
    font-size: 14px;
    margin-bottom: 50px;
}

.relatedlists {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 300px;
}

.relatedlists ul li {
    margin-bottom: 8px;
}

.pagelist {
    list-style: none;
    color: rgb(29, 135, 255);
    display: flex;
    flex-direction: row;
    font-size: 12px;
    margin-bottom: 30px;
    margin-left: 100px;
}

.pagelistprevious::before {
    content: '<';
    display: block;
    position: absolute;
    right: 12px;
    top: -35px;
    color: rgb(29, 135, 255);
    font-size: 20px;
    transform: scale(0.7, 1.2);
}

.pagelistprevious::after {
    content: '';
    display: block;
    position: absolute;
    right: -40px;
    top: -35px;
    width: 40px;
    height: 40px;
    background-image: url('images/g.png');
    background-repeat: no-repeat;
    background-size: 28px;
}

.pagelistfirst {
    margin-left: 20px;
    font-size: 13px;
}

.pagelistnumber::before, .pagelistfirst::before {
    content: '';
    display: block;
    position: absolute;
    left: -2px;
    top: -21px;
    border-radius: 50px;
    width: 10px;
    height: 10px;
    background-color: white;
    z-index: 3;
}

.pagelistnumber::after {
    content: '';
    display: block;
    position: absolute;
    left: -6px;
    top: -25px;
    border-radius: 50px;
    width: 18px;
    height: 18px;
    background-color: rgb(255, 196, 0);
    z-index: 2;
}

.pagelistfirst::after {
    content: '';
    display: block;
    position: absolute;
    left: -6px;
    top: -25px;
    border-radius: 50px;
    width: 18px;
    height: 18px;
    background-color: red;
    z-index: 2;
}

.pagelist li {
    margin-right: 15px;
    position: relative;
}

.pagelistnext {
    margin-left: 40px;
    font-size: 13px;
}

.pagelistnext::before {
    content: '>';
    display: block;
    position: absolute;
    left: 5px;
    top: -35px;
    color: rgb(29, 135, 255);
    font-size: 20px;
    transform: scale(0.7, 1.2);
}

.pagelistnext::after {
    content: '';
    display: block;
    position: absolute;
    left: -55px;
    top: -37px;
    width: 50px;
    height: 50px;
    background-image: url('images/gle.png');
    background-repeat: no-repeat;
    background-size: 48px;
}


<style>
#footer {
    background-color: rgb(238, 238, 238);
    position: relative;
    left: 0px;
    bottom: 0px;
    width: 100%;
    font-size: 13px;
    font-family: 'arial';
    color: rgb(85, 85, 85);
}

#footermenu {
    list-style: none;
    display: flex;
    flex-direction: row;
    margin-top: 0px;
    margin-left: 135px;
    margin-bottom: 0px;
    padding-bottom: 10px;
}

#footermenu li {
    padding-right: 30px;
}

#footerlocation {
    display: flex;
    direction: row;
    margin-left: 175px;
    position: relative;
    top: -5px;
}

#footerlocation p:nth-of-type(1) {
    font-weight: bold;
}


</style>


 
<?php

	
	if(isset($_POST['search1'])){
	
	

   
		$keyword = $_POST['keyword'];
	//	echo $keyword;
	 
	 	// $_SESSION['key'] =$keyword;
		 
		 // $keyword=  $_SESSION['key'];
		   
		  // echo $_SESSION['key'];
		   
		    

	 
?>
<div>
	<h2>View Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
	
    	$db_host = 'localhost';
		$db_user = 'cfavouri_mirror';
		$db_pass = 'mirror948474';
		$db_name = 'cfavouri_mirrordb';
		
		
		
// 		$db_host = 'localhost';
// 		$db_user = 'root';
// 		$db_pass = '';
// 		$db_name = 'cfavouri_mirrordb';
		
		//$con = mysql_connect($db_host, $db_user, $db_pass);
		$con = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

		$details = array();
	//	echo $_REQUEST['pass'];
	
	        $word='dcu';
	        $keyword1=strtolower($keyword);
	      //  echo $keyword1;
	     //  echo str_contains($keyword, 'temperature');
	     if(strpos(($keyword1), $word) !== false){
		 
		 
	 
		 
	
		$sql = "SELECT distinct * FROM temp_iot where  lower(d) LIKE '%$word%'";
		
	//	SELECT distinct * FROM temp_iot WHERE d LIKE '%$keyword%'"
	  //  echo $sql;
		$res = mysqli_query($con,$sql);
		
		if($res)
		{
		
		while($row = mysqli_fetch_assoc($res) )
		{
		    $temperature='temperature';
		    
		    
		   if(strpos($keyword1, $temperature) !== false)
		   {
		       
		   
    ?>
	<div style="word-wrap:break-word;">
		<h4>Temperature :<?php echo $row['a']?></h4>

	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	
	
	<?php
		   }
		   
		   
		   
		   
		    $humidity='humidity';
		    
		    
		   if(strpos($keyword1, $humidity) !== false)
		   {
		       
		   
    ?>
	<div style="word-wrap:break-word;">
		<h4>Humidity :<?php echo $row['b']?></h4>

	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	
	
	<?php
		   }
		   
		   
		   
		   
		   
		    $gas='gas';
		    
		    
		   if(strpos($keyword1, $gas) !== false)
		   {
		       
		   
    ?>
	<div style="word-wrap:break-word;">
		<h4>Gas Power: <?php echo $row['c']?></h4>

	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	
	
	<?php
		   }
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		}
		
		}
		
			else 
	   {
	       echo "No Record Found";
	       
	   }
	
	   
	   
	   
	?>
</div>
<?php
	}
	
	   
	$iot1='dublin';
	
	 if(strpos($keyword1,$iot1)!==false)
	   {
	
	$sql = "SELECT distinct * FROM temp_iot1 where  lower(location) LIKE '%$iot1%'";
		
	//	SELECT distinct * FROM temp_iot1 WHERE location LIKE '%$keyword%'"
		//echo $sql;
		$res = mysqli_query($con,$sql);
	
	  if($res)
	  {
		while($row = mysqli_fetch_assoc($res) )
		{
		    
		    $temperature='temperature';
		    if(strpos($keyword1,$temperature)!==false)
		    {
    ?>
	<div style="word-wrap:break-word;">
		<h4>Temperature :<?php echo $row['temperature']?></h4>

	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		    }
		}
	   
	  }
	  	else 
	   {
	       echo "No Record Found";
	       
	   }
	
	   
	?>
</div>
<?php
	}
	
	 $iot2='galway';
	
	 if(strpos($keyword1,$iot2)!==false)
	   {
	
		$sql = "SELECT distinct * FROM temp_iot2 where  lower(location) LIKE '%$iot2%'";
		
	//	SELECT distinct * FROM temp_iot2 WHERE location LIKE '%$keyword%'"
		//echo $sql;
		$res = mysqli_query($con,$sql);
		
		if($res)
		{
		
		while($row = mysqli_fetch_assoc($res) )
		{
		    
		    $humidity='humidity';
		    if(strpos($keyword1,$humidity)!== false)
		    {
		    
    ?>
	<div style="word-wrap:break-word;">
		<h4>Humidity :<?php echo $row['humidity']?></h4>

	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		    }
		}
		
		
	   
		}
		
		else 
	   {
	       echo "No Record Found";
	       
	   }
	
	   
	?>
</div>
<?php
	}
	        $iot3='limerick';
	
		if(strpos($keyword1, $iot3) !== false)
	   {
	       
	       
	
		$sql = "SELECT distinct * FROM temp_iot3 where  lower(location) LIKE '%$iot3%'";
		
	//	SELECT distinct * FROM temp_iot3 WHERE location LIKE '$iot3%'"
	//	echo $sql;
		$res = mysqli_query($con,$sql);
		
		if($res)
{
   
		
		while($row = mysqli_fetch_assoc($res) )
		{
		    $Gas='gas';
		    if(strpos($keyword1,$Gas)!==false)
		    {
    ?>
	<div style="word-wrap:break-word;">
		<h4>Gas Power :</h4><?php echo $row['gas']?></h4>
	
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		    }
		}
	   
	   
	   
	?>
</div>
<?php
	}
	
	else 
	   {
	       echo "No Record Found";
	       
	   }
	
	
	
	   }
	 
	 if($keyword1!=='')
	 {
	     //echo $keyword1;
	     
	     
	         
	          $aKeyword = explode(" ", $keyword1);
	          
      $query ="SELECT distinct * FROM web_information WHERE lower(meta_title) LIKE '%" . $aKeyword[0] . "%'";
     
     for($i = 1; $i < count($aKeyword); $i++) {
		if(!empty($aKeyword[$i])) {
			$query .= "OR lower(meta_title) LIKE '%" . $aKeyword[$i] . "%'";
		}
      }
	         $query.=" ORDER BY meta_title";
	       //  echo $query;
	     
	     //$sql = "SELECT distinct * FROM web_information WHERE lower(meta_title) LIKE '%$temperature%' OR lower(meta_title) LIKE '%dcu%' OR lower(site_url) LIKE '%$keyword1%'";
	     
	//	SELECT distinct * FROM temp_iot WHERE d LIKE '%$keyword%'"
	   // echo $sql;	
	    
	    $res = mysqli_query($con,$query);
		
		if($res)
		{
		
		
		
		while($row = mysqli_fetch_assoc($res) )
		{
		
		?>
		
		
		<div class="searchresult">
            <h2><?php echo $row['meta_title'] ?></h2>
            <a><a href=<?php echo $row['site_url'] ?>><?php echo $row['meta_title'] ?></a></a> <button>▼</button>
            <p><?php echo $row['meta_description'] ?></h4></p>
        </div>

		
		<?php
		}

		
		}
	     
	   
		
	
	     
	   
	     
	     
	
	     
	     
	       echo "<script>
                setTimeout(function(){
                    location.reload();
                }, 15000);
                </script>"; 

	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	     
	 }
	 
	   
	     
	     
			     
	     
	   
	}
	
	
	
	
	
ob_flush();	
?>


     
</html>