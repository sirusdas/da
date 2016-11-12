<?php
$sql = array();



function cleanData($a) {

	$b = str_replace( ',', '', $a );
	
	if( is_numeric( $b ) ) {
		$a = $b;
	}

	return $a;

}
function getAllP($name){
	$i=0;$x = array();
	while($_POST[$name . $i]!=""){
		$x[$i]= cleanData(@trim(stripslashes($_POST[$name . $i ])));
		echo $x[$i];
		//echo "Mr X ...........   " . $x[$i];
		$i++;
	}
	return $x;
}


function getAll($name){
	$i=0;$x = array();
	while($_POST[$name . $i]!=""){
		$x[$i]= @trim(stripslashes($_POST[$name . $i ]));
		//echo "Mr X ...........   " . $x[$i];
		$i++;	  
	}
	return $x;
}
$p_p = array();
$p_c = array();
$mb_p = array();
$mb_c = array();
$gc_p = array();
$gc_c = array();
$ram_p = array();
$ram_c = array();
$ps_p = array();
$ps_c = array();
$hd_p = array();
$hd_c = array();
$mse_p = array();
$mse_c = array();
$kybrd_p = array();
$kybrd_c = array();
$cab_p = array();
$cab_c = array();
$mon_p = array();
$mon_c = array();

$p_p = getAllP("p_p");
$p_c = getAll("p_c");
$mb_p = getAllP("mb_p");
$mb_c = getAll("mb_c");
$gc_p = getAllP("gc_p");
$gc_c = getAll("gc_c");
$ram_p = getAllP("ram_p");
$ram_c = getAll("ram_c");
$ps_p = getAllP("ps_p");
$ps_c = getAll("ps_c");
$hd_p = getAllP("hd_p");
$hd_c = getAll("hd_c");
$mse_p = getAllP("m_p");
$mse_c = getAll("m_c");
$kybrd_p = getAllP("k_p");
$kybrd_c = getAll("k_c");
$cab_p = getAllP("c_p");
$cab_c = getAll("c_c");
$mon_p = getAllP("mo_p");
$mon_c = getAll("mo_c");

//tags
$tags= @trim(stripslashes($_POST[ "tags" ]));
//pin
$pin= @trim(stripslashes($_POST[ "pin" ]));


$spin="sirus";

//Storing files

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "da_comp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$u = 0;$sql=null;
while($p_c[$u]!="" && $p_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `Processor` (`id`, `brand`, `version`, `cores`, `threads`, `socket_type`, `cache`, `speed`, `comp_desc`, `gen`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '', '', '', '', '".$p_c[$u] . "', '', '".$p_p[$u] . "' , '', '".$tags . "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($cab_c[$u]!="" && $cab_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `cabinet` (`id`, `brand`, `version`, `type`, `comp_desc`, `size`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '".$cab_c[$u] . "', '', '".$cab_p[$u] . "', '', '".$tags . "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($gc_c[$u]!="" && $gc_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `graphic_card` (`id`, `brand`, `version`, `size`, `comp_desc`, `gen`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '".$gc_c[$u] . "', '', '".$gc_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($hd_c[$u]!="" && $hd_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `hard_drive` (`id`, `brand`, `version`, `size`, `comp_desc`, `gen`, `type`, `speed`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '".$hd_c[$u] . "', '', '', '', '".$hd_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($kybrd_c[$u]!="" && $kybrd_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `keyboard` (`id`, `brand`, `version`, `type`, `size`, `comp_desc`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '', '".$kybrd_c[$u] . "', '".$kybrd_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($mon_c[$u]!="" && $mon_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `monitor` (`id`, `brand`, `version`, `type`, `size`, `comp_desc`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '', '".$mon_c[$u] . "', '".$mon_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($mb_c[$u]!="" && $mb_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `motherboard` (`id`, `brand`, `version`, `gen`, `socket_type`, `max_ram`, `comp_desc`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '', '', '".$mb_c[$u] . "', '".$mb_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($mse_c[$u]!="" && $mse_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `mouse` (`id`, `brand`, `version`, `mouse_type`, `size`, `laser_type`, `comp_desc`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '', '', '".$mse_c[$u] . "', '".$mse_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($ps_c[$u]!="" && $ps_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `power_supply` (`id`, `brand`, `power`, `gen`, `comp_desc`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '".$ps_c[$u] . "', '".$ps_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}
$u=0;$sql=null;
while($ram_c[$u]!="" && $ram_p[$u]!="" && $tags!=""){
	$sql[$u] = "INSERT INTO `ram` (`id`, `version`, `speed`, `size`, `qty`, `comp_desc`, `gen`, `price`, `warranty`, `tags`) VALUES (NULL, '', '', '', '', '".$ram_c[$u] . "', '', '".$ram_p[$u] . "', '', '".$tags. "');";
	if ($conn->query($sql[$u]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$u] . "<br>" . $conn->error;
	}
	$u++;
}

/* for($i=0;$i<10;$i++){
	if ($conn->query($sql[$i]) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql[$i] . "<br>" . $conn->error;
	}
} */

$conn->close();





