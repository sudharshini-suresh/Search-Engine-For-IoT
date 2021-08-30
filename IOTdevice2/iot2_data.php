
<html>
 <head>

  <meta http-equiv="refresh" content="30; url="<?php echo $_SERVER['PHP_SELF']; ?>">
 </head>
 <body>

	<?php
	// function definitions
	function get_input_params() 
	{
		$input_params = array();
		$input_params['humidity'] = isset($_REQUEST['humidity'])?$_REQUEST['humidity']:NULL;
			$input_params['location'] = isset($_REQUEST['location'])?$_REQUEST['location']:NULL;
	//	$input_params['e'] = isset($_REQUEST['e'])?$_REQUEST['e']:NULL;
		$input_params['pass'] = isset($_REQUEST['pass'])?$_REQUEST['pass']:NULL;
		$input_params['humidity'] = trim($input_params['humidity']);
		$input_params['location'] = trim($input_params['location']);
	//	$input_params['e'] = trim($input_params['e']);
		$input_params['pass'] = trim($input_params['pass']);
		return $input_params;
//	echo $input_params;
	}

	function authenticate($input_params) 
	{
		if ( $input_params['pass'] == 'sudharshini' || $input_params['pass'] == 'humidity in Galway' || $input_params['pass'] == 'humidity in Galway building room'||$input_params['pass'] == 'humidity in Galway building room 1'||$input_params['pass'] == 'what is the humidity in Galway building room' || $input_params['pass'] == 'humidity at school of Galway room number' || $input_params['pass'] == 'Live temperature and gas details of engineering building'  || $input_params['pass'] == 'Weather details of DCU building' || $input_params['pass'] == 'Find the room temperature of room number 3 at engineering building'  || $input_params['pass'] == 'Temperature in dcu building today' || $input_params['pass'] == 'Temperature in dcu building now' || $input_params['pass'] == 'Presence of gas in engineering building' || $input_params['pass'] == 'Gas detection in engineering building now' || $input_params['pass'] == 'Temperature sensor details in dcu building' || $input_params['pass'] == 'Live temperature of dcu building First floor room number 1' || $input_params['pass'] == 'Average temperature at DCU today')
			return true;
		else
			return false;
	}

	function db_connect() 
	{
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
		//$res = mysql_select_db($db_name);
		//if ( !$res )
		//{
		//	send_response('', false);
		//}
	}

	function db_close()
	{
		mysqli_close();
	}

	function insert_or_update($input_params) 
	{
		$status = false;
		
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


	//$rowSQL = mysql_query( "SELECT MAX( id ) AS max FROM energyview_data;" );
	//$row = mysql_fetch_array( $rowSQL );
	//$id = $row['max'];

	//$id = $id + 1;
		//$id = 1;

	if($input_params["humidity"] != '2000'){
	   // echo $input_params["temperature"];
		$sql = "update temp_iot2 set  humidity= '{$input_params["humidity"]}'";
		//echo $sql;
		$res = mysqli_query($con,$sql);
//		return $res;
	}
	
	if($input_params["location"] != '2000'){
		$sql = "update temp_iot2 set location = '{$input_params["location"]}'";
		$res = mysqli_query($con,$sql);
//		return $res;
	}

//	if($input_params["e"] != '2000'){
//		$sql = "update temp_iot set e = '{$input_params["e"]}'";
//		$res = mysqli_query($con,$sql);
//		return $res;
//	}	
	
	
//		$sql = "INSERT INTO temp_iot (a, b, c,d,e) VALUES ( '{$input_params["a"]}', '.{$input_params["b"]}', '{$input_params["c"]}', '{$input_params["d"]}', //'{$input_params["e"]}') ";
		
//		$res = mysql_query($sql);
//		return $res;

if($input_params["humidity"] != '2000'){

date_default_timezone_set('Asia/Kolkata');
	
	$date= date("Y-m-d");
$time=date("h:i:s A");

	
	$sql = "INSERT INTO te_graph (humidity,location,date1,time) VALUES ( '{$input_params["humidity"]}','{$input_params["location"]}', '$date','$time') ";
		
		//echo $sql;
	$res = mysqli_query($con,$sql);
	return $res;
	
	}


	}

	function get_details() {
	
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
		$sql = 'SELECT * FROM temp_iot2';
		$res = mysqli_query($con,$sql);
		while( $row = mysqli_fetch_assoc($res) )
		{
			$details['humidity'] = $row['humidity'];
			$details['location'] = $row['location'];
		//	$details['e'] = $row['e'];
		}
	//	echo $details;
		return $details;
	}

	function send_response($msg = '', $status = false) 
	{
		if ($status)
		{
			if ($msg == '')
				echo "Success";
			else	
			echo $msg;
		}
		else
		{
			if ($msg == '')
				echo "Some error happened. Please try again later";
			else	
				echo $msg;
		}
	}

	$input_params = array();
	$authenticated = false;

	$input_params = get_input_params();

    // echo $input_params;
	if ( isset($input_params['pass']) && $input_params['pass'] != NULL && $input_params['pass'] != '' )
		$authenticated = authenticate($input_params);

	if ( !$authenticated) 
	{
		send_response('Invalid credentials', false);
		exit;
	}	

	db_connect();
	
	if( isset($input_params['humidity']) && $input_params['humidity'] != '' && $input_params['humidity'] != NULL)
	{
		$status = false;
		$status = insert_or_update($input_params);
		if ($status) 
		{
			send_response('', true);
		} 
		else
		{
			send_response('', false);
		}
	} 
	else {
		
		$details = get_details();
		
		if ( is_array($details) && count($details) > 0 ) 
		{
		    echo $json_details;
			$json_details = json_encode($details);
			send_response($json_details, true);
		} 
		else
		{
			send_response('No Records Found', false);
		}
	}
	db_close();
	?>
	
	
 </body>
</html>
