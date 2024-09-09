<?php

include("includes/db24.php");

?>
<html>

<head>
	<title>karking</title>

	<style>
		.header {
			padding-top: 10px;
			padding-left: 10px;
			height: 70px;
			width: auto;
			background: #222;

		}

		.navbar {
			padding-top: 5px;
			padding-left: 50px;
			height: 25px;
			width: auto;
			background: #4caf50;
		}

		.left_content {
			float: left;
			padding: 10px;
			margin-top: 5px;
			height: auto;
			width: 83%;
			background: #fff;
			border: 1px solid black;
		}

		table,
		td {
			padding: 10px;
			border: 1px solid black;
			border-collapse: collapse;

		}

		.right_content {
			float: right;
			margin-top: 5px;
			height: 500px;
			width: 15%;
			background: #fff;
			border: 1px solid black;
		}

		nav {

			width: 10%;
			background-color: #f1f1f1;
			text-decoration: none;
			text-align: center;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 100%;
			background-color: #f1f1f1;
		}

		li a {
			display: block;
			color: #000;
			padding: 8px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #555;
			color: white;
		}

		.footer {
			margin-top: 5px;
			padding-top: 3px;
			float: left;
			height: 30px;
			width: 100%;
			background: #222;
		}

		.footer_text {
			color: #fff;
		}
	</style>

<body>
	<div class="header">
		<!-- <img src="images/logo10.png" height="40" width="120"> -->
	</div>
	<div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>

	<div class="left_content">

		<div align="center" style="margin-top:0px;">
			<form method="post" action="add_costumer.php">
				<div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
					Register costumers
				</div>
				<table>
					<tr>
						<td><b>Name</b></td>
						<td>
							<input type="text" name="costumer_name" />
						</td>
					</tr>
					<tr>
						<td><b>Contact No.</b></td>
						<td>
							<input type="text" name="mob" />
						</td>
					</tr>

					<tr>
						<td><b>Customer Address</b></td>
						<td>
							<input type="text" name="cos_add" />
						</td>
					</tr>
					<tr>
						<td><b>Select Village</b></td>
						<td>
							<select name="village">
								<option value="Achham">Achham</option>
								<option value="Arghakhanchi">Arghakhanchi</option>
								<option value="Baglung">Baglung</option>
								<option value="Baitadi">Baitadi</option>
								<option value="Bajhang">Bajhang</option>
								<option value="Bajura">Bajura</option>
								<option value="Banke">Banke</option>
								<option value="Bara">Bara</option>
								<option value="Bardiya">Bardiya</option>
								<option value="Bhaktapur">Bhaktapur</option>
								<option value="Bhojpur">Bhojpur</option>
								<option value="Chitwan">Chitwan</option>
								<option value="Dadeldhura">Dadeldhura</option>
								<option value="Dailekh">Dailekh</option>
								<option value="Dang">Dang</option>
								<option value="Darchula">Darchula</option>
								<option value="Dhading">Dhading</option>
								<option value="Dhankuta">Dhankuta</option>
								<option value="Dhanusa">Dhanusa</option>
								<option value="Dholk">Dholk</option>
								<option value="Dolpa">Dolpa</option>
								<option value="Doti">Doti</option>
								<option value="Eastern Rukum">Eastern Rukum</option>
								<option value="Gorkha">Gorkha</option>
								<option value="Gulmi">Gulmi</option>
								<option value="Humla">Humla</option>
								<option value="Ilam">Ilam</option>
								<option value="Jajarkot">Jajarkot</option>
								<option value="Jhapa">Jhapa</option>
								<option value="Jumla">Jumla</option>
								<option value="Kailali">Kailali</option>
								<option value="Kalikot">Kalikot</option>
								<option value="Kanchanpur">Kanchanpur</option>
								<option value="Kapilvastu">Kapilvastu</option>
								<option value="Kaski">Kaski</option>
								<option value="Kathmandu">Kathmandu</option>
								<option value="Kavrepalanchok">Kavrepalanchok</option>
								<option value="Khotang">Khotang</option>
								<option value="Lalitpur">Lalitpur</option>
								<option value="Lamjung">Lamjung</option>
								<option value="Mahottari">Mahottari</option>
								<option value="Makwanpur">Makwanpur</option>
								<option value="Manang">Manang</option>
								<option value="Morang">Morang</option>
								<option value="Mugu">Mugu</option>
								<option value="Mustang">Mustang</option>
								<option value="Myagdi">Myagdi</option>
								<option value="Nawalparasi">Nawalparasi</option>
								<option value="Nuwakot">Nuwakot</option>
								<option value="Okhaldhunga">Okhaldhunga</option>
								<option value="Palpa">Palpa</option>
								<option value="Panchthar">Panchthar</option>
								<option value="Parasi">Parasi</option>
								<option value="Parbat">Parbat</option>
								<option value="Parsa">Parsa</option>
								<option value="Pyuthan">Pyuthan</option>
								<option value="Ramechhap">Ramechhap</option>
								<option value="Rasuwa">Rasuwa</option>
								<option value="Rautahat">Rautahat</option>
								<option value="Rolpa">Rolpa</option>
								<option value="Rukum West">Rukum West</option>
								<option value="Rupandehi">Rupandehi</option>
								<option value="Salyan">Salyan</option>
								<option value="Sankhuwasabha">Sankhuwasabha</option>
								<option value="Saptari">Saptari</option>
								<option value="Sarlahi">Sarlahi</option>
								<option value="Sindhuli">Sindhuli</option>
								<option value="Sindhupalchok">Sindhupalchok</option>
								<option value="Siraha">Siraha</option>
								<option value="Solukhumbu">Solukhumbu</option>
								<option value="Sunsari">Sunsari</option>
								<option value="Surkhet">Surkhet</option>
								<option value="Syangja">Syangja</option>
								<option value="Tanahun">Tanahun</option>
								<option value="Taplejung">Taplejung</option>
								<option value="Terhathum">Terhathum</option>
								<option value="Udayapur">Udayapur</option>
								<option value="Western Rukum">Western Rukum</option>
								<option value="Yaphu">Yaphu</option>
								<option value="Others">Others</option>
							</select>
						</td>
					</tr>

					<td colspan="2" align="center">
						<input type="submit" name="insert_costumer" value="Submit" style="background:#4caf50;
	border:none;color:#fff;font-size:20px;border-radius:4px;" />
					</td>

					</tr>

				</table>
			</form>

		</div>


	</div>
	<div class="right_content">
		<ul>
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="all_costumer.php">All Customer</a></li>
			<li><a href="#news">News</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="#about">About</a></li>
		</ul>

	</div>
	<div class="footer">
		<!-- <div align="center" class="footer_text">&copy: copyright 2018 by karking</div> -->
		<p class="paragraph">
                    Copyright © 2022-
                    <script>document.write((new Date()).getFullYear())</script> <a href="#">Karking</a>
                </p>
	</div>

</body>

</html>
<?php

if (isset($_POST['insert_costumer'])) {

	//text data variables
	$costumer_name = $_POST['costumer_name'];
	$mob = $_POST['mob'];
	$cos_add = $_POST['cos_add'];
	$village = $_POST['village'];
	$status = 'due';

	if ($costumer_name == '') {
		echo "<script>alert('please fill all the fields !')</script>";
		exit();
	} else {

		$insert_cos = "insert into costumers (cos_name,mobile,village,p_status,cos_address)values('$costumer_name','$mob','$village','$status','$cos_add')";

		$run_cos = mysqli_query($con, $insert_cos);
		if ($run_cos) {

			echo "
		  <script>alert('costumer inserted successfully')</script>";
		}
	}
}





?>