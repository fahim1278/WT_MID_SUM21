<?php
	$name="";
	$err_name="";
	$address="";
	$err_address="";
	$age="";
	$err_age="";
	$gender="";
	$err_gender="";
	$blood_group="";
	$err_blood_group="";
	$email="";
	$err_email="";
	$contact_no="";
	$err_contact_no="";
	$room_no="";
	$err_room_no="";
	$bill_amount="";
	$err_bill_amount="";
	$doctors_name="";
	$err_doctors_name="";
	$patient_admission_date="";
	$err_patient_admission_date="";
	$patient_release_date="";
	$err_patient_release_date="";


			
	$hasError=false;

	$array = array("A+","A-","B+","B-","AB+","AB-","O+","O-");



	//if($_SERVER["REQUEST_METHOD"]=="POST")
	if (isset($_POST["submit"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name Required";
		}
		elseif (strlen($_POST["name"]) <=2) {
			
			$hasError = true;
			$err_name = "Name must contain more than 2 characters";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["address"]))
		{
			$hasError = true;
			$err_address = "address Required";
		}
		else
		{
			$address = $_POST["address"];
		}

		if(empty($_POST["age"]))
		{
			$hasError = true;
			$err_age = "age Required";
		}
		else
		{
			$age = $_POST["age"];
		}

		if(!isset($_POST["gender"]))
		{
			$hasError = true;
			$err_gender = "gender required";
		}
		else
		{
			$gender = $_POST["gender"];
		}

		if(!isset($_POST["blood_group"]))
		{
			$hasError = true;
			$err_blood_group = "blood group Required";
		}

		else
		{
			$blood_group = $_POST["blood_group"];
		}
		if(empty($_POST["email"]))
		{
			$hasError = true;
			$err_email = "email Required";
		}

		else
		{
			$email = $_POST["email"];
		}

		if(empty($_POST["contact_no"]))
		{
			$hasError = true;
			$err_contact_no = "contact number Required";
		}

		else
		{
			$contact_no = $_POST["contact_no"];
		}
		if(empty($_POST["room_no"]))
		{
			$hasError = true;
			$err_room_no = "room number number Required";
		}

		else
		{
			$room_no = $_POST["room_no"];
		}

		if(empty($_POST["doctors_name"]))
		{
			$hasError = true;
			$err_doctors_name = "name Required";
		}
		elseif (strlen($_POST["doctors_name"]) <=2) {
			
			$hasError = true;
			$err_doctors_name = "Name must contain more than 2 characters";
		}

		else
		{
			$doctors_name = $_POST["doctors_name"];
		}

		if(empty($_POST["bill_amount"]))
		{
			$hasError = true;
			$err_bill_amount = "amount Required";
		}

		else
		{
			$bill_amount = $_POST["bill_amount"];
		}
		if(empty($_POST["patient_admission_date"]))
		{
			$hasError = true;
			$err_patient_admission_date = "enter valid date";
		}

		else
		{
			$patient_admission_date = $_POST["patient_admission_date"];
		}

		if(empty($_POST["patient_release_date"]))
		{
			$hasError = true;
			$err_patient_release_date = "enter valid date";
		}

		else
		{
			$patient_release_date = $_POST["patient_release_date"];
		}



		if (!$hasError) {
			echo "<h1>Form Submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["age"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["blood_group"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["contact_no"]."<br>";
			echo $_POST["room_no"]."<br>";
			echo $_POST["doctors_name"]."<br>";
			echo $_POST["bill_amount"]."<br>";
			//header("Location: hope.php");
		}
	
	}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<table align="center">
			<tr>
				<td><h3>Patient release form</h3></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $name ?>" placeholder="Name"></style></td>
				<td><span><?php echo "$err_name"; ?></span></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" value="<?php echo $address ?>"placeholder="Address"></td>
				<td><span><?php echo "$err_address"; ?></span></td>
			</tr>
			
				<td>Age:</td>
				<td><input type="text" name="age" value="<?php echo $age ?>"placeholder="Age"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?>>Male<input type="radio" name="gender" value="Female"  <?php if($gender == "Female") echo "checked"?>>Female</td>
				<td><span><?php echo "$err_gender"; ?></span></td>
			</tr>
			<tr>
				<td>Blood Group:</td>
				<td>
					<select name="blood_group">
						<option disabled selected="">Select </option>
						<?php
							$selected="";
							foreach ($array as $x) {
								if ($x == $blood_group) 
									
									echo "<option selected>$x</option>";
								else
									echo "<option>$x</option>";
							}
						?>
					</select>
				</td>
				<td><span><?php echo "$err_blood_group"; ?></span></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value="<?php echo $email ?>"placeholder="Email"></td>
				<td><span><?php echo "$err_email"; ?></span></td>
			</tr>
			<tr>
			<tr>
				<td>Contact no.:</td>
				<td><input type="text" name="contact_no" value="<?php echo $contact_no ?>"placeholder="Contact no."></td>
				<td><span><?php echo "$err_contact_no"; ?></span></td>
			</tr>
			<tr>
				<td>Room no.:</td>
				<td><input type="text" name="room_no" value="<?php echo $room_no ?>"placeholder=""></td>
				<td><span><?php echo "$err_room_no"; ?></span></td>
			</tr>
			<tr>
				<td>Doctor's Name:</td>
				<td><input type="text" name="doctors_Name" value="<?php echo $doctors_name ?>"placeholder=""></td>
				<td><span><?php echo "$err_doctors_name"; ?></span></td>
			</tr>
			<tr>
				<td>Patient admission date</td>
				<td><input type="text" name="patient_admission_date" value="<?php echo $patient_admission_date ?>"placeholder="">Day<input type="text"name="patient_admission_date" value="<?php echo $patient_admission_date ?>"placeholder="">Month<input type="text"name="patient_admission_date" value="<?php echo $patient_admission_date ?>" placeholder="">Year</td>
				<td><span><?php echo "$err_patient_admission_date"; ?></span></td>
			</tr>
			<tr>
				<td>Patient release date</td>
				<td><input type="text" name="patient_release_date" value="<?php echo $patient_release_date ?>"placeholder="">Day<input type="text"name="patient_release_date" value="<?php echo $patient_release_date ?>"placeholder="">Month<input type="text"name="patient_release_date" value="<?php echo $patient_release_date ?>" placeholder="">Year</td>
				<td><span><?php echo "$err_patient_release_date"; ?></span></td>
			</tr>
			<tr>
				<td>Bill Amount:</td>
				<td><input type="text" name="bill_amount" value="<?php echo $bill_amount ?>"placeholder=""></td>
				<td><span><?php echo "$err_bill_amount"; ?></span></td>
			</tr>
			<tr></tr>
			<tr><td align="right"><input type="Submit" name="submit" value="Submit"></td></tr>
		</table>
	</form>

</body>
</html>