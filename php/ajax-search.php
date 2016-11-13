<?php

$c_dat = @trim(stripslashes($_POST['data']));

//Database Connection Config

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

//Checking User
$sql_tag = "SELECT tags FROM `user` WHERE `name` = '".$c_dat."' ;";

$result = $conn->query($sql_tag);
$tags = $result->fetch_assoc();

//echo "Result Found = " . $tags["tags"];

/* $data="	<div class='row'>
				<div class='comp_spec col-md-12'>
				  <h4>Processor</h4>
						<div class='col-md-8'>
						  	<h6>Description</h6>
						</div>
						<div class='col-md-2'><h5>36,999</h5></div>
					    <div class='col-md-2'><input type='checkbox' name='p' ></div>
                </div>						
			</div>";

echo $data; */

function getTableName($id){
	if($id==8){return "Cabinet";}
	if($id==2){return "Graphic Card";}
	if($id==5){return "Hard Drive";}
	if($id==7){return "Keyboard";}
	if($id==9){return "Monitor";}
	if($id==1){return "Motherboard";}
	if($id==6){return "Mouse";}
	if($id==4){return "Power Supply";}
	if($id==0){return "Processor";}
	if($id==3){return "Ram";}
}

//Search 2 specific stuffs from every table
$sql = array();

$sql[0]= "SELECT comp_desc,price FROM `Processor` WHERE `tags` = '".$tags["tags"]."' ";
$sql[1]= "SELECT comp_desc,price FROM `motherboard` WHERE `tags` = '".$tags["tags"]."' ";
$sql[2]= "SELECT comp_desc,price FROM `graphic_card` WHERE `tags` = '".$tags["tags"]."' ";
$sql[3]= "SELECT comp_desc,price FROM `ram` WHERE `tags` = '".$tags["tags"]."' ";
$sql[4]= "SELECT comp_desc,price FROM `power_supply` WHERE `tags` = '".$tags["tags"]."' ";
$sql[5]= "SELECT comp_desc,price FROM `hard_drive` WHERE `tags` = '".$tags["tags"]."' ";
$sql[6]= "SELECT comp_desc,price FROM `mouse` WHERE `tags` = '".$tags["tags"]."' ";
$sql[7]= "SELECT comp_desc,price FROM `keyboard` WHERE `tags` = '".$tags["tags"]."' ";
$sql[8]= "SELECT comp_desc,price FROM `cabinet` WHERE `tags` = '".$tags["tags"]."' ";
$sql[9]= "SELECT comp_desc,price FROM `monitor` WHERE `tags` = '".$tags["tags"]."' ";


//lets store result
$r = array();
for($i=0;$i<10;$i++){
	$r[$i] = mysqli_query($conn,$sql[$i]);
}
//now lets display this
$flag = false;
for($i=0;$i<10;$i++){
	if (mysqli_num_rows($r[$i]) > 0) {
		// output data of each row
		$data = "<div class='row'>
							<div class='comp_spec col-md-12'>
							  <h4>".getTableName($i)."</h4>";
		while($row = mysqli_fetch_assoc($r[$i])) {
				$data .="	<div class='col-md-8'>
									  	<h6>".$row['comp_desc']."</h6>
									</div>
									<div class='col-md-2' name='cal'><h5>₹ ".$row['price']."</h5></div>
								    <div class='col-md-2'><input type='checkbox' onclick='handleClick(this);' value='".$row['price']."' ></div>
			                </div>						
						</div>											
											";
				
			}
			echo $data;
		} else {
			//echo "0 results";
			$flag = true;
		}
}
if($flag == true){
 echo "Sorry Folks we got nothing";	
}
else{
$data="
								<div class='input-group row-static'>
								      <div class='input-group-addon'>₹</div>
								      <input type='text' class='form-control' id='total' placeholder='Total Amount' name='total' readonly>
								      <div class='input-group-addon'>.00</div>
								    </div>
					";
echo $data;
}
$conn->close();