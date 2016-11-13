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
/* $sql_tag = "SELECT tags FROM `user` WHERE `name` = '".$c_dat."' ;";

$result = $conn->query($sql_tag);
$tags = $result->fetch_assoc(); */

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
//get Full Name
function getFullName($id){
	if($id==0){return "processor0";}
	if($id==1){return "mb0";}
	if($id==2){return "gc0";}
	if($id==3){return "ram0";}
	if($id==4){return "ps0";}
	if($id==5){return "hd0";}
	if($id==6){return "m0";}
	if($id==7){return "k0";}
	if($id==8){return "c0";}
	if($id==9){return "mo0";}
}
//get Name
function getName($id){
	if($id==0){return "p";}
	if($id==1){return "mb";}
	if($id==2){return "gc";}
	if($id==3){return "ram";}
	if($id==4){return "ps";}
	if($id==5){return "hd";}
	if($id==6){return "m";}
	if($id==7){return "k";}
	if($id==8){return "c";}
	if($id==9){return "mo";}
}

//Search 2 specific stuffs from every table
$sql = array();

$sql[0]= "SELECT id,comp_desc,price FROM `Processor` WHERE `tags` = '".$c_dat."' ";
$sql[1]= "SELECT id,comp_desc,price FROM `motherboard` WHERE `tags` = '".$c_dat."' ";
$sql[2]= "SELECT id,comp_desc,price FROM `graphic_card` WHERE `tags` = '".$c_dat."' ";
$sql[3]= "SELECT id,comp_desc,price FROM `ram` WHERE `tags` = '".$c_dat."' ";
$sql[4]= "SELECT id,comp_desc,price FROM `power_supply` WHERE `tags` = '".$c_dat."' ";
$sql[5]= "SELECT id,comp_desc,price FROM `hard_drive` WHERE `tags` = '".$c_dat."' ";
$sql[6]= "SELECT id,comp_desc,price FROM `mouse` WHERE `tags` = '".$c_dat."' ";
$sql[7]= "SELECT id,comp_desc,price FROM `keyboard` WHERE `tags` = '".$c_dat."' ";
$sql[8]= "SELECT id,comp_desc,price FROM `cabinet` WHERE `tags` = '".$c_dat."' ";
$sql[9]= "SELECT id,comp_desc,price FROM `monitor` WHERE `tags` = '".$c_dat."' ";


//lets store result
$r = array();
for($i=0;$i<10;$i++){
	$r[$i] = mysqli_query($conn,$sql[$i]);
}
//now lets display this
$flag = false;

$data = "<div class='comp_spec col-md-12'>";

for($i=0;$i<10;$i++){
	if (mysqli_num_rows($r[$i]) > 0) {
		// output data of each row
		$data .= "<h4>".getTableName($i)."</h4>
						<div class='row'>
							<div id='".getFullName($i)."'>";
		$x=0;
		while($row = mysqli_fetch_assoc($r[$i])) {
				$data .="    <div class='col-sm-12'>
						            <input type='hidden' name='data' value='".$c_dat."'>
						            <input type='hidden' name='id".getName($i)."_p".$x."' value='".$row['id']."'>
									<input type='text' name='".getName($i)."_p".$x."' required='required' size='30' id='".getName($i)."_p".$x."'
												placeholder='Price*' value='".$row['price']."'>
								</div>
							
								<div class='col-sm-12'>
									<textarea name='".getName($i)."_c".$x."' cols='28' rows='2' class='col-sm-12' id='".getName($i)."_c".$x."'
											placeholder='Config*' required='required'>".$row['comp_desc']."</textarea>
								</div>								    		
											";
				$x++;
			}
			$data .="		</div>
						</div>							
				 
						<button type='button' class='col-sm-12' id='button_".getName($i)."' onclick='".getName($i)."_duplicate()'>Add More</button>
						<br><br>	
								";
			
			//echo $data;
		} else {
			//echo "0 results";
			$flag = true;
		}
}
if($flag == true){
 echo "Sorry Folks we got nothing";	
}
else{
$data.="</div>
               		<div class='col-sm-12'>
						<input type='submit' name='action' value='Save'
									class='btn btn-send'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class='loader1'></span><div class='loader2'></div><span class='loader3'></span>
						<div id='msg-e'></div>
					</div>
		            <script type='text/javascript' src='js/scripts.js'></script>
		            
					";
echo $data;
}
$conn->close();