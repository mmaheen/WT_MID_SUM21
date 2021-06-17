	<?php
	
		$name="";
		$errname="";
		$username="";
		$errusername="";
		$password="";
		$errpassword="";
		$confirm_password="";
		$errconfirm_password="";
		$email="";
		$erremail="";
		$address="";
		$erraddress="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["name"]))
				$errname="Name required";
			
			if(empty($_POST["username"]))
				$errusername="Username required";
			
			if(empty($_POST["password"]))
				$errpassword="Password required";
			
			if(empty($_POST["confirm_password"]))
				$errconfirm_password="You must confirm your password";
			
			if(empty($_POST["email"]))
				$erremail="You must input a valid email";
			
			if(empty($_POST["address"]))
				$erraddress="Adress required";
			
		}
		
		
		echo $_POST ["name"]."<br>";
		echo $_POST ["username"]."<br>";
		echo $_POST ["password"]."<br>";
		echo $_POST ["confirm_password"]."<br>";
		echo $_POST ["email"]."<br>";
		echo $_POST ["address"]."<br>";
			
	?>
<html>
	<head>
	</head>
	
	<body align ="center">
		<h1>
			Club Member Registration
		</h1>
		
		<form action = "" method= "post">
			<table align ="center">
				<tr>
					<td>
						Name: 
					</td>
					
					<td>
						<input type="text" placeholder ="Name" name= "name"> <span><?php echo $errname;?></span>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Username: 
					</td>
					
					<td>
						<input type="text" placeholder = "Username" name= "username"><span><?php echo $errusername;?></span>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Password: 
					</td>
					
					<td>
						<input type="text" placeholder = "Password" name= "password"><span><?php echo $errpassword;?></span>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Confirm Password: 
					</td>
					
					<td>
						<input type="text" placeholder = " Confirm Password" name= "confirm_password"><span><?php echo $errconfirm_password;?></span>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Email: 
					</td>
					
					<td>
						<input type="text" placeholder = "Email" name= "email" name="email"><span><?php echo $erremail;?></span>
					</td>
				</tr>
		
				
				<tr>
					<td>
						Phone: 
					</td>
					
					<td>
						<input type="text" placeholder= "Code"> - <input type="text" placeholder= "Number">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Address: 
					</td>
					
					<td>
						<input type="text" placeholder= "Street address">
					</td>
					
					
				</tr>
				
				<tr>
					<td>
						
					</td>
					
					<td>
						<input type="text" placeholder ="City"> - 
						<input type="text" placeholder ="State">
					</td>
				</tr>
				
				<tr>
					<td>
						
					</td>
					
					<td>
						<input type="text" placeholder ="Postal/Zip code">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Birth Date
					</td>
					
					<td>
						<select name= "day">
							<option selected disabled>
								Day
								
							</option>
							
							<option>
							
							
								<?php for($i=1;$i<=31;$i++)
									 echo "<option>$i</option>";
								?>
							</option>	
							
						</select>
						
						<select name= "month">
							<option selected disabled>
								Month
							</option>
							
							<option>
								January
							</option>
							
							<option>
								February
							</option>
							
							<option>
								March
							</option>
							
							<option>
								April
							</option>
							
							<option>
								May
							</option>
							
							<option>
								June
							</option>
							
							<option>
								July
							</option>
							
							<option>
								August
							</option>
							
							<option>
								September
							</option>
							
							<option>
								October
							</option>
							
							<option>
								November
							</option>
							
							<option>
								December
							</option>
						</select>
						
						<select name= "year">
							<option selected disabled>
								Year
							</option>
							<?php for($i=2001;$i<=2031;$i++)
									 echo "<option>$i</option>";
								?>
						</select>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Gender
					</td>
					
					<td>
						<input type="radio" name="gender" value= "Male"> Male
						<input type="radio" name="gender" value="Famale"> Famale
					</td>
				</tr>
				
				<tr>
					<td>
						Where did you hear <br> about us?
					</td>
					
					<td>
						<input type ="checkbox">A friend o Colleague<br>
						<input type ="checkbox"> Google <br>
						<input type ="checkbox"> Blog post <br>
						<input type ="checkbox"> News Article<br>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Bio: 
					</td>
					
					<td>
						<textarea>
						</textarea>
					</td>
				</tr>
				
				
				<tr>
					<td>
					</td>
					
					<td>
						<input type= "submit" value= "Register">
					</td>
				</tr>
			
			</table>
		</form>	
	</body>
</html>